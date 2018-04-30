<div class="nieuwsberichten">
  <div class="row">
    <div class="col-xs-12 col-md-6">
      <div class="balk bg-groen">
        Nieuws
      </div>
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
    <div class="col-xs-12 col-md-6">
      <div class="balk bg-rood">
        Datablogs
      </div>
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
</div>
<br>
<br>
