<?php
/**
 * Hero Banner
 */
return array(
	'title'      => __( 'Hero Banner', 'nature21' ),
	'categories' => array( 'nature21' ),
	'blockTypes' => array( 'core/template-part/nature21' ),
	'content'    => '<!-- wp:group {"className":"nature21-banner","style":{"spacing":{"padding":{"top":"150px","bottom":"150px","left":"0px","right":"0px"}},"background":{"backgroundImage":{"url":"'.esc_url(get_template_directory_uri()).'/assets/images/nature21-banner-bg.png","id":2006,"source":"file","title":"nature21-banner-bg"},"backgroundSize":"cover"}},"layout":{"type":"constrained","contentSize":"1170px","wideSize":"100%","justifyContent":"center"}} -->
<div class="wp-block-group nature21-banner" style="padding-top:150px;padding-right:0px;padding-bottom:150px;padding-left:0px"><!-- wp:group {"className":"nature21-wrap-banner","layout":{"type":"constrained","contentSize":"1170px"}} -->
<div class="wp-block-group nature21-wrap-banner"><!-- wp:html -->
<div class="nature21-hero-slides" aria-hidden="true">
	<span class="nature21-hero-slide nature21-hero-slide-1"></span>
	<span class="nature21-hero-slide nature21-hero-slide-2"></span>
	<span class="nature21-hero-slide nature21-hero-slide-3"></span>
</div>
<!-- /wp:html -->

<!-- wp:html -->
<div class="nature21-hero-grid">
	<div class="nature21-hero-copy">
		<h2>Together</h2>
		<h2>We can heal the</h2>
		<h2 class="nature21-hero-word"><span class="nature21-word-rotator"><span>Nature</span><span>Forests</span><span>Oceans</span><span>Future</span></span></h2>
		<div class="wp-block-buttons" style="margin-top:20px"><div class="wp-block-button nature21-btn-more"><a class="wp-block-button__link has-background-background-color has-text-color has-background has-link-color wp-element-button" href="#" style="border-radius:250px;color:#202123" rel="#">Discover More</a></div></div>
	</div>
	<div class="nature21-hero-visual">
		<img src="'.esc_url(get_template_directory_uri()).'/assets/images/nature21-banner.png" alt="" />
	</div>
</div>
<!-- /wp:html -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"nature21-green-bar-area","layout":{"type":"constrained","wideSize":"100%","contentSize":"1170px"}} -->
<div class="wp-block-group nature21-green-bar-area"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"60%","className":"nature21-green-headingbox","style":{"color":{"background":"#66b406"},"elements":{"link":{"color":{"text":"var:preset|color|banner"}}},"spacing":{"padding":{"top":"30px","right":"0px","left":"70px","bottom":"30px"}},"border":{"radius":{"bottomLeft":"25px","bottomRight":"50px"}}},"textColor":"banner"} -->
<div class="wp-block-column nature21-green-headingbox has-banner-color has-text-color has-background has-link-color" style="border-bottom-left-radius:25px;border-bottom-right-radius:50px;background-color:#66b406;padding-top:30px;padding-right:0px;padding-bottom:30px;padding-left:70px;flex-basis:60%"><!-- wp:heading {"style":{"typography":{"fontSize":"32px","fontStyle":"normal","fontWeight":"500"}},"fontFamily":"poppins"} -->
<h2 class="wp-block-heading has-poppins-font-family" style="font-size:32px;font-style:normal;font-weight:500">Don\'t be Mean, Think Green!</h2>
<!-- /wp:heading -->

<!-- wp:image {"id":2051,"width":"55px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="'.esc_url(get_template_directory_uri()).'/assets/images/nature21-arrow-icon.png" alt="" class="wp-image-2051" style="width:55px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"29%","className":"nature21-home-social"} -->
<div class="wp-block-column nature21-home-social" style="flex-basis:29%"><!-- wp:social-links {"iconColor":"background","iconColorValue":"#ffffff","customIconBackgroundColor":"#1c470f","iconBackgroundColorValue":"#1c470f","className":"is-style-default","style":{"spacing":{"blockGap":{"top":"0","left":"var:preset|spacing|30"},"margin":{"top":"30px","right":"5px"}}},"layout":{"type":"flex","justifyContent":"right"}} -->
<ul class="wp-block-social-links has-icon-color has-icon-background-color is-style-default" style="margin-top:30px;margin-right:5px"><!-- wp:social-link {"url":"https://www.facebook.com","service":"facebook"} /-->

<!-- wp:social-link {"url":"https://www.x.com","service":"x"} /-->

<!-- wp:social-link {"url":"https://www.instagram.com","service":"instagram"} /-->

<!-- wp:social-link {"url":"https://www.youtube.com","service":"youtube"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->',
);
