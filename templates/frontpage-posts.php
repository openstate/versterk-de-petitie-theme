<div class="container">
  <div class="row move-up archive">
    <div class="col-md-6">
      <h1 class="red-txt">Nieuws</h1>
      <img class="img-responsive display-inline lijntje" src="<?= get_template_directory_uri() . '/dist/images/Lijntje_rood-01.svg'; ?>" alt="rode lijn"/>
      <?php
        $args = array( 'posts_per_page' => 2, 'category_name' => 'News' );
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
        $args = array( 'posts_per_page' => 2, 'category_name' => 'Datablog' );
        $myposts = get_posts( $args );
        foreach ( $myposts as $post ) : setup_postdata( $post );
      ?>
        <?php get_template_part('templates/content', 'post'); ?>
      <?php endforeach;
        wp_reset_postdata();
      ?>
    </div>
    </div>
    <p class="news-datablog-archive underline move-up" style="text-align:right"><a href=<?= get_home_url(null, 'nieuws-datablogs/'); ?>>Nieuws &amp; Datablogs archief  ></a></p>
    <br>
  </div>
  <br>
  <br>
</div>
