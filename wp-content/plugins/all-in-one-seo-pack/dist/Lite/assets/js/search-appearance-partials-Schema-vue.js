(window["aioseopjsonp"]=window["aioseopjsonp"]||[]).push([["search-appearance-partials-Schema-vue","search-appearance-partials-lite-Schema-vue"],{"164d":function(t,e,s){},"4edb":function(t,e,s){"use strict";var i=s("164d"),a=s.n(i);a.a},"5be7":function(t,e,s){"use strict";s.r(e);var i=function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("div",{staticClass:"aioseo-sa-ct-schema-view"},[t.isUnlicensed?t._e():s("schema",{attrs:{type:t.type,object:t.object,options:t.options,"show-bulk":t.showBulk}}),t.isUnlicensed?s("schema-lite",{attrs:{type:t.type,object:t.object,options:t.options,"show-bulk":t.showBulk}}):t._e()],1)},a=[],n=s("5530"),r=s("2f62"),o=s("9d33"),c={components:{Schema:o["default"],SchemaLite:o["default"]},props:{type:{type:String,required:!0},object:{type:Object,required:!0},options:{type:Object,required:!0},showBulk:Boolean},computed:Object(n["a"])({},Object(r["c"])(["isUnlicensed"]))},l=c,u=s("2877"),p=Object(u["a"])(l,i,a,!1,null,null,null);e["default"]=p.exports},"9d33":function(t,e,s){"use strict";s.r(e);var i=function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("div",{staticClass:"aioseo-sa-ct-schema-lite"},[s("core-blur",[s("core-settings-row",{attrs:{name:t.strings.schemaType,align:""},scopedSlots:t._u([{key:"content",fn:function(){return[s("base-select",{staticClass:"schema-type",attrs:{size:"medium",options:t.schemaTypes,value:t.getSchemaTypeOption("Article")}})]},proxy:!0}])}),s("core-settings-row",{attrs:{name:t.strings.articleType,align:""},scopedSlots:t._u([{key:"content",fn:function(){return[s("base-radio-toggle",{attrs:{name:t.object.name+"articleType",value:"BlogPosting",options:[{label:t.strings.article,value:"Article"},{label:t.strings.blogPost,value:"BlogPosting"},{label:t.strings.newsArticle,value:"NewsArticle"}]}})]},proxy:!0}])})],1),s("cta",{attrs:{"cta-link":t.$links.getPricingUrl("schema-markup","schema-markup-upsell",t.object.name+"-post-type"),"button-text":t.strings.ctaButtonText,"learn-more-link":t.$links.getUpsellUrl("schema-markup",t.object.name,"home")},scopedSlots:t._u([{key:"header-text",fn:function(){return[t._v(" "+t._s(t.strings.ctaHeader)+" ")]},proxy:!0},{key:"description",fn:function(){return[t._v(" "+t._s(t.strings.ctaDescription)+" ")]},proxy:!0}])})],1)},a=[],n=(s("7db0"),{props:{type:{type:String,required:!0},object:{type:Object,required:!0}},data:function(){return{schemaTypes:[{value:"none",label:this.$t.__("None",this.$td)},{value:"Article",label:this.$t.__("Article",this.$td)}],strings:{schemaType:this.$t.__("Schema Type",this.$td),articleType:this.$t.__("Article Type",this.$td),article:this.$t.__("Article",this.$td),blogPost:this.$t.__("Blog Post",this.$td),newsArticle:this.$t.__("News Article",this.$td),ctaDescription:this.$t.sprintf(this.$t.__("%1$s %2$s allows you to customize the structured data markup on Posts, Pages, Categories, Tags, etc.",this.$td),"AIOSEO","Pro"),ctaButtonText:this.$t.__("Upgrade to Pro and Unlock Advanced Schema Markup",this.$td),ctaHeader:this.$t.sprintf(this.$t.__("Advanced Schema Markup is only available for licensed %1$s %2$s users.",this.$td),"AIOSEO","Pro")}}},methods:{getSchemaTypeOption:function(t){return this.schemaTypes.find((function(e){return e.value===t}))}}}),r=n,o=(s("4edb"),s("2877")),c=Object(o["a"])(r,i,a,!1,null,null,null);e["default"]=c.exports}}]);