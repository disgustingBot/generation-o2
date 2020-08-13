<?php get_header(); ?>

<figure class="grid overlap_card section_padding">
  <img class="lazy overlap_card_img rowcol1" data-url="<?php echo get_the_post_thumbnail_url(); ?>" alt="Ilustración Generación o2">
  <figcaption class="overlap_card_caption rowcol1">
    <div class="">
      <h1 class="overlap_card_title"><?php echo the_title() ?></h1>
    </div>
    <div class="vertical_line"></div>

  </figcaption>

</figure>





<?php get_footer(); ?>
