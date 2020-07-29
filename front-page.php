<?php get_header(); ?>

<section class="ATF front_page_ATF">
  <div class="card overlaid overlaid_big">
    <img class="rowcol1 lazy" data-url="<?php echo get_the_post_thumbnail_url(); ?>" alt="Ilustración Generación o2">
    <hgroup class="overlaid_caption">
      <h1 class="overlaid_title"><?php echo get_the_title() ?></h1>
      <h2 class="overlaid_txt"><?php echo get_the_excerpt() ?></h2>
    </hgroup>
  </div>

  <aside class="front_page_ATF_CTA">
    <h5 class="front_page_ATF_CTA_title"><?php echo get_post_meta($post->ID, '1-texto-superior-CTA', true); ?></h5>
    <div class="CTA_container">
      <p class="CTA_txt"><?php echo get_post_meta($post->ID, '2-texto-central-CTA', true); ?></p>
      <a class="btn CTA_link" href="<?php echo get_post_meta($post->ID, '3-link-CTA', true); ?>" target="_blank"><?php echo get_post_meta($post->ID, '4-texto-link-CTA', true); ?></a>
    </div>
  </aside>

  <?php
  $args = array(
    'post_type'=>'departamentos',
  );
  $departamento=new WP_Query($args);
  while($departamento->have_posts()){$departamento->the_post();?>
    <article class="card ATFCards">
      <img data-url="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="card_img card_img_rounded lazy">
      <hgroup class="cardCaption">
        <h4 class="overlaid_title"><?php echo get_the_title() ?></h4>
        <h5 class="overlaid_txt"><?php echo get_the_excerpt() ?></h5>
      </hgroup>


    </article>
  <?php } ?>







</section>




<?php get_footer(); ?>
