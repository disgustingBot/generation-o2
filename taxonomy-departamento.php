<?php get_header(); ?>


<section class="depto_ATF">
    <img class="depto_ATF_img rowcol1 lazy" data-url="<?php echo wp_get_attachment_url( get_img_id_by_slug(get_term_meta( get_queried_object()->term_id, 'lt_meta_img', true ))); ?>" alt="">
    <div class="depto_ATF_transp rowcol1"  style="--background_from_php:rgba(var(--<?php echo get_queried_object()->slug; ?>_color_rgb), .5)">
      <img class="depto_ATF_icon rowcol1 lazy" data-url="<?php echo wp_get_attachment_url( get_img_id_by_slug(get_term_meta( get_queried_object()->term_id, 'lt_meta_icon', true ))); ?>" alt="">
      <div class="depto_ATF_caption">
        <h2><?php echo get_the_archive_title(); ?> - Generacion O2</h2>
        <p><?php echo get_queried_object()->description; ?></p>
      </div>
    </div>
  <?php
  // var_dump(get_queried_object());
  ?>
</section>

<section class="section_padding grid_123">
  <hgroup class="headline_hgroup section_padding grid_123_title">
    <h1 class="hedline_title">Proyectos <?php echo get_the_archive_title(); ?></h1>
    <h5 class="hedline_txt">Sed dictum turpis at mauris dictum, cursus eleifend odio interdum. Sed ut lacus eu enim dignissim tristique id ut sapien.</h5>
  </hgroup>
  <?php while(have_posts()){the_post(); ?>

    <?php sharing_card(); ?>

  <?php } wp_reset_query(); ?>

</section>



<?php get_footer(); ?>
