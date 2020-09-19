<?php get_header(); ?>

<hgroup class="headline_hgroup section_padding">
  <h1 class="hedline_title">Generaci<span class="secondary_color">ó</span>n o2</h1>
  <h5 class="hedline_txt"><?php echo get_the_excerpt() ?></h5>
</hgroup>

<section class="grid_1_2">
  <div class="grid_1_2_background-image"
    style="
    background-image: url('<?php echo get_post_meta($post->ID, 'A_bloque_1_background', true); ?>');
    ">
  </div>
  <div class="grid_1_2_centered_txt_container">
    <h2 class="hedline_title"><?php echo get_post_meta($post->ID, 'B_bloque_1_titulo', true); ?></h2>
    <p class="hedline_txt_small"><?php echo get_post_meta($post->ID, 'C_bloque_1_parrafo_1', true); ?></p>
    <p class="hedline_txt_small"><?php echo get_post_meta($post->ID, 'D_bloque_1_parrafo_2', true); ?></p>
  </div>
</section>
<section class="grid_1_2">
  <div class="grid_1_2_centered_txt_container grid_1_2_centered_txt_container_fix">
    <h2 class="hedline_title"><?php echo get_post_meta($post->ID, 'F_bloque_2_titulo', true); ?></h2>
    <p class="hedline_txt_small"><?php echo get_post_meta($post->ID, 'G_bloque_2_parrafo_1', true); ?></p>
    <p class="hedline_txt_small"><?php echo get_post_meta($post->ID, 'H_bloque_2_parrafo_2', true); ?></p>
  </div>
  <div class="grid_1_2_background-image"
    style="
    background-image: url('<?php echo get_post_meta($post->ID, 'E_bloque_2_background', true); ?>');
    ">
  </div>
</section>
<section class="grid_1_2">
  <div class="grid_1_2_background-image"
    style="
    background-image: url('<?php echo get_post_meta($post->ID, 'H_bloque_3_background', true); ?>');
    ">
  </div>
  <div class="grid_1_2_centered_txt_container">
    <h3 class="hedline_title"><?php echo get_post_meta($post->ID, 'I_bloque_3_titulo', true); ?></h3>
    <p class="hedline_txt_small"><?php echo get_post_meta($post->ID, 'J_bloque_3_parrafo_1', true); ?></p>
    <p class="hedline_txt_small"><?php echo get_post_meta($post->ID, 'K_bloque_3_parrafo_2', true); ?></p>
  </div>
</section>

<aside class="page_CTA_full_screen">
  <h5 class="page_CTA_title"><?php echo get_post_meta($post->ID, 'L-texto-superior-CTA', true); ?></h5>
  <div class="CTA_container">
    <p class="CTA_txt"><?php echo get_post_meta($post->ID, 'M-texto-central-CTA', true); ?></p>
    <a class="btn CTA_link" href="<?php echo get_post_meta($post->ID, 'N-link-CTA', true); ?>" target="_blank"><?php echo get_post_meta($post->ID, 'O-texto-link-CTA', true); ?></a>
  </div>
</aside>







<?php get_footer(); ?>
