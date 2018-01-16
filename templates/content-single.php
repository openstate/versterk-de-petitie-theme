<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <?php while (have_posts()) : the_post(); ?>
        <article <?php post_class(); ?>>
          <header>
            <h3 class="entry-title"><?php the_title(); ?></h3>
            <?php
              if (in_category('news')) {
                echo '<span class="post-type"><b>[Nieuws]</b></span>';
              }
              elseif (in_category('datablog')) {
                echo '<span class="post-type"><b>[Datablog]</b></span>';
              }
            ?>
            <?php get_template_part('templates/entry-meta'); ?>
          </header>
          <div class="entry-content">
            <?php the_content(); ?>
          </div>
          <footer>
            <?php $category = get_the_category(); ?>
            <div class="row post-overview">
              <?php
                $args = array( 'posts_per_page' => 4, 'post__not_in' => array(get_the_ID()), 'category_name' => $category[0]->name );
                $myposts = get_posts( $args );
              ?>
              <div class="col-md-6">
                <?php
                  for ($x = 0; $x < 2; $x++) :
                    $post = $myposts[$x];
                    if(!is_null($post)) :
                      setup_postdata($post);
                ?>
                  <?php get_template_part('templates/content', 'post'); ?>
                <?php
                    endif;
                  endfor;
                ?>
              </div>
              <div class="col-md-6">
                <?php
                  for ($x = 2; $x < 4; $x++) :
                    $post = $myposts[$x];
                    if(!is_null($post)) :
                      setup_postdata($post);
                ?>
                  <?php get_template_part('templates/content', 'post'); ?>
                <?php
                    endif;
                  endfor;
                ?>
              </div>
              <?php
                wp_reset_postdata();
              ?>
            </div>
            <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
          </footer>
        </article>
      <?php endwhile; ?>
    </div>
  </div>
</div>
