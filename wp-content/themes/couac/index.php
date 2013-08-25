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

<div class="large nospace"> <!-- Plogues --> 
	<div class="container_5">
		<div class="grid_5 appel nospace">
			<ul>
			  <?php query_posts(array(
				'post_type' => 'appel', 
				'showposts' => 3)) ;
				while (have_posts()): the_post();
					$meta = get_post_meta( get_the_ID() );
					$appel = $meta['image'][0]['guid']; 
					?>
					<li><a href="<?php the_permalink(); ?>"><img src="<?php print $appel;?>"</a></li>
									
				<?php endwhile; ?>
			
			</ul>

		</div>
	</div>
	<div class="clear"></div>
</div> 
<div class="clear"></div>

<div class="container_5"> <!-- Article --> 
	<article>
		<header>
			<div class="boite">
				<div class="titre">
					<h2>P-6 et profilage politique</h2>
					<h1><a href="#">Pour que le pire ne soit pas avenir</a></h1>
				</div>
				<div class="info">
					<p>Isabelle Baez<br />
						<span>16 mai 2013</span></p>
					</div>
				</div>		
			<div class="grid_4 prefix_1">
				<img src="<?php bloginfo('template_url'); ?>/photo1.png" alt="Photo" />
			</div>
		</header>
		<div class="grid_3 prefix_1 suffix_1 corps">
			<p>J’aimerais qu’on revienne aujourd’hui sur le côté positif du printemps 2012 parce qu’à ce moment-là on ne se doutait pas la chance qu’on avait.</p>
<p>Quelques dates, quelques bonheurs à partager. Le 13 avril, notre première manif de nuit. On inaugurait une tradition qu’on n’osait alors même pas espérer! Combien d’arrestations à cette première manif ? Une. Une seule, mes chères souris! Avec un peu de chance, c’était un infiltré, peut-être même Sylvain qui se faisait les dents. <span><a href="#">lire la suite</a></span></p>
		</div>
		<div class="clear"></div>
	</article>
</div> 
<div class="clear"></div>

<div class="large breve">
	<div class="container_5">
		<div class="grid_1 titre">
			<h1>Solidarité de première classe</h1>
		</div>
		<div class="grid_3 texte">
			<p>En Alabama, plusieurs itinérants ont tenu à manifester leurs solidarité vis-à-vis les passagers du bateau de croisière Carnival Triumph, qui ont été obligés de vivre dans des conditions déplorables durant quelques jours.<br />
				<span>MUSIRONIE</span></p>
		</div>
		<div class="grid_1 autre">
			<a href="#">D'autres brèves »</a>
		</div>
		<div class="clear"></div>
	</div>
</div>
<div class="clear"></div>

<div class="container_5"> <!-- Article --> 
	<article>
		<header>
			<div class="boite">
				<div class="titre">
					<h2>P-6 et profilage politique</h2>
					<h1><a href="#">Pour que le pire ne soit pas avenir</a></h1>
				</div>
				<div class="info">
					<p>Isabelle Baez<br />
						<span>16 mai 2013</span></p>
					</div>
				</div>		
				<div class="grid_4 prefix_1">
					<img src="<?php bloginfo('template_url'); ?>/photo1.png" alt="Photo" />
				</div>
		</header>
		<div class="grid_3 prefix_1 suffix_1 corps">
			<p>J’aimerais qu’on revienne aujourd’hui sur le côté positif du printemps 2012 parce qu’à ce moment-là on ne se doutait pas la chance qu’on avait.</p>
<p>Quelques dates, quelques bonheurs à partager. Le 13 avril, notre première manif de nuit. On inaugurait une tradition qu’on n’osait alors même pas espérer! Combien d’arrestations à cette première manif ? Une. Une seule, mes chères souris! Avec un peu de chance, c’était un infiltré, peut-être même Sylvain qui se faisait les dents. <span><a href="#">lire la suite</a></span></p>
		</div>
		<div class="clear"></div>
	</article>
</div> 
<div class="clear"></div>

<div class="large breve">
	<div class="container_5">
		<div class="grid_1 titre">
			<h1>Solidarité de première classe</h1>
		</div>
		<div class="grid_3 texte">
			<p>En Alabama, plusieurs itinérants ont tenu à manifester leurs solidarité vis-à-vis les passagers du bateau de croisière Carnival Triumph, qui ont été obligés de vivre dans des conditions déplorables durant quelques jours.<br />
				<span>MUSIRONIE</span></p>
		</div>
		<div class="grid_1 autre">
			<a href="#">D'autres brèves »</a>
		</div>
		<div class="clear"></div>
	</div>
</div>
<div class="clear"></div>	

<div class="container_5"> <!-- Article --> 
	<article class="nophoto">
		<header>
			<div class="boite">
				<div class="titre">
					<h2>P-6 et profilage politique</h2>
					<h1><a href="#">Pour que le pire ne soit pas avenir</a></h1>
				</div>
				<div class="info">
					<p>Isabelle Baez<br />
						<span>16 mai 2013</span></p>
				</div>
			</div>				
		</header>

		<div class="grid_3 prefix_1 suffix_1 corps">
			<p>J’aimerais qu’on revienne aujourd’hui sur le côté positif du printemps 2012 parce qu’à ce moment-là on ne se doutait pas la chance qu’on avait.</p>
			<p>Quelques dates, quelques bonheurs à partager. Le 13 avril, notre première manif de nuit. On inaugurait une tradition qu’on n’osait alors même pas espérer! Combien d’arrestations à cette première manif ? Une. Une seule, mes chères souris! Avec un peu de chance, c’était un infiltré, peut-être même Sylvain qui se faisait les dents. <span><a href="#">lire la suite</a></span></p>
		</div>
		<div class="clear"></div>
	</article>
</div> 
<div class="clear"></div>


<?php get_footer(); ?>