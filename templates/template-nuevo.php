<?php
/**
* Template Name: Nuevo
* Template Post Type: post, page
* 
* @package WordPress
* @subpackage Twenty_Seventeen
* @since 1.0
*/

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) :
				?>
				<h2> <span style = "color : red;"> Pequeña informacion del propietario </span> </h2>
			    <?php
			    the_post();
				the_excerpt();
				the_time(); ?>
				</br>
				<?php
				the_date(); ?>
				</br>
				<?php
				the_author();
				get_template_part( 'template-parts/page/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php
get_footer('nuevo');
