<?php
/**
 * Template Name: News Page
 */
?>
<div class="archive">
  <div class="row">
    <br>
    <hr style="background-color: white; height: 18px; margin: 0;">

    <div class="col-md-offset-2">
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
  </div>
</div>
