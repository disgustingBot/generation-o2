<?php get_header(); ?>

<section class="ATF noticias_ATF section_greyF5">
  <hgroup class="headline_hgroup">
    <h2 class="hedline_title">Noticias</h2>
    <h5 class="hedline_txt">Sed dictum turpis at mauris dictum, cursus eleifend odio interdum. Sed ut lacus eu enim dignissim tristique id ut sapien.</h5>
  </hgroup>
  <?php
  $args=array(
    'post_type'=>'post',
    'posts_per_page'=>3,
    'tag' => 'destacado',
  );
  $atf=new WP_Query($args);
  while($atf->have_posts()){
    $atf->the_post(); ?>

    <article class="card overlaid_card">
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

<section class="section_padding noticias_container">
  <?php while(have_posts()){the_post(); ?>

    <article class="card sharing_card">
      <div class="sharing_card_top">
        <div class="sharing_card_title_cont">
          <h5 class="sharing_card_title">
            <?php the_title(); ?>
          </h5>
          <p class="sharing_card_author">
            Por
            <?php the_author();?>
          </p>
        </div>
        <a class="sharing_card_share_link" href="#">
          <svg class="sharing_card_share_svg" width="29" height="32" viewBox="0 0 29 32" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M24.1667 22.6185C22.9422 22.6185 21.8467 23.1004 21.0089 23.8554L9.52167 17.1888C9.60222 16.8193 9.66667 16.4498 9.66667 16.0643C9.66667 15.6787 9.60222 15.3092 9.52167 14.9398L20.88 8.33735C21.75 9.14056 22.8939 9.63855 24.1667 9.63855C26.8411 9.63855 29 7.48594 29 4.81928C29 2.15261 26.8411 0 24.1667 0C21.4922 0 19.3333 2.15261 19.3333 4.81928C19.3333 5.20482 19.3978 5.5743 19.4783 5.94377L8.12 12.5462C7.25 11.743 6.10611 11.245 4.83333 11.245C2.15889 11.245 0 13.3976 0 16.0643C0 18.7309 2.15889 20.8835 4.83333 20.8835C6.10611 20.8835 7.25 20.3855 8.12 19.5823L19.5911 26.2651C19.5106 26.6024 19.4622 26.9558 19.4622 27.3092C19.4622 29.8956 21.5728 32 24.1667 32C26.7606 32 28.8711 29.8956 28.8711 27.3092C28.8711 24.7229 26.7606 22.6185 24.1667 22.6185Z" fill="currentColor"/>
          </svg>
        </a>
      </div>
      <a class="sharing_card_img_link" href="<?php the_permalink(); ?>">
        <img class="sharing_card_img"  src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
      </a>
      <div class="sharing_card_bottom">
        <p class="sharing_card_description"><?php echo excerpt(90) . '(...)'; ?></p>
        <a class="simple_btn" href="<?php the_permalink(); ?>">LEER MÁS</a>
      </div>
    </article>
  <?php } wp_reset_query(); ?>
</section>






<?php get_footer(); ?>
