<?php
/**
 * Template for displaying posts
 */
 ?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'article' ); ?>>
  <header class="article-header">

    <?php the_title( sprintf( '<h1 class="article-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

  </header><!-- .article-header -->
  <div class="article-content">
    <?php
      /* translators: %s: Name of current post */
      the_content( sprintf(
        wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'simple' ), array( 'span' => array( 'class' => array() ) ) ),
        the_title( '<span class="screen-reader-text">"', '"</span>', false )
      ) );
    ?>

    <?php
      wp_link_pages( array(
        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'simple' ),
        'after'  => '</div>',
      ) );
    ?>
  </div><!-- .article-content -->
</article><!-- .article -->

<hr class="divider article-divider">
