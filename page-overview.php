<?php
/**
 * Template Name: Overview Page
 */
?>

<div class="archive">
  <div class="col-md-6">
    <h1 class="red-txt">Nieuws</h1>
    <img class="img-responsive display-inline lijntje" src="<?= get_template_directory_uri() . '/dist/images/Lijntje_rood-01.svg'; ?>" alt="rode lijn"/>
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

  <div class="col-md-6">
    <h1>Datablogs</h1>
    <img class="img-responsive display-inline lijntje" src="<?= get_template_directory_uri() . '/dist/images/Lijntje_grijs-01.svg'; ?>" alt="rode lijn"/>
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
