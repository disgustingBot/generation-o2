<?php get_header(); ?>

<?php
// $user_meta = get_userdata( '1' );
// $current_user_role_slug = $user_meta->roles[0];
// echo $current_user_role_slug;
?>

<section class="ATF front_page_ATF">
  <div class="grid img_overlaid_container front_Page_ATF_img_container">
    <img class="rowcol1 img_overlaid front_Page_ATF_img lazy" data-url="<?php echo get_the_post_thumbnail_url(); ?>" alt="Ilustración Generación o2">
    <hgroup class="rowcol1 img_overlaid_hgroup">
      <h1 class="img_overlaid_title"><?php echo get_the_title() ?></h1>
      <h2 class="img_overlaid_excerpt"><?php echo get_the_excerpt() ?></h2>
    </hgroup>
    <div class="rowcol1 overlay"></div>
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
    'post_type'=>'proyectos',
  );
  $proyectos=new WP_Query($args);
  while($proyectos->have_posts()){$proyectos->the_post();?>
    <article class="grid front_page_ATF_projects">
      <img data-url="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="rowcol1 lazy">
      <div class="rowcol1 overlay"></div>
      <hgroup class="rowcol1 img_overlaid_hgroup">
        <h4 class="img_overlaid_title"><?php echo get_the_title() ?></h4>
        <h5 class="img_overlaid_excerpt"><?php echo get_the_excerpt() ?></h5>
      </hgroup>


    </article>
  <?php } ?>







</section>







<?php get_footer(); ?>
