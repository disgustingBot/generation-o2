<?php get_header(); ?>

<?php  ?>
<section class="grid noticias_ATF section_greyF5">
  <hgroup class="headline_hgroup section_padding">
    <h2 class="hedline_title"><?php single_post_title(); ?></h2>
    <h5 class="hedline_txt"><?php echo get_the_excerpt('17', '1_blog_texto', true); ?></h5>
  </hgroup>>

  <?php
  $args=array(
    'post_type'=>'post',
    'posts_per_page'=>3,
    'tag' => 'destacado',
  );
  $atf=new WP_Query($args);
  while($atf->have_posts()){
    $atf->the_post(); ?>

    <article class="grid overlaid_card">
      <a class="overlaid_card_link rowcol1" href="<?php the_permalink(); ?>">
        <img class="overlaid_img_2 " src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
      </a>
      <div class="overlaid_caption">
        <h5 class="overlaid_title"><?php the_title(); ?></h5>
        <p class="overlaid_txt"><?php echo excerpt(100); ?></p>
      </div>
    </article>



  <?php } wp_reset_query(); ?>
</section>

<section class="section_padding grid_1_2_3">

  <?php while(have_posts()){the_post(); ?>

    <?php sharing_card(); ?>

  <?php } wp_reset_query(); ?>

</section>






<?php get_footer(); ?>
