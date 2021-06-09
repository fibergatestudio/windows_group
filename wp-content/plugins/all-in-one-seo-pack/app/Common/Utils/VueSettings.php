<?php
namespace AIOSEO\Plugin\Common\Utils;

/**
 * Vue Settings for the user.
 *
 * @since 4.0.0
 */
class VueSettings {
	/**
	 * The name to lookup the settings with.
	 *
	 * @since 4.0.0
	 *
	 * @var string
	 */
	private $settingsName = '';

	/**
	 * The settings array.
	 *
	 * @since 4.0.0
	 *
	 * @var array
	 */
	private $settings = [];

	/**
	 * All the default settings.
	 *
	 * @since 4.0.0
	 *
	 * @var array
	 */
	private $defaults = [
		'showUpgradeBar'  => true,
		'showSetupWizard' => true,
		'toggledCards'    => [
			'dashboardSeoSiteScore'     => true,
			'dashboardNotifications'    => true,
			'dashboardSupport'          => true,
			'license'                   => true,
			'webmasterTools'            => true,
			'enableBreadcrumbs'         => true,
			'breadcrumbSettings'        => true,
			'breadcrumbTemplates'       => true,
			'advanced'                  => true,
			'accessControl'             => true,
			'rssContent'                => true,
			'generalSitemap'            => true,
			'generalSitemapSettings'    => true,
			'imageSitemap'              => true,
			'videoSitemap'              => true,
			'newsSitemap'               => true,
			'rssSitemap'                => true,
			'rssSitemapSettings'        => true,
			'rssAdditionalPages'        => true,
			'rssAdvancedSettings'       => true,
			'htmlSitemap'               => true,
			'additionalPages'           => true,
			'advancedSettings'          => true,
			'videoSitemapSettings'      => true,
			'videoAdditionalPages'      => true,
			'videoAdvancedSettings'     => true,
			'videoEmbedSettings'        => true,
			'newsSitemapSettings'       => true,
			'newsAdditionalPages'       => true,
			'newsAdvancedSettings'      => true,
			'newsEmbedSettings'         => true,
			'socialProfiles'            => true,
			'facebook'                  => true,
			'facebookHomePageSettings'  => true,
			'facebookAdvancedSettings'  => true,
			'twitter'                   => true,
			'twitterHomePageSettings'   => true,
			'pinterest'                 => true,
			'searchTitleSeparator'      => true,
			'searchHomePage'            => true,
			'searchSchema'              => true,
			'searchMediaAttachments'    => true,
			'searchAdvanced'            => true,
			'authorArchives'            => true,
			'dateArchives'              => true,
			'searchArchives'            => true,
			'imageSeo'                  => true,
			'completeSeoChecklist'      => true,
			'localBusinessInfo'         => true,
			'localBusinessOpeningHours' => true,
			'robotsEditor'              => true,
			'badBotBlocker'             => true,
			'databaseTools'             => true,
			'htaccessEditor'            => true,
			'databaseToolsLogs'         => true,
			'systemStatusInfo'          => true
		],
		'toggledRadio'    => [
			'breadcrumbsShowOnWebsite'      => 'shortcode',
			'breadcrumbsShowMoreSeparators' => false,
			'searchShowMoreSeparators'      => false
		],
		'internalTabs'    => [
			'authorArchives'    => 'title-description',
			'dateArchives'      => 'title-description',
			'searchArchives'    => 'title-description',
			'seoAuditChecklist' => 'all-items'
		]
	];

	/**
	 * The Construct method.
	 *
	 * @since 4.0.0
	 *
	 * @param string $settings An array of settings.
	 */
	public function __construct( $settings = '_aioseo_settings' ) {
		$this->addDynamicDefaults();

		$this->settingsName = $settings;
		$this->settings     = get_user_meta( get_current_user_id(), $settings, true )
			? array_replace_recursive( $this->defaults, get_user_meta( get_current_user_id(), $settings, true ) )
			: $this->defaults;
	}

