<?php
/**
 * Query: Standard.
 *
 * @package WordPress
 */

return array(
	'title'      => __( 'Standard', 'gutenberg' ),
	'blockTypes' => array( 'core/query' ),
	'categories' => array( 'query' ),
	'content'    => '<!-- wp:query {"query":{"perPage":1,"pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
					<div class="wp-block-query">
					<!-- wp:query-loop -->
					<!-- wp:post-title {"isLink":true} /-->
					<!-- wp:post-featured-image  {"isLink":true,"align":"wide"} /-->
					<!-- wp:post-excerpt /-->
					<!-- wp:separator -->
					<hr class="wp-block-separator"/>
					<!-- /wp:separator -->
					<!-- wp:post-date /-->
					<!-- /wp:query-loop -->
					</div>
					<!-- /wp:query -->',
);