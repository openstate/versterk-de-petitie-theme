<hr style="background-color: #aa182c; height:25px;">
<div class="nieuwsberichten">
  <div class="row">
    <div class="col-xs-12 col-md-3">
      <h1 class="post-header">Nieuws</h1>
    </div>
    <div class="col-xs-12 col-md-6">
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
  <div class="col-xs-12 col-md-3 nieuwsberichtenplaatje"> 
    <img class="img-responsive block" src="<?= get_template_directory_uri() . '/dist/images/eindexamen.jpg' ?>" alt="Foto van een eindexamen voortgezet onderwijs in 1988">
  </div>
  </div>
</div>
<br>
<hr style="background-color: #888d86; height:25px;">
<div class="datablogs">
  <div class="row">
    <div class="col-xs-12">
      <h1 class="post-header">Datablogs</h1>
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