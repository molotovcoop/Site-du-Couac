<?php /** * The default template for displaying content. Used for both single and index/archive/search. * * @package WordPress * @subpackage Twenty_Thirteen * @since Twenty Thirteen 1.0 */ ?>

	<article id="post-<?php the_ID(); ?>" <?php if (has_post_thumbnail() == false): ?>class="nophoto"<?php endif ?>>
		<?php $meta = get_post_meta( get_the_ID() );
		$sous_titre = $meta['sous_titre'][0]; ?>
		<header>
			<div class="boite">
				<div class="titre">
					<h2><?php print $sous_titre ?></h2>
					<h1><a href="<?php get_permalink() ?>"><?php the_title(); ?></a></h1>
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