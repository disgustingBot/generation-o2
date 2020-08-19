<?php get_header(); ?>


<section class="depto_ATF">
    <img class="depto_ATF_img rowcol1 lazy" data-url="<?php echo wp_get_attachment_url( get_img_id_by_slug(get_term_meta( get_queried_object()->term_id, 'lt_meta_banner', true ))); ?>" alt="">
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

<section class="count_container dady_break">
  <div class="redDot" id="growUpActivator"></div>

  <div class="count">
    <p class="countNumber">€<span class="GrowUp Obse" data-observe="#growUpActivator" data-unobserve="true" data-target="<?php echo get_term_meta( get_queried_object()->term_id, 'lt_meta_initial_founds', true ); ?>">0</span></p>
    <p class="countTxt">Fondos recaudados desde la fundacion del departamento</p>
  </div>

  <div class="count">
    <p class="countNumber">€<span class="GrowUp Obse" data-observe="#growUpActivator" data-unobserve="true" data-target="<?php echo get_term_meta( get_queried_object()->term_id, 'lt_meta_yearly_founds', true ); ?>">0</span></p>
    <p class="countTxt">Fondos recaudados desde principio de este año</p>
  </div>
</section>

<section class="section_padding grid_1_2_3">
  <hgroup class="headline_hgroup section_padding grid_1_2_3_title">
    <h1 class="hedline_title">Proyectos <?php echo get_the_archive_title(); ?></h1>
  </hgroup>
  <?php while(have_posts()){the_post(); ?>

    <?php sharing_card(); ?>

  <?php } wp_reset_query(); ?>

</section>



<?php get_footer(); ?>
