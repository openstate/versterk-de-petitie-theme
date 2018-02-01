<?php
/**
 * Template Name: Overview Page
 */
?>

<div class="archive">
  <div class="col-md-6">
    <h1 class="post-header red-txt">Nieuws</h1>
    <div class="lijntje-div lijntje-rood">
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

  <div class="col-md-6">
    <h1 class="post-header">Datablogs</h1>
    <div class="lijntje-div lijntje-grijs">
      <?php
        $args = array( 'posts_per_page' => 100, 'category_name' => 'Datablog' );
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
