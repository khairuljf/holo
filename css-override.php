<?php
if ( class_exists( 'BoldThemesFramework' ) && isset( BoldThemesFramework::$crush_vars ) ) {
	$boldthemes_crush_vars = BoldThemesFramework::$crush_vars;
}
if ( class_exists( 'BoldThemesFramework' ) && isset( BoldThemesFramework::$crush_vars_def ) ) {
	$boldthemes_crush_vars_def = BoldThemesFramework::$crush_vars_def;
}
if ( isset( $boldthemes_crush_vars['accentColor'] ) ) {
	$accentColor = $boldthemes_crush_vars['accentColor'];
} else {
	$accentColor = "#01b1ec";
}
if ( isset( $boldthemes_crush_vars['alternateColor'] ) ) {
	$alternateColor = $boldthemes_crush_vars['alternateColor'];
} else {
	$alternateColor = "#fa5b13";
}
if ( isset( $boldthemes_crush_vars['bodyFont'] ) ) {
	$bodyFont = $boldthemes_crush_vars['bodyFont'];
} else {
	$bodyFont = "Montserrat";
}
if ( isset( $boldthemes_crush_vars['menuFont'] ) ) {
	$menuFont = $boldthemes_crush_vars['menuFont'];
} else {
	$menuFont = "Poppins";
}
if ( isset( $boldthemes_crush_vars['headingFont'] ) ) {
	$headingFont = $boldthemes_crush_vars['headingFont'];
} else {
	$headingFont = "Poppins";
}
if ( isset( $boldthemes_crush_vars['headingSuperTitleFont'] ) ) {
	$headingSuperTitleFont = $boldthemes_crush_vars['headingSuperTitleFont'];
} else {
	$headingSuperTitleFont = "Poppins";
}
if ( isset( $boldthemes_crush_vars['headingSubTitleFont'] ) ) {
	$headingSubTitleFont = $boldthemes_crush_vars['headingSubTitleFont'];
} else {
	$headingSubTitleFont = "Merriweather";
}
if ( isset( $boldthemes_crush_vars['logoHeight'] ) ) {
	$logoHeight = $boldthemes_crush_vars['logoHeight'];
} else {
	$logoHeight = "80";
}
$accentColorDark = CssCrush\fn__l_adjust( $accentColor." -15" );$accentColorVeryDark = CssCrush\fn__l_adjust( $accentColor." -35" );$accentColorVeryVeryDark = CssCrush\fn__l_adjust( $accentColor." -42" );$accentColorLight = CssCrush\fn__a_adjust( $accentColor." -30" );$alternateColorDark = CssCrush\fn__l_adjust( $alternateColor." -15" );$alternateColorVeryDark = CssCrush\fn__l_adjust( $alternateColor." -25" );$alternateColorLight = CssCrush\fn__a_adjust( $alternateColor." -40" );$css_override = sanitize_text_field("select,
input{font-family: \"{$bodyFont}\";}
input:not([type='checkbox']):not([type='radio']):not([type='submit']):focus,
textarea:focus,
.fancy-select .trigger.open{-webkit-box-shadow: 0 0 4px 0 {$accentColor};
    box-shadow: 0 0 4px 0 {$accentColor};}
.btContent a{color: {$accentColor};}
a:hover{
    color: {$accentColor};}
.btText a{color: {$accentColor};}
body{font-family: \"{$bodyFont}\",Arial,sans-serif;}
h1,
h2,
h3,
h4,
h5,
h6{font-family: \"{$headingFont}\";}
blockquote{
    font-family: \"{$headingFont}\";}
.btContentHolder table thead th{
    background-color: {$accentColor};}
.btAccentDarkHeader .btPreloader .animation > div:first-child,
.btLightAccentHeader .btPreloader .animation > div:first-child,
.btTransparentLightHeader .btPreloader .animation > div:first-child{
    background-color: {$accentColor};}
.btPreloader .animation .preloaderLogo{height: {$logoHeight}px;}
.mainHeader{
    font-family: \"{$menuFont}\";}
.mainHeader a:hover{color: {$accentColor};}
.menuPort{font-family: \"{$menuFont}\";}
.menuPort nav > ul > li > a{line-height: {$logoHeight}px;}
.btTextLogo{font-family: \"{$menuFont}\";
    line-height: {$logoHeight}px;}
.btLogoArea .logo img{height: {$logoHeight}px;}
.btTransparentDarkHeader .btHorizontalMenuTrigger:hover .bt_bb_icon:before,
.btTransparentLightHeader .btHorizontalMenuTrigger:hover .bt_bb_icon:before,
.btAccentLightHeader .btHorizontalMenuTrigger:hover .bt_bb_icon:before,
.btAccentDarkHeader .btHorizontalMenuTrigger:hover .bt_bb_icon:before,
.btLightDarkHeader .btHorizontalMenuTrigger:hover .bt_bb_icon:before,
.btHasAltLogo.btStickyHeaderActive .btHorizontalMenuTrigger:hover .bt_bb_icon:before,
.btTransparentDarkHeader .btHorizontalMenuTrigger:hover .bt_bb_icon:after,
.btTransparentLightHeader .btHorizontalMenuTrigger:hover .bt_bb_icon:after,
.btAccentLightHeader .btHorizontalMenuTrigger:hover .bt_bb_icon:after,
.btAccentDarkHeader .btHorizontalMenuTrigger:hover .bt_bb_icon:after,
.btLightDarkHeader .btHorizontalMenuTrigger:hover .bt_bb_icon:after,
.btHasAltLogo.btStickyHeaderActive .btHorizontalMenuTrigger:hover .bt_bb_icon:after{border-top-color: {$accentColor};}
.btTransparentDarkHeader .btHorizontalMenuTrigger:hover .bt_bb_icon .bt_bb_icon_holder:before,
.btTransparentLightHeader .btHorizontalMenuTrigger:hover .bt_bb_icon .bt_bb_icon_holder:before,
.btAccentLightHeader .btHorizontalMenuTrigger:hover .bt_bb_icon .bt_bb_icon_holder:before,
.btAccentDarkHeader .btHorizontalMenuTrigger:hover .bt_bb_icon .bt_bb_icon_holder:before,
.btLightDarkHeader .btHorizontalMenuTrigger:hover .bt_bb_icon .bt_bb_icon_holder:before,
.btHasAltLogo.btStickyHeaderActive .btHorizontalMenuTrigger:hover .bt_bb_icon .bt_bb_icon_holder:before{border-top-color: {$accentColor};}
.btMenuHorizontal .menuPort nav > ul > li.current-menu-ancestor > a:after,
.btMenuHorizontal .menuPort nav > ul > li.current-menu-item > a:after{
    background-color: {$accentColor};}
.btMenuHorizontal .menuPort nav > ul > li.current-menu-ancestor li.current-menu-ancestor > a,
.btMenuHorizontal .menuPort nav > ul > li.current-menu-ancestor li.current-menu-item > a,
.btMenuHorizontal .menuPort nav > ul > li.current-menu-item li.current-menu-ancestor > a,
.btMenuHorizontal .menuPort nav > ul > li.current-menu-item li.current-menu-item > a{color: {$accentColor};}
.btMenuHorizontal .menuPort ul ul li a:hover{color: {$accentColor};}
body.btMenuHorizontal .subToggler{
    line-height: {$logoHeight}px;}
.btMenuHorizontal .menuPort > nav > ul > li > ul li a:hover{-webkit-box-shadow: inset 5px 0 0 0 {$accentColor};
    box-shadow: inset 5px 0 0 0 {$accentColor};}
.btMenuHorizontal .topBarInMenu{
    height: {$logoHeight}px;}
.btAccentLightHeader .btBelowLogoArea,
.btAccentLightHeader .topBar{background-color: {$accentColor};}
.btAccentLightHeader .btBelowLogoArea a:hover,
.btAccentLightHeader .topBar a:hover{color: {$alternateColor};}
.btAccentDarkHeader .btBelowLogoArea,
.btAccentDarkHeader .topBar{background-color: {$accentColor};}
.btAccentDarkHeader .btBelowLogoArea a:hover,
.btAccentDarkHeader .topBar a:hover{color: {$alternateColor};}
.btAccentLightHeader .btBelowLogoArea,
.btAccentLightHeader .topBar{background-color: {$accentColor};}
.btAccentLightHeader .btBelowLogoArea a:hover,
.btAccentLightHeader .topBar a:hover{color: {$alternateColor};}
.btLightAccentHeader .mainHeader,
.btLightAccentHeader .btVerticalHeaderTop{background-color: {$accentColor};}
.btLightAccentHeader .btBelowLogoArea a:hover,
.btLightAccentHeader .topBar a:hover{color: {$alternateColor};}
.btTransparentDarkHeader .btVerticalMenuTrigger:hover .bt_bb_icon:before,
.btTransparentLightHeader .btVerticalMenuTrigger:hover .bt_bb_icon:before,
.btAccentLightHeader .btVerticalMenuTrigger:hover .bt_bb_icon:before,
.btAccentDarkHeader .btVerticalMenuTrigger:hover .bt_bb_icon:before,
.btLightDarkHeader .btVerticalMenuTrigger:hover .bt_bb_icon:before,
.btHasAltLogo.btStickyHeaderActive .btVerticalMenuTrigger:hover .bt_bb_icon:before,
.btTransparentDarkHeader .btVerticalMenuTrigger:hover .bt_bb_icon:after,
.btTransparentLightHeader .btVerticalMenuTrigger:hover .bt_bb_icon:after,
.btAccentLightHeader .btVerticalMenuTrigger:hover .bt_bb_icon:after,
.btAccentDarkHeader .btVerticalMenuTrigger:hover .bt_bb_icon:after,
.btLightDarkHeader .btVerticalMenuTrigger:hover .bt_bb_icon:after,
.btHasAltLogo.btStickyHeaderActive .btVerticalMenuTrigger:hover .bt_bb_icon:after{border-top-color: {$accentColor} !important;}
.btTransparentDarkHeader .btVerticalMenuTrigger:hover .bt_bb_icon .bt_bb_icon_holder:before,
.btTransparentLightHeader .btVerticalMenuTrigger:hover .bt_bb_icon .bt_bb_icon_holder:before,
.btAccentLightHeader .btVerticalMenuTrigger:hover .bt_bb_icon .bt_bb_icon_holder:before,
.btAccentDarkHeader .btVerticalMenuTrigger:hover .bt_bb_icon .bt_bb_icon_holder:before,
.btLightDarkHeader .btVerticalMenuTrigger:hover .bt_bb_icon .bt_bb_icon_holder:before,
.btHasAltLogo.btStickyHeaderActive .btVerticalMenuTrigger:hover .bt_bb_icon .bt_bb_icon_holder:before{border-top-color: {$accentColor};}
.btMenuVertical .mainHeader .btCloseVertical:before:hover{color: {$accentColor};}
.btMenuHorizontal .topBarInLogoArea{
    height: {$logoHeight}px;}
.btMenuHorizontal .topBarInLogoArea .topBarInLogoAreaCell{border: 0 solid {$accentColor};}
.btSiteFooter .btFooterMenu .menu li a{
    font-family: \"{$menuFont}\";}
.btDarkSkin .btSiteFooterWidgets,
.btLightSkin .btDarkSkin .btSiteFooterWidgets,
.btDarkSkin.btLightSkin .btDarkSkin .btSiteFooterWidgets{background: {$accentColorVeryDark};}
.btDarkSkin .btSiteFooterCopyMenu .port:before,
.btLightSkin .btDarkSkin .btSiteFooterCopyMenu .port:before,
.btDarkSkin.btLightSkin .btDarkSkin .btSiteFooterCopyMenu .port:before{background-color: {$accentColor};}
.btMediaBox.btQuote:before,
.btMediaBox.btLink:before{
    background-color: {$accentColor};}
.btPostListColumns .btArticleHeadline .bt_bb_headline_content a:hover,
.btPostListSimple .btArticleHeadline .bt_bb_headline_content a:hover,
.btPostListStandard .btArticleHeadline .bt_bb_headline_content a:hover{color: {$accentColor};}
.sticky.btArticleListItem .btArticleHeadline h1 .bt_bb_headline_content span a:after,
.sticky.btArticleListItem .btArticleHeadline h2 .bt_bb_headline_content span a:after,
.sticky.btArticleListItem .btArticleHeadline h3 .bt_bb_headline_content span a:after,
.sticky.btArticleListItem .btArticleHeadline h4 .bt_bb_headline_content span a:after,
.sticky.btArticleListItem .btArticleHeadline h5 .bt_bb_headline_content span a:after,
.sticky.btArticleListItem .btArticleHeadline h6 .bt_bb_headline_content span a:after,
.sticky.btArticleListItem .btArticleHeadline h7 .bt_bb_headline_content span a:after,
.sticky.btArticleListItem .btArticleHeadline h8 .bt_bb_headline_content span a:after{
    color: {$accentColor};}
.post-password-form p:first-child{color: {$alternateColor};}
.post-password-form p:nth-child(2) input[type=\"submit\"]{
    background: {$accentColor};}
.btPagination{font-family: \"{$headingFont}\";}
.btPagination .paging a:hover{color: {$accentColor};}
.btPagination .paging a:hover:after{-webkit-box-shadow: inset 0 0 0 2px {$accentColor} !important;
    box-shadow: inset 0 0 0 2px {$accentColor} !important;}
.btPagination .paging a:hover:after{border-color: {$accentColor};
    color: {$accentColor};}
.btPrevNextNav .btPrevNext .btPrevNextItem .btPrevNextTitle{font-family: \"{$headingFont}\";}
.btPrevNextNav .btPrevNext .btPrevNextItem .btPrevNextDir{font-family: \"{$headingSuperTitleFont}\";}
.btPrevNextNav .btPrevNext:hover .btPrevNextTitle{color: {$accentColor};}
.btArticleCategories a:hover{color: {$accentColor};}
.btArticleCategories a:not(:first-child):before{
    background-color: {$accentColor};}
.btArticleDate a:hover,
.btArticleAuthor a:hover,
.btArticleComments a:hover,
.btArticleCategories a:hover,
a.btArticleDate:hover,
a.btArticleAuthor:hover,
a.btArticleComments:hover,
a.btArticleCategories:hover{color: {$accentColor};}
.btCommentsBox .vcard .posted{
    font-family: \"{$headingFont}\";}
.btCommentsBox .commentTxt p.edit-link,
.btCommentsBox .commentTxt p.reply{
    font-family: \"{$headingFont}\";}
.comment-awaiting-moderation{color: {$accentColor};}
a#cancel-comment-reply-link{
    color: {$accentColor};}
a#cancel-comment-reply-link:hover{color: {$alternateColor};}
body:not(.btNoDashInSidebar) .btBox > h4:after,
body:not(.btNoDashInSidebar) .btCustomMenu > h4:after,
body:not(.btNoDashInSidebar) .btTopBox > h4:after{
    border-bottom: 3px solid {$accentColor};}
.btBox ul li.current-menu-item > a,
.btCustomMenu ul li.current-menu-item > a,
.btTopBox ul li.current-menu-item > a{color: {$accentColor};}
.btBox .btImageTextWidget .btImageTextWidgetText .bt_bb_headline_content span a:hover,
.btCustomMenu .btImageTextWidget .btImageTextWidgetText .bt_bb_headline_content span a:hover,
.btTopBox .btImageTextWidget .btImageTextWidgetText .bt_bb_headline_content span a:hover{color: {$accentColor};}
.btBox p.posted,
.btBox .quantity,
.btCustomMenu p.posted,
.btCustomMenu .quantity,
.btTopBox p.posted,
.btTopBox .quantity{
    font-family: \"{$bodyFont}\" !important;}
.widget_calendar table caption{background: {$accentColor};
    background: {$accentColor};
    font-family: \"{$headingFont}\";}
.widget_rss li a.rsswidget{font-family: \"{$headingFont}\";}
.fancy-select ul.options li:hover{color: {$accentColor};}
.widget_shopping_cart .total{
    font-family: \"{$headingFont}\";}
.widget_shopping_cart .buttons .button{
    background: {$accentColor};}
.widget_shopping_cart .widget_shopping_cart_content .mini_cart_item .ppRemove a.remove{
    background-color: {$accentColor};}
.widget_shopping_cart .widget_shopping_cart_content .mini_cart_item .ppRemove a.remove:hover{background-color: {$alternateColor};}
.menuPort .widget_shopping_cart .widget_shopping_cart_content .btCartWidgetIcon span.cart-contents,
.topTools .widget_shopping_cart .widget_shopping_cart_content .btCartWidgetIcon span.cart-contents,
.topBarInLogoArea .widget_shopping_cart .widget_shopping_cart_content .btCartWidgetIcon span.cart-contents{
    background-color: {$alternateColor};
    font: normal 10px/1 {$menuFont};}
.btMenuVertical .menuPort .widget_shopping_cart .widget_shopping_cart_content .btCartWidgetInnerContent .verticalMenuCartToggler,
.btMenuVertical .topTools .widget_shopping_cart .widget_shopping_cart_content .btCartWidgetInnerContent .verticalMenuCartToggler,
.btMenuVertical .topBarInLogoArea .widget_shopping_cart .widget_shopping_cart_content .btCartWidgetInnerContent .verticalMenuCartToggler{
    background-color: {$accentColor};}
.widget_recent_reviews{font-family: \"{$headingFont}\";}
.widget_price_filter .price_slider_wrapper .ui-slider .ui-slider-handle{
    background-color: {$accentColor};}
.btBox .tagcloud a,
.btTags ul a{
    -webkit-box-shadow: 0 0 0 3em {$accentColor} inset;
    box-shadow: 0 0 0 3em {$accentColor} inset;}
.btBox .tagcloud a:hover,
.btTags ul a:hover{-webkit-box-shadow: 0 0 0 0 {$accentColor} inset;
    box-shadow: 0 0 0 0 {$accentColor} inset;
    color: {$accentColor};}
.topTools a.btIconWidget:hover,
.topBarInMenu a.btIconWidget:hover{color: {$accentColor} !important;}
.btSidebar .btIconWidget:hover .btIconWidgetText,
footer .btIconWidget:hover .btIconWidgetText,
.topBarInLogoArea .btIconWidget:hover .btIconWidgetText{color: {$accentColor};}
.btAccentIconWidget.btIconWidget .btIconWidgetContent .btIconWidgetIcon{
    color: {$alternateColor} !important;}
.btLightSkin .btSiteFooterWidgets .btSearch button:hover,
.btDarkSkin .btLightSkin .btSiteFooterWidgets .btSearch button:hover,
.btLightSkin .btDarkSkin .btLightSkin .btSiteFooterWidgets .btSearch button:hover,
.btDarkSkin .btSiteFooterWidgets .btSearch button:hover,
.btLightSkin .btDarkSkin .btSiteFooterWidgets .btSearch button:hover,
.btDarkSkin.btLightSkin .btDarkSkin .btSiteFooterWidgets .btSearch button:hover,
.btLightSkin .btSidebar .btSearch button:hover,
.btDarkSkin .btLightSkin .btSidebar .btSearch button:hover,
.btLightSkin .btDarkSkin .btLightSkin .btSidebar .btSearch button:hover,
.btDarkSkin .btSidebar .btSearch button:hover,
.btLightSkin .btDarkSkin .btSidebar .btSearch button:hover,
.btDarkSkin.btLightSkin .btDarkSkin .btSidebar .btSearch button:hover,
.btLightSkin .btSidebar .widget_product_search button:hover,
.btDarkSkin .btLightSkin .btSidebar .widget_product_search button:hover,
.btLightSkin .btDarkSkin .btLightSkin .btSidebar .widget_product_search button:hover,
.btDarkSkin .btSidebar .widget_product_search button:hover,
.btLightSkin .btDarkSkin .btSidebar .widget_product_search button:hover,
.btDarkSkin.btLightSkin .btDarkSkin .btSidebar .widget_product_search button:hover{-webkit-box-shadow: 0 0 0 0 {$accentColor} inset;
    box-shadow: 0 0 0 0 {$accentColor} inset;
    background-color: {$accentColor} !important;}
.btSearchInner.btFromTopBox .btSearchInnerClose .bt_bb_icon a.bt_bb_icon_holder{color: {$accentColor};}
.btSearchInner.btFromTopBox .btSearchInnerClose .bt_bb_icon:hover a.bt_bb_icon_holder{color: {$accentColorDark};}
.btSearchInner.btFromTopBox button:hover:before{color: {$accentColor};}
.bt_bb_headline .bt_bb_headline_superheadline{
    font-family: \"{$headingSuperTitleFont}\";}
.bt_bb_headline.bt_bb_subheadline .bt_bb_headline_subheadline{font-family: \"{$headingSubTitleFont}\";}
.bt_bb_latest_posts_item .bt_bb_latest_posts_item_date{font-family: \"{$headingSuperTitleFont}\";}
.bt_bb_latest_posts_item .bt_bb_latest_posts_item_title{
    color: {$accentColor};}
.bt_bb_masonry_post_grid .bt_bb_grid_item_post_content .bt_bb_grid_item_category .post-categories li a:hover{color: {$accentColor};}
.bt_bb_masonry_post_grid .bt_bb_grid_item_post_content .bt_bb_grid_item_category .post-categories li a:before{
    background-color: {$accentColor};}
.bt_bb_masonry_post_grid .bt_bb_grid_item_post_content .bt_bb_grid_item_post_share .bt_bb_icon a:hover{color: {$accentColor};}
.bt_bb_masonry_post_grid .bt_bb_grid_item_post_content .bt_bb_grid_item_meta{font-family: \"{$headingSubTitleFont}\";}
.bt_bb_service .bt_bb_service_content_text{font-family: \"{$headingSubTitleFont}\";}
.bt_bb_service:hover .bt_bb_service_content_title a{color: {$accentColor};}
.bt_bb_custom_menu div ul a:hover{color: {$accentColor};}
.bt_bb_style_simple ul.bt_bb_tabs_header li.on{border-color: {$accentColor};}
.bt_bb_counter_holder .bt_bb_counter{
    font-family: \"{$headingFont}\";}
.wpcf7-form .wpcf7-submit{
    font-family: \"{$bodyFont}\" !important;
    -webkit-box-shadow: 0 0 0 3em {$accentColor} inset;
    box-shadow: 0 0 0 3em {$accentColor} inset;}
.wpcf7-form .wpcf7-submit:hover{-webkit-box-shadow: 0 0 0 0 {$accentColor} inset;
    box-shadow: 0 0 0 0 {$accentColor} inset;
    color: {$accentColor} !important;}
.btFooterSubscribe input[type='submit']:hover{background: {$accentColor} !important;}
.btFooterSubscribe .ajax-loader{
    background: {$alternateColor};
    border: 2px solid {$alternateColor};}
.btFooterSubscribe span.wpcf7-not-valid-tip{color: {$alternateColor};}
.mfp-arrow{color: {$accentColor} !important;}
.products ul li.product .btWooShopLoopItemInner .bt_bb_image:after,
ul.products li.product .btWooShopLoopItemInner .bt_bb_image:after{
    -webkit-box-shadow: 0 0 0 1em {$accentColor} inset;
    box-shadow: 0 0 0 1em {$accentColor} inset;}
.products ul li.product .btWooShopLoopItemInner .added:after,
.products ul li.product .btWooShopLoopItemInner .loading:after,
ul.products li.product .btWooShopLoopItemInner .added:after,
ul.products li.product .btWooShopLoopItemInner .loading:after{
    background-color: {$accentColor};}
.products ul li.product .btWooShopLoopItemInner .added_to_cart,
ul.products li.product .btWooShopLoopItemInner .added_to_cart{
    color: {$accentColor};}
.products ul li.product .onsale,
ul.products li.product .onsale{
    background: {$alternateColor};}
div.product .onsale{
    background: {$alternateColor};}
div.product div.images .woocommerce-product-gallery__trigger:after{
    -webkit-box-shadow: 0 0 0 2em {$accentColor} inset,0 0 0 2em rgba(255,255,255,.5) inset;
    box-shadow: 0 0 0 2em {$accentColor} inset,0 0 0 2em rgba(255,255,255,.5) inset;}
div.product div.images .woocommerce-product-gallery__trigger:hover:after{-webkit-box-shadow: 0 0 0 1px {$accentColor} inset,0 0 0 2em rgba(255,255,255,.5) inset;
    box-shadow: 0 0 0 1px {$accentColor} inset,0 0 0 2em rgba(255,255,255,.5) inset;
    color: {$accentColor};}
table.shop_table .coupon .input-text{
    color: {$accentColor};}
table.shop_table td.product-remove a.remove{
    color: {$accentColor};
    border: 1px solid {$accentColor};}
table.shop_table td.product-remove a.remove:hover{background-color: {$accentColor};}
ul.wc_payment_methods li .about_paypal{
    color: {$accentColor};}
.woocommerce-MyAccount-navigation ul li a{
    border-bottom: 2px solid {$accentColor};}
.woocommerce-info a: not(.button),
.woocommerce-message a: not(.button){color: {$accentColor};}
.woocommerce-message:before,
.woocommerce-info:before{
    color: {$accentColor};}
.star-rating span:before{
    color: {$accentColor};}
p.stars a[class^=\"star-\"].active:after,
p.stars a[class^=\"star-\"]:hover:after{color: {$accentColor};}
.woocommerce-page .btSidebar .widget_search button:hover{
    background-color: {$accentColor} !important;}
.btQuoteBooking .btContactNext{
    -webkit-box-shadow: 0 0 0 1px {$accentColor} inset;
    box-shadow: 0 0 0 1px {$accentColor} inset;
    color: {$accentColor};}
.btQuoteBooking .btContactNext:focus,
.btQuoteBooking .btContactNext:hover{-webkit-box-shadow: 0 0 0 2em {$accentColor} inset;
    box-shadow: 0 0 0 2em {$accentColor} inset;}
.btQuoteBooking .btContactNext:hover,
.btQuoteBooking .btContactNext:active{background-color: {$accentColor} !important;}
.btQuoteBooking .btQuoteSwitch.on .btQuoteSwitchInner{
    background: {$accentColor};}
.btQuoteBooking input[type=\"text\"]:focus,
.btQuoteBooking input[type=\"email\"]:focus,
.btQuoteBooking input[type=\"password\"]:focus,
.btQuoteBooking textarea:focus,
.btQuoteBooking .fancy-select .trigger:focus,
.btQuoteBooking .ddcommon.borderRadius .ddTitleText:focus,
.btQuoteBooking .ddcommon.borderRadiusTp .ddTitleText:focus{-webkit-box-shadow: 0 0 4px 0 {$accentColor};
    box-shadow: 0 0 4px 0 {$accentColor};}
.btLightSkin .btQuoteBooking input[type=\"text\"]:focus,
.btDarkSkin .btLightSkin .btQuoteBooking input[type=\"text\"]:focus,
.btLightSkin .btDarkSkin .btLightSkin .btQuoteBooking input[type=\"text\"]:focus,
.btLightSkin .btQuoteBooking input[type=\"email\"]:focus,
.btDarkSkin .btLightSkin .btQuoteBooking input[type=\"email\"]:focus,
.btLightSkin .btDarkSkin .btLightSkin .btQuoteBooking input[type=\"email\"]:focus,
.btLightSkin .btQuoteBooking input[type=\"password\"]:focus,
.btDarkSkin .btLightSkin .btQuoteBooking input[type=\"password\"]:focus,
.btLightSkin .btDarkSkin .btLightSkin .btQuoteBooking input[type=\"password\"]:focus,
.btLightSkin .btQuoteBooking textarea:focus,
.btDarkSkin .btLightSkin .btQuoteBooking textarea:focus,
.btLightSkin .btDarkSkin .btLightSkin .btQuoteBooking textarea:focus,
.btLightSkin .btQuoteBooking .fancy-select .trigger:focus,
.btDarkSkin .btLightSkin .btQuoteBooking .fancy-select .trigger:focus,
.btLightSkin .btDarkSkin .btLightSkin .btQuoteBooking .fancy-select .trigger:focus,
.btLightSkin .btQuoteBooking .ddcommon.borderRadius .ddTitleText:focus,
.btDarkSkin .btLightSkin .btQuoteBooking .ddcommon.borderRadius .ddTitleText:focus,
.btLightSkin .btDarkSkin .btLightSkin .btQuoteBooking .ddcommon.borderRadius .ddTitleText:focus,
.btLightSkin .btQuoteBooking .ddcommon.borderRadiusTp .ddTitleText:focus,
.btDarkSkin .btLightSkin .btQuoteBooking .ddcommon.borderRadiusTp .ddTitleText:focus,
.btLightSkin .btDarkSkin .btLightSkin .btQuoteBooking .ddcommon.borderRadiusTp .ddTitleText:focus{-webkit-box-shadow: 0 0 4px 0 {$accentColor};
    box-shadow: 0 0 4px 0 {$accentColor};}
.btDarkSkin .btQuoteBooking input[type=\"text\"]:focus,
.btLightSkin .btDarkSkin .btQuoteBooking input[type=\"text\"]:focus,
.btDarkSkin.btLightSkin .btDarkSkin .btQuoteBooking input[type=\"text\"]:focus,
.btDarkSkin .btQuoteBooking input[type=\"email\"]:focus,
.btLightSkin .btDarkSkin .btQuoteBooking input[type=\"email\"]:focus,
.btDarkSkin.btLightSkin .btDarkSkin .btQuoteBooking input[type=\"email\"]:focus,
.btDarkSkin .btQuoteBooking input[type=\"password\"]:focus,
.btLightSkin .btDarkSkin .btQuoteBooking input[type=\"password\"]:focus,
.btDarkSkin.btLightSkin .btDarkSkin .btQuoteBooking input[type=\"password\"]:focus,
.btDarkSkin .btQuoteBooking textarea:focus,
.btLightSkin .btDarkSkin .btQuoteBooking textarea:focus,
.btDarkSkin.btLightSkin .btDarkSkin .btQuoteBooking textarea:focus,
.btDarkSkin .btQuoteBooking .fancy-select .trigger:focus,
.btLightSkin .btDarkSkin .btQuoteBooking .fancy-select .trigger:focus,
.btDarkSkin.btLightSkin .btDarkSkin .btQuoteBooking .fancy-select .trigger:focus,
.btDarkSkin .btQuoteBooking .ddcommon.borderRadius .ddTitleText:focus,
.btLightSkin .btDarkSkin .btQuoteBooking .ddcommon.borderRadius .ddTitleText:focus,
.btDarkSkin.btLightSkin .btDarkSkin .btQuoteBooking .ddcommon.borderRadius .ddTitleText:focus,
.btDarkSkin .btQuoteBooking .ddcommon.borderRadiusTp .ddTitleText:focus,
.btLightSkin .btDarkSkin .btQuoteBooking .ddcommon.borderRadiusTp .ddTitleText:focus,
.btDarkSkin.btLightSkin .btDarkSkin .btQuoteBooking .ddcommon.borderRadiusTp .ddTitleText:focus{-webkit-box-shadow: 0 0 4px 0 {$accentColor};
    box-shadow: 0 0 4px 0 {$accentColor};}
.btQuoteBooking .dd.ddcommon.borderRadiusTp .ddTitleText,
.btQuoteBooking .dd.ddcommon.borderRadiusBtm .ddTitleText{
    -webkit-box-shadow: 5px 0 0 {$accentColor} inset,0 2px 10px rgba(0,0,0,.2);
    box-shadow: 5px 0 0 {$accentColor} inset,0 2px 10px rgba(0,0,0,.2);}
.btQuoteBooking .ui-slider .ui-slider-handle{
    background: {$accentColor};}
.btQuoteBooking .btQuoteBookingForm .btQuoteTotal{
    background: {$accentColor};}
.btQuoteBooking .btContactFieldMandatory.btContactFieldError input,
.btQuoteBooking .btContactFieldMandatory.btContactFieldError textarea{-webkit-box-shadow: 0 0 0 1px {$accentColor} inset;
    box-shadow: 0 0 0 1px {$accentColor} inset;
    border-color: {$accentColor};}
.btQuoteBooking .btContactFieldMandatory.btContactFieldError .dd.ddcommon.borderRadius .ddTitleText{-webkit-box-shadow: 0 0 0 2px {$accentColor} inset;
    box-shadow: 0 0 0 2px {$accentColor} inset;}
.btQuoteBooking .btSubmitMessage{color: {$accentColor};}
.btDatePicker .ui-datepicker-header{
    background-color: {$accentColor};}
.btQuoteBooking .dd.ddcommon.borderRadiusTp .ddTitleText,
.btQuoteBooking .dd.ddcommon.borderRadiusBtm .ddTitleText{-webkit-box-shadow: 0 0 4px 0 {$accentColor};
    box-shadow: 0 0 4px 0 {$accentColor};}
.btQuoteBooking .btContactSubmit{
    -webkit-box-shadow: 0 0 0 1px {$accentColor} inset;
    box-shadow: 0 0 0 1px {$accentColor} inset;
    color: {$accentColor} !important;}
.btQuoteBooking .btContactSubmit:focus,
.btQuoteBooking .btContactSubmit:hover{-webkit-box-shadow: 0 0 0 2em {$accentColor} inset;
    box-shadow: 0 0 0 2em {$accentColor} inset;}
.btPayPalButton:hover{-webkit-box-shadow: 0 0 0 {$accentColor} inset,0 1px 5px rgba(0,0,0,.2);
    box-shadow: 0 0 0 {$accentColor} inset,0 1px 5px rgba(0,0,0,.2);}
.bt_cc_email_confirmation_container [type=\"checkbox\"]:checked + label:before{border-color: {$accentColor};
    background: {$accentColor};}
.bt_bb_progress_bar_advanced .progressbar-text{
    font-family: \"{$headingSuperTitleFont}\";}
a .bt_bb_progress_bar_advanced .progressbar-text{color: {$accentColor};}
", array() );