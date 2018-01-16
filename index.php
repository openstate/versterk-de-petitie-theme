<?php if (is_front_page()) : ?>
  <?php get_template_part('templates/frontpage-content') ?>
<?php endif; ?>

<br class="hidden-xs">
<br class="hidden-xs">
<br class="hidden-xs">

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<?php get_template_part('templates/frontpage-posts') ?>
