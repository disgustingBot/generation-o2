<?php get_header(); ?>

<?php while(have_posts()){the_post(); ?>
<section class="grid overlap_card section_padding">
  <img class="lazy overlap_card_img rowcol1" data-url="<?php echo get_the_post_thumbnail_url(); ?>" alt="Ilustración Generación o2">
  <div class="overlap_card_caption rowcol1">
    <hgroup class="">
      <h1 class="overlap_card_title"><?php the_title(); ?></h1>
      <h5 class="overlap_card_author"><i>Por <?php the_author(); ?></i></h5>
    </hgroup>
    <div class="vertical_line"></div>
    <div class="overlap_card_social_container grid">
      <p class="overlap_card_social_title">Comparte</p>
      <?php  include 'inc/socialmedia.php'; ?>
    </div>
  </div>
</section>
<section class="single_content section_padding">
  <?php the_content() ?>
</section>




<?php } wp_reset_query(); ?>

<?php get_footer(); ?>
