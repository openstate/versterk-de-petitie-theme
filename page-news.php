<?php
/**
 * Template Name: News Page
 */
?>
<div class="archive">
  <div class="row">
    <div class="balk bg-groen">
      Nieuws
    </div>
    <div>
      <?php
        $args = array( 'posts_per_page' => 100, 'category_name' => 'News' );
        $myposts = get_posts( $args );
        foreach ( $myposts as $post ) : setup_postdata( $post );
      ?>
        <?php get_template_part('templates/content', 'post'); ?>
      <?php endforeach;
        wp_reset_postdata();
      ?>
    </div>
  </div>
</div>
