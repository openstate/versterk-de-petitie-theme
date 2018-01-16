<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>
    <div class="wrap container" role="document">
      <div class="content row">
        <main class="main">
          <div class="col-md-8 col-md-offset-2">
            <div class="tt_event_theme_page timetable_clearfix">
                <div class="tt_event_page_left">
                    <?php
                        the_post_thumbnail("event-post-thumb", array("alt" => get_the_title(), "title" => ""));
                    ?>
                    <h2><?php the_title();?></h2>
                    <?php
                    $subtitle = get_post_meta(get_the_ID(), "timetable_subtitle", true);
                    if($subtitle!=""):
                    ?>
                        <h5><?php echo $subtitle; ?></h5>
                    <?php
                    endif;
                    if(have_posts()) : while (have_posts()) : the_post();
                        echo tt_remove_wpautop(get_the_content());
                    endwhile; endif;
                    ?>
                </div>
                <?php if(is_active_sidebar('sidebar-event')): ?>
                <div class="tt_event_page_right">
                    <?php
                        dynamic_sidebar('sidebar-event');
                    ?>
                </div>
                <?php endif; ?>
            </div>
          </div>
        </main>
      </div><!-- /.content -->
    </div><!-- /.wrap -->

    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>
