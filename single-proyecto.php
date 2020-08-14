<?php get_header(); ?>

<?php while(have_posts()){the_post(); ?>
<section class="grid overlap_card section_padding">
  <img class="lazy overlap_card_img rowcol1" data-url="<?php echo get_the_post_thumbnail_url(); ?>" alt="Ilustración Generación o2">
  <div class="overlap_card_caption rowcol1">
    <hgroup class="">
      <h1 class="overlap_card_title"><?php the_title(); ?></h1>
      <h5 class="overlap_card_author"><i><?php the_author(); ?></i></h5>
    </hgroup>
    <div class="vertical_line"></div>
  </div>

</section>




<?php } wp_reset_query(); ?>

<?php get_footer(); ?>
