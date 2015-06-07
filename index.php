<?php
/**
 * Simple's main template file
 */

get_header();

if ( have_posts() ) :

  // Start the loop
  while ( have_posts() ) : the_post();

    get_template_part( 'templates/content', get_post_format() );

  endwhile;

  simple_site_pagination();

endif;

get_footer();
