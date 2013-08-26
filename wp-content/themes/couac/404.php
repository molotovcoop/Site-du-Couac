<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

	<div class="container_5">
		<div class="grid_3 prefix_1 suffix_1">

			<header class="page-header">
				<h1 class="page-title"><?php _e( 'Not found', 'twentythirteen' ); ?></h1>
			</header>

				<div class="page-content">
					<h2>Ça n'existe pas</h2>
					<p>Mais ce n'est pas une raison pour ne pas écrire un article sur le sujet!</p>

					<?php get_search_form(); ?>
				</div><!-- .page-content -->

		</div><!-- #content -->
		<div class="clear"></div>
	</div><!-- #primary -->

<?php get_footer(); ?>