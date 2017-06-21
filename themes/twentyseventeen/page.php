<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
get_header(); ?>

<!-- <div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/page/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	<!--</div><!-- #primary -->
<!-- </div><!-- .wrap -->


<div class="cal-plugin margin-8 flex-media dir-row-media margin-5-media just-cont-btw-media">
  <section class="flex-media dir-col-media width-40-media height-media just-cont-cent">
    <div class="margin-bottom-50">
      <label for="amount"> How much do you need? </label>
      <input type="text" id="amount" readonly>
      <div id="slider"></div>
    </div>

    <div class="margin-bottom-50">
      <label for="term"> How much do you need? </label>
      <input type="text" id="term" class="no-border" readonly>
      <div id="term-slider"></div>
    </div>

    <div class="margin-bottom-50">
      <label for="total-loan-amount"> Your estimated bi-weekely payment </label>
      <p> $4,028 - $4,473 </p>
      <!-- dynam amount from js -->
      <!-- <p> <span id="totalAmountMin"></span> </p>
      <p> <span id="totalAmountMax "></span> </p> -->

      <a href="" class="button">Get Your Free Quote </a>
    </div>
  </section>

  <section class="flex-media dir-col-media width-60-media height-media just-cont-cent-media bg-media">
    <h3> With Lendified you could </h3>
    <h3 class="text-green"> save up to <span id="amount-saved">$13,015</span> in interest </h3>
    <img src="bar.png" alt="temporary bar">
    <h6 class="text-center">Estimated Total Interest Cost </h6>
  </section>

</div>




<?php get_footer();