	/**
	 * Adds some defaults that are dynamically generated.
	 *
	 * @since 4.0.0
	 *
	 * @return void
	 */
	private function addDynamicDefaults() {
		$postTypes = aioseo()->helpers->getPublicPostTypes();
		foreach ( $postTypes as $postType ) {
			$this->defaults['toggledCards'][ $postType['name'] . 'SA' ] = true;
			$this->defaults['internalTabs'][ $postType['name'] . 'SA' ] = 'title-description';
		}

		$taxonomies = aioseo()->helpers->getPublicTaxonomies();
		foreach ( $taxonomies as $taxonomy ) {
			$this->defaults['toggledCards'][ $taxonomy['name'] . 'SA' ] = true;
			$this->defaults['internalTabs'][ $taxonomy['name'] . 'SA' ] = 'title-description';
		}

		$postTypes = aioseo()->helpers->getPublicPostTypes( false, true );
		foreach ( $postTypes as $postType ) {
			$this->defaults['toggledCards'][ $postType['name'] . 'ArchiveArchives' ] = true;
			$this->defaults['internalTabs'][ $postType['name'] . 'ArchiveArchives' ] = 'title-description';
		}
	}

	/**
	 * Retrieves all settings.
	 *
	 * @since 4.0.0
	 *
	 * @return array An array of settings.
	 */
	public function all() {
		return array_replace_recursive( $this->defaults, $this->settings );
	}

	/**
	 * Retrieve an settings or null if missing.
	 *
	 * @since 4.0.0
	 *
	 * @param  string $name      The name of the property that is missing on the class.
	 * @param  array  $arguments The arguments passed into the method.
	 * @return mixed             The value from the settings or default/null.
	 */
	public function __call( $name, $arguments = [] ) {
		return isset( $this->settings[ $name ] ) ? $this->settings[ $name ] : ( ! empty( $arguments[0] ) ? $arguments[0] : $this->getDefault( $name ) );
	}

	/**
	 * Retrieve an settings or null if missing.
	 *
	 * @since 4.0.0
	 *
	 * @param  string $name The name of the property that is missing on the class.
	 * @return mixed        The value from the settings or default/null.
	 */
	public function __get( $name ) {
		return isset( $this->settings[ $name ] ) ? $this->settings[ $name ] : $this->getDefault( $name );
	}

	/**
	 * Sets the settings value and saves to the database.
	 *
	 * @since 4.0.0
	 *
	 * @param  string $name  The name of the settings.
	 * @param  mixed  $value The value to set.
	 * @return void
	 */
	public function __set( $name, $value ) {
		$this->settings[ $name ] = $value;

		$this->update();
	}

	/**
	 * Checks if an settings is set or returns null if not.
	 *
	 * @since 4.0.0
	 *
	 * @param  string $name The name of the settings.
	 * @return mixed        True or null.
	 */
	public function __isset( $name ) {
		return isset( $this->settings[ $name ] ) ? false === empty( $this->settings[ $name ] ) : null;
	}

	/**
	 * Unsets the settings value and saves to the database.
	 *
	 * @since 4.0.0
	 *
	 * @param  string $name  The name of the settings.
	 * @return void
	 */
	public function __unset( $name ) {
		if ( ! isset( $this->settings[ $name ] ) ) {
			return;
		}

		unset( $this->settings[ $name ] );

		$this->update();
	}

	/**
	 * Gets the default value for an settings.
	 *
	 * @since 4.0.0
	 *
	 * @param  string $name The settings name.
	 * @return void
	 */
	public function getDefault( $name ) {
		return isset( $this->defaults[ $name ] ) ? $this->defaults[ $name ] : null;
	}

	/**
	 * Updates the settings in the database.
	 *
	 * @since 4.0.0
	 *
	 * @return void
	 */
	public function update() {
		update_user_meta( get_current_user_id(), $this->settingsName, $this->settings );
	}
}