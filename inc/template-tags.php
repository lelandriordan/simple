<?php
/**
 * Simple's custom template tags
 */


 if ( ! function_exists( 'simple_post_thumbnail' ) ) :
/**
 * Displays the post thumbnail
 */
function simple_post_thumbnail() {
	/**
	 * Display nothing for password protected posts, attachments or no featured image
	 */
	if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
		return;
	}
	if ( is_singular() && has_post_thumbnail() ) {
	/**
	* If the current page/post is singular, and it has a post thumbnail,
	* display the image, but don't wrap it in an unnecessary permalink.
	*/
	?>
	<div class="post-thumbnail">
		<?php the_post_thumbnail('full', array( 'class' => "article-image" )); ?>
	</div>

	<?php } elseif ( has_post_thumbnail() ) {
	/**
	 * Elseif it isn't a single page and the post has a post thumbnail,
	 * wrap the image in a permalink.
	 */
	?>
	<a class="post-thumbnail" href="<?php esc_url( the_permalink() ); ?>">
		<?php the_post_thumbnail('full', array( 'class' => "article-image" )); ?>
	</a>

	<?php } else {
	/**
	 * Otherwise don't display any markup for posts without post thumbails.
	 */
		return;
	}
}
endif; // End simple_post_thumbnail


if ( ! function_exists( 'simple_post_date' ) ) :
/**
 * Displays the post date
 */
function simple_post_date() {
  $time_string = '<time class="article-date published updated" datetime="%1$s">%2$s</time>';
  if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
    $time_string = '<time class="article-date updated" datetime="%3$s">%4$s</time>';
  }
  $time_string = sprintf( $time_string,
    esc_attr( get_the_date( 'c' ) ),
    esc_html( get_the_date() ),
    esc_attr( get_the_modified_date( 'c' ) ),
    esc_html( get_the_modified_date() )
  );

  echo $time_string;
}
endif; // End simple_post_time


if ( ! function_exists( 'simple_site_pagination' ) ) :
/**
 * Displays previous/next on feed pages
 * TODO: Reconfigure once WP 4.3 comes out
 */
function simple_site_pagination() {
  // Don't print empty markup if there's only one page.
  if ( $GLOBALS['wp_query']->max_num_pages < 2 ) {
    return;
  }
  ?>

  <nav class="site-pagination" role="navigation">
    <h2 class="screen-reader-text"><?php esc_html_e( 'Posts navigation', 'simple' ); ?></h2>
    <ul>
      <?php if ( get_next_posts_link() ) : ?>
        <li class="previous"><?php next_posts_link( esc_html__( '&larr; Older Posts', 'simple' ) ); ?></li>
      <?php endif; ?>

      <?php if ( get_previous_posts_link() ) : ?>
        <li class="next"><?php previous_posts_link( esc_html__( 'Newer Posts &rarr;', 'simple' ) ); ?></li>
      <?php endif; ?>
    </ul>
  </nav><!-- .site-pagination -->
  <?php
}
endif; // End simple_site_pagination
