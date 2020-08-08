<?php get_header(); ?>

<?php
// $user_meta = get_userdata( '1' );
// $current_user_role_slug = $user_meta->roles[0];
// echo $current_user_role_slug;
?>

<section class="ATF front_page_ATF">
  <div class="card overlaid_big overlaid_card">
    <img class="rowcol1 lazy overlaid_img" data-url="<?php echo get_the_post_thumbnail_url(); ?>" alt="Ilustración Generación o2">
    <hgroup class="overlaid_caption rowcol1">
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





$terms = get_terms( array(
  'taxonomy'   => 'departamento', // Swap in your custom taxonomy name
  'hide_empty' => false, 
));

// Loop through all terms with a foreach loop
foreach( $terms as $term ) { ?>
  <article class="card ATFCards">
    <img data-url="<?php echo wp_get_attachment_url( get_img_id_by_slug(get_term_meta( $term->term_id, 'lt_meta_img', true ))); ?>" alt="" class="card_img card_img_rounded lazy">
    <hgroup class="cardCaption">
      <h4 class="cardCaption_title"><?php echo $term->name; ?></h4>
      <h5 class="cardCaption_txt"><?php echo $term->description; ?></h5>
    </hgroup>
  </article>
<?php }

// echo '</ul>';






  $args = array(
    'post_type'=>'departamentos',
  );
  $departamento=new WP_Query($args);
  while($departamento->have_posts()){$departamento->the_post();?>
    <article class="card ATFCards">
      <img data-url="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="card_img card_img_rounded lazy">
      <hgroup class="cardCaption">
        <h4 class="cardCaption_title"><?php echo get_the_title() ?></h4>
        <h5 class="cardCaption_txt"><?php echo get_the_excerpt() ?></h5>
      </hgroup>
    </article>
  <?php } ?>







</section>







<?php get_footer(); ?>
