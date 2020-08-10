<?php get_header(); ?>


<section class="departamentos">
  <h1><?php echo get_the_title(); ?></h1>
</section>
<?php

$terms = get_terms( array(
  'taxonomy'   => 'departamento', // Swap in your custom taxonomy name
  'hide_empty' => false, 
));

// Loop through all terms with a foreach loop
foreach( $terms as $term ) { ?>
  <article class="card">
    <img data-url="<?php echo wp_get_attachment_url( get_img_id_by_slug(get_term_meta( $term->term_id, 'lt_meta_img', true ))); ?>" alt="" class="card_img card_img_rounded lazy">
    <hgroup class="cardCaption">
      <h4 class="cardCaption_title"><?php echo $term->name; ?></h4>
      <h5 class="cardCaption_txt"><?php echo $term->description; ?></h5>
    </hgroup>
  </article>
<?php } ?>





<?php get_footer(); ?>
