<?php get_header(); ?>


<section class="departamentos">
  <hgroup class="headline_hgroup rowcol1">
    <h1 class="title"><?php echo get_the_title(); ?></h1>
    <h5 class="hedline_txt">Proin convallis at urna at euismod. Donec rutrum non nunc eget tristique. Suspendisse cursus purus id risus convallis commodo. Vivamus lobortis justo quis sodales facilisis. Morbi a convallis ligula, ut pretium elit. Donec imperdiet elementum dui, hendrerit auctor ante hendrerit eu.</h5>
  </hgroup>
<?php

$terms = get_terms( array(
  'taxonomy'   => 'departamento', // Swap in your custom taxonomy name
  'hide_empty' => false,
));

// var_dump($terms);

// Loop through all terms with a foreach loop
foreach( $terms as $term ) { ?>
  <article class="deep">
    <img class="deep_img lazy" data-url="<?php echo wp_get_attachment_url( get_img_id_by_slug(get_term_meta( $term->term_id, 'lt_meta_img', true ))); ?>" alt="">
    <h3 class="deep_btn" style="--background_from_php:rgba(var(--<?php echo $term->slug; ?>_color_rgb), .8)"><a href="<?php echo get_term_link($term->term_id); ?>"><?php echo $term->name; ?></a></h3>
  </article>
<?php } ?>
</section>





<?php get_footer(); ?>
