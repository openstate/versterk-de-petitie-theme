<div class="container bg-light-blue">
  <div class="row">
    <div class="col-xs-12 col-sm-7 col-md-6 col-lg-5">
      <div class="row">
        <div class="col-xs-12 col-sm-8 col-sm-offset-2">
          <h3><b>Nieuws &amp; Datablogs</b></h3>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <br>
    <div class="col-md-10 col-md-offset-1">
      <div class="row bg-white">
        <div class="col-md-10 col-md-offset-1">
          <div class="row post-overview">
            <br>
            <div class="col-md-6">
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
          <p class="news-datablog-archive" style="text-align:right"><b><a href="https://accountabilityhack.nl/nieuws-datablogs/">Nieuws &amp; Datablogs archief  ></a></b></p>
          <br>
        </div>
      </div>
    </div>
  </div>
  <br>
  <br>
</div>
