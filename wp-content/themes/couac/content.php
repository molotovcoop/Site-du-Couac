<?php /** * The default template for displaying content. Used for both single and index/archive/search. * * @package Molotov * @subpackage Le Couac */ ?>

<div class="container_5"> <!-- Article --> 
		
	<article id="post-<?php the_ID(); ?>" <?php if (has_post_thumbnail() == false): ?>class="nophoto"<?php endif ?>>
		<?php $meta = get_post_meta( get_the_ID() );
		$sous_titre = $meta['sous_titre'][0]; ?>
		<header>
			<div class="boite">
				<div class="titre">
					<h2><?php print $sous_titre ?></h2>
					<h1><?php if (is_single()==false): ?><a href="<?php the_permalink(); ?>"><?php endif ?><?php the_title(); ?><?php if (is_single()==false): ?></a><?php endif ?></h1>
			</div>
			<div class="info">
					<p><?php the_author() ?><br />
						<span><?php the_time('j F Y') ?></span></p>
					</div>
				</div>		
				<?php if ( has_post_thumbnail() ): ?>
				<div class="grid_4 prefix_1">
					<?php the_post_thumbnail(); ?>
				</div>
				<?php endif; ?>
			</header>
		<div class="grid_3 prefix_1 suffix_1 corps">
			<?php the_content( '<span>lire la suite</span' ); ?> 
		</div>
		<div class="clear"></div>
	</article>

</div> 
<div class="clear"></div>

<div class="large breve"> <!-- Brève --> 
	<div class="container_5">
		
		<?php $args = array( 
			'posts_per_page' => 1, 
			'orderby' => 'rand', 
			'post_type'=>'breve' );
		$rand_posts = get_posts( $args );
		foreach ( $rand_posts as $post ) : 
		  setup_postdata( $post ); 
			$auteur = get_post_meta(get_the_ID(), 'auteur', true); ?>
			<div class="grid_1 titre">
				<h1><?php the_title(); ?></h1>
			</div>
			<div class="grid_3 texte">
				<p><?php the_content("Continue reading " . the_title('', '', false)); ?>
					<span><?php print $auteur ?></span></p>
			</div>
			<div class="grid_1 autre">
				<a href="#">D'autres brèves »</a>
			</div>
			<div class="clear"></div>
		<?php endforeach; 
		wp_reset_postdata(); ?>
		

	</div>
</div> 
<div class="clear"></div>