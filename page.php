<?php get_header(); ?>

<?php while(have_posts()){the_post(); ?>
<main class="section_padding">
  <?php echo get_the_content() ?>
  <?php } wp_reset_query(); ?>
</main>

<?php get_footer(); ?>
