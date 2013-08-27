<?php
/**
 * The sidebar containing the secondary widget area, displays on posts and pages.
 *
 * If no active widgets in this sidebar, it will be hidden completely.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>
	<div class="large nospace"> <!-- Appels/Plogues --> 
		<div class="container_5">
			<div class="grid_5 appel nospace">
				<ul>
					<?php $args = array( 
						'posts_per_page' => 3, 
						'orderby' => 'DESC', 
						'post_type'=>'appel' );
						// $appels = get_posts( $args );
						// foreach ( $appels as $appel ) : 
						// 	setup_postdata( $appel ); 
						$appels = new WP_Query( $args );
						if($appels->have_posts()): ?>
							<?php while( $appels->have_posts() ): ?>
								<?php	$appels->the_post();
								$meta = get_post_meta( get_the_ID() ); 
								$image = $meta['image'][0]['guid']?>
								<li><a href="<?php the_permalink(); ?>"><img src="<?php print $image ?>" alt="<?php print $meta['image'][0]['post_title'] ?>"></a></li>
							<?php endwhile; endif; ?>
								<!-- <?php 
						wp_reset_postdata(); ?> -->
				</ul>
			</div>
		</div>
		<div class="clear"></div>
	</div> 
	<div class="clear"></div>