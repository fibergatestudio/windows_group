<?php
/*
Plugin Name: Импорт цен из файла XLSX
Description: Активируйте этот плагин чтобы импортировать цены в базу данных
Plugin URI: 
Author: Вячеслав (vyacheslavfil@ukr.net)
Author URI: 
*/

register_activation_hook(__FILE__, function()
{
	global $wpdb;

	$wpdb -> query("CREATE TABLE IF NOT EXISTS `{$wpdb -> prefix}window_prices` (
		`id` INT(11) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
		`page_name` VARCHAR(255) DEFAULT NULL,
		`data` TEXT DEFAULT NULL
	) {$wpdb -> get_charset_collate()};");
});

register_deactivation_hook(__FILE__, function()
{
	global $wpdb;
	$wpdb -> query("DROP TABLE IF EXISTS `{$wpdb -> prefix}window_prices`");
});


require 'PhpSpreadsheet/vendor/autoload.php';
include 'priceobj.php';


$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
$reader->setReadDataOnly(true);

add_action( 'admin_menu', 'import_prices_admin_menu' );

function import_prices_admin_menu(){
	// $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position
	add_menu_page( 'Импорт цен (title)', 'Импорт цен', 'manage_options', __FILE__, 'import_prices_page', plugins_url( 'table.png', __FILE__ ), "6.3" );
}


function import_prices_page(){
	?>

	<div class="wrap">
		<h2>Импорт цен из файла XLSX</h2>
		<h4>Загрузите файл XLSX для импорта цен</h4>				
	</div>

	<form enctype="multipart/form-data" action="" method="POST">
		<?php wp_nonce_field( 'my_file_upload', 'fileup_nonce' ); ?>
		<input name="my_file_upload" type="file" />
		<input type="submit" value="Загрузить XLSX" />
	</form>
	<hr>
	
	<?php
	
	global $wpdb;
	$result_params = $wpdb->get_results("SELECT * FROM `{$wpdb -> prefix}window_prices` WHERE `page_name` = 'profilniye_sistemy' ");
	if ($result_params[0]) {
		foreach ($result_params[0] as $value) {
			//echo '<pre>'.print_r(json_decode($value), true).'</pre>';
		}		
	}
}


add_action( 'init', function () use ($reader,$price_obj) {
	if( wp_verify_nonce( $_POST['fileup_nonce'], 'my_file_upload' ) ){

		global $wpdb;
		
		if ( ! function_exists( 'wp_handle_upload' ) ) 
			require_once( ABSPATH . 'wp-admin/includes/file.php' );     

		$file = $_FILES['my_file_upload'];

		$overrides = [ 'test_form' => false ];

		$movefile = wp_handle_upload( $file, $overrides );

		if ( $movefile && empty($movefile['error']) ) {
			
			$data_arr = ['plastikoviye_okna' => '', 'okna_v_dom' => '', 'okna_na_balkon' => '', 'okna_na_dachu' => '', 'okna_v_vannuyu' => '', 'okna_panoramniye' => '', 'okna_razdvizniye' => '', 'okna_francuzskiye' => '', 'okna_energosberegayushiye' => '', 'okna_laminirovannye' => '', 'okna_sluhovye' => '', 'okna_erkerniye' => '', 'okna_ugloviye' => '', 'okna_krugliye' => '', 'okna_ovalniye' => '', 'okna_shestiugolniye' => '', 'okna_treugolniye' => '', 'dvery_na_terrasu' => '', 'dvery_vhodniye' => '', 'dvery_na_balcon' => '', 'dvery_mezkomnatnie' => '', 'dvery_razdvizniye' => '', 'balkonnye_bloki' => '', 'dvery_shtulpovie' => '', 'dvery_v_ofis' => '', 'dvery_metaloplastikovie' => '', 'peregorodki_plastikovye' => '', 'profilniye_sistemy' => '', 'osteklenie_balkonov_i_lodzhij' => '', 'okna_v_borispole' => '', 'okna_v_beloy_tserkvi' => '', 'okna_v_brovarakh' => '', 'okna_v_vasilkove' => '', 'okna_v_irpene' => '', 'osteklenie_kvartir' => '', 'okna_na_kuhnyu' => '', 'okna_arochnyye' => ''];
			
			$filename = $movefile['url'];
			$file = file_get_contents($filename);
			$inputFileName = 'tempfile.xlsx';
			file_put_contents($inputFileName, $file);
			
			$spreadsheet = $reader->load($inputFileName);	

			foreach ($data_arr as $key => $value) { 
				if (stristr($filename, $key)) {
					$temp_arr = [];						
					foreach ($price_obj[$key] as $k2 => $object) {
						$min = 0;
						$max = 0;
						$img_arr = [];
						$j = 0;	 
						foreach ($object as $k3 => $obj) {
							if (is_array($obj) && $k3 !== 'img') {
								$i = 0;
								foreach ($obj as $k4 => $v) {

									if (is_numeric($spreadsheet->getActiveSheet()->getCell($k4)->getCalculatedValue())){
										$t_v = (int)$spreadsheet->getActiveSheet()->getCell($k4)->getCalculatedValue();
									}
									else{
										$t_v = $spreadsheet->getActiveSheet()->getCell($k4)->getCalculatedValue();
									}

									$temp_arr[$k2][$k3][$k4] = $t_v;
									if (is_numeric($t_v)) {
										if ($i === 0 && $j === 0) {
											$min = (int)$t_v;
											$max = (int)$t_v;
										}
										else{
											if ($min > (int)$t_v) {
												$min = (int)$t_v;
											}
											if ($max < (int)$t_v) {
												$max = (int)$t_v;
											}
										}
										$i++;
									}											
								}
							}
							else if( $k3 === 'img'){
								$img_arr = $obj;
							}
							$j++;
						}
						$temp_arr[$k2]['min'] = $min;
						$temp_arr[$k2]['max'] = $max;
						$temp_arr[$k2]['img'] = $img_arr;								
					}							
					$data_arr[$key] = json_encode($temp_arr);					

					$result_params = $wpdb->get_results("SELECT * FROM `{$wpdb -> prefix}window_prices` WHERE `page_name` = '".$key."'");

					if ($result_params) {
						$wpdb->update("{$wpdb->prefix}window_prices", 
							[ 'data' => $data_arr[$key]],
							[ 'page_name' => $key ]
						);
					}
					else{
						$wpdb->insert("{$wpdb->prefix}window_prices", [  
							'data' => $data_arr[$key],
							'page_name' => $key
						]);
					}

					return 0;																	
				}							
			}			
		} 
	}
} );

