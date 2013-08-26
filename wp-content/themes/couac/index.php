<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Molotov
 * @subpackage Le Couac
 */

get_header(); ?>

<div class="large nospace"> <!-- Appels/Plogues --> 
	<div class="container_5">
		<div class="grid_5 appel nospace">
			<ul>
				<?php $args = array( 
				'post_type' => 'appel' ) ;
				$appels = get_posts( $args );
				foreach ( $appels as $appel ) : ?>
					<li><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail() ?></a></li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
	<div class="clear"></div>
</div> 
<div class="clear"></div>

<?php if ( have_posts() ) : ?>
	<?php /* The loop */ ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'content', get_post_format() ); ?>
	<?php endwhile; endif; ?>

<?php get_footer(); ?>