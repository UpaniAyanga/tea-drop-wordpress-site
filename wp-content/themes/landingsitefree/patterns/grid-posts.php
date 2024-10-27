<?php
 /**
  * Title: Grid Posts
  * Slug: landingsitefree/grid-posts
  * Categories: landingsitefree
  */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"4%","bottom":"4%"},"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px;padding-top:4%;padding-bottom:4%"><!-- wp:group {"style":{"spacing":{"blockGap":"20px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","fontSize":"extra-large"} -->
<h2 class="wp-block-heading has-text-align-center has-extra-large-font-size">Landing Page Materials &amp; Resources</h2>
<!-- /wp:heading -->

<!-- wp:group {"style":{"dimensions":{"minHeight":""},"spacing":{"margin":{"top":"2rem","bottom":"3rem"}}},"className":"header-spacer","layout":{"type":"constrained","contentSize":"140px"}} -->
<div class="wp-block-group header-spacer" style="margin-top:2rem;margin-bottom:3rem"><!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|primary","width":"2px"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--primary);border-top-width:2px"></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"3rem"}}},"className":"post-grid","layout":{"type":"constrained"}} -->
<div class="wp-block-group post-grid" style="margin-top:3rem"><!-- wp:query {"queryId":1,"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"textColor":"tertiary","layout":{"type":"grid","columnCount":3},"fontSize":"small"} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}}} -->
<div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"10px","padding":{"right":"20px","bottom":"20px","left":"20px","top":"20px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:post-title {"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"1.25rem"}}} /-->

<!-- wp:post-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}},"typography":{"fontSize":"12px","letterSpacing":"1px","textTransform":"uppercase"}}} /-->

<!-- wp:post-excerpt {"moreText":"Read More →","excerptLength":14,"style":{"elements":{"link":{"color":{"text":"var:preset|color|body-text"}}}},"textColor":"body-text","fontSize":"small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->