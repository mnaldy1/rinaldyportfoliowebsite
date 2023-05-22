<?php
/**
 * Title: Blog Layout
 * Slug: blog-layout
 * Description: 
 * Categories: featured
 * Keywords: 
 * Viewport Width: 1280
 * Block Types: 
 * Post Types: 
 * Inserter: true
 */

?>
<!-- wp:group {"tagName":"main","layout":{"type":"constrained"}} -->
<main class="wp-block-group"><!-- wp:query {"queryId":1,"query":{"perPage":"99","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"category":[15]}},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template -->
<!-- wp:columns {"style":{"border":{"bottom":{"width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"},"margin":{"top":"-1.5rem","bottom":"0px"}}}} -->
<div class="wp-block-columns" style="border-bottom-width:1px;margin-top:-1.5rem;margin-bottom:0px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:column {"verticalAlignment":"center","width":"20%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:20%"><!-- wp:post-date {"textAlign":"left","style":{"color":{"text":"#07f71b"}}} /--></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"80%"} -->
<div class="wp-block-column" style="flex-basis:80%"><!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"fontStyle":"normal","fontWeight":"100","letterSpacing":"2px","fontSize":"2.5rem"}},"textColor":"contrast","fontFamily":"system-font"} /-->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:post-featured-image {"isLink":true,"height":"250px","style":{"color":{"duotone":"unset"},"border":{"radius":"20px"}}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","fontSize":"small"} -->
<div class="wp-block-column is-vertically-aligned-top has-small-font-size"><!-- wp:post-excerpt {"moreText":"\u003cbr\u003e","style":{"typography":{"fontStyle":"normal","fontWeight":"100","letterSpacing":"1px"}},"fontSize":"small","fontFamily":"system-font"} /-->

<!-- wp:read-more {"content":"Read More... ","style":{"typography":{"fontStyle":"normal","fontWeight":"100","letterSpacing":"1px","fontSize":"0.8rem"},"border":{"radius":"3px","width":"1px"},"spacing":{"padding":{"top":"9px","right":"15px","bottom":"9px","left":"15px"},"margin":{"top":"0","bottom":"0"}}},"borderColor":"cyan-bluish-gray","textColor":"cyan-bluish-gray","fontFamily":"system-font"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></main>
<!-- /wp:group -->
