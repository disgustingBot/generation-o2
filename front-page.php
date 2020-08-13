<?php get_header(); ?>

<?php
// $user_meta = get_userdata( '1' );
// $current_user_role_slug = $user_meta->roles[0];
// echo $current_user_role_slug;
?>

<section class="grid front_page_ATF">
  <div class="grid overlaid_big overlaid_card">
    <img class="rowcol1 lazy overlaid_img" data-url="<?php echo get_the_post_thumbnail_url(); ?>" alt="Ilustración Generación o2">
    <hgroup class="overlaid_caption rowcol1">
      <h1 class="overlaid_title"><?php echo get_the_title() ?></h1>
      <h2 class="overlaid_txt"><?php echo get_the_excerpt() ?></h2>
    </hgroup>
  </div>

  <aside class="page_CTA">
    <h5 class="page_CTA_title"><?php echo get_post_meta($post->ID, '1-texto-superior-CTA', true); ?></h5>
    <div class="CTA_container">
      <p class="CTA_txt"><?php echo get_post_meta($post->ID, '2-texto-central-CTA', true); ?></p>
      <a class="btn CTA_link" href="<?php echo get_post_meta($post->ID, '3-link-CTA', true); ?>" target="_blank"><?php echo get_post_meta($post->ID, '4-texto-link-CTA', true); ?></a>
    </div>
  </aside>

  <?php


$terms = get_terms( array(
  'taxonomy'   => 'departamento', // Swap in your custom taxonomy name
  'hide_empty' => false,
));

// Loop through all terms with a foreach loop
foreach( $terms as $term ) { ?>
  <article class="grid standard_card">
    <a href="<?php echo get_term_link($term->term_id); ?>">
    <img class="card_img card_img_rounded lazy" data-url="<?php echo wp_get_attachment_url( get_img_id_by_slug(get_term_meta( $term->term_id, 'lt_meta_img', true ))); ?>" alt="Ilustración de departamento de Generación O2">
    </a>
    <hgroup class="card_caption">
      <a href="<?php echo get_term_link($term->term_id); ?>"><h4 class="card_caption_title"><?php echo $term->name; ?></h4></a>
      <a href="<?php echo get_term_link($term->term_id); ?>"><h5 class="card_caption_txt"><?php echo (get_term_meta( $term->term_id, 'lt_meta_short_description', true )); ?></h5></a>
    </hgroup>
  </article>
<?php } ?>
</section>







<?php get_footer(); ?>
