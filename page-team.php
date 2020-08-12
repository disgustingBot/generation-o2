<?php get_header(); ?>

<div class="grid equipo_ATF">
  <img class="rowcol1 lazy equipo_ATF_img" data-url="<?php echo get_the_post_thumbnail_url(); ?>" alt="Ilustración Generación o2">
  <hgroup class="headline_hgroup rowcol1">
    <h1 class="title">Equipo de Generaci<span class="secondary_color">ó</span>n O2</h1>
    <h5 class="txt">Somos una organización no gubernamental sin ánimo de lucro, apolítica y laica con el objetivo de ayudar a quienes más lo necesitan.</h5>
  </hgroup>

  <div class="know_us_btn rowcol1">
    <svg class="know_us_SVG" width="120" height="120" viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg">
      <g filter="url(#filter0_ddd)">
        <path d="M60 9C32.4 9 10 31.4 10 59C10 86.6 32.4 109 60 109C87.6 109 110 86.6 110 59C110 31.4 87.6 9 60 9ZM60 69L40 49H80L60 69Z" fill="#90B73B"/>
      </g>
      <defs>
        <filter id="filter0_ddd" x="0" y="0" width="120" height="120" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
          <feFlood flood-opacity="0" result="BackgroundImageFix"/>
          <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
          <feOffset dy="1"/>
          <feGaussianBlur stdDeviation="5"/>
          <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.2 0"/>
          <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
          <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
          <feOffset dy="4"/>
          <feGaussianBlur stdDeviation="2.5"/>
          <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.12 0"/>
          <feBlend mode="normal" in2="effect1_dropShadow" result="effect2_dropShadow"/>
          <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
          <feOffset dy="2"/>
          <feGaussianBlur stdDeviation="2"/>
          <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.14 0"/>
          <feBlend mode="normal" in2="effect2_dropShadow" result="effect3_dropShadow"/>
          <feBlend mode="normal" in="SourceGraphic" in2="effect3_dropShadow" result="shape"/>
        </filter>
      </defs>
    </svg>
    <p class="txt">conócenos</p>
  </div>
</div>


<section class="section_padding equipo_section">

  <div class="hamburger_menu_equipo">
    <div class="hamburger_menu" onclick="altClassFromSelector('mobileNavMenu','#body')">
      <span class="hamStripe"></span>
      <span class="hamStripe"></span>
      <span class="hamStripe"></span>
    </div>
  </div>

  <?php
  $args=array(
    'post_type' => 'equipo',
    // 'posts_per_page'=> 4,
  );
  $equipo=new WP_Query();
  $equipo->query($args);

  while($equipo->have_posts()){$equipo->the_post();
    $terms = get_the_terms( get_the_id(), 'area' );
    ?>

    <article class="grid hover_card">
      <img class="hover_card_img rowcol1" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
      <div class="hover_card_info rowcol1">
        <h5><?php the_title(); ?></h5>
        <a class="hover_card_info_txt" href="mailto:<?php echo get_post_meta($post->ID, 'email', true); ?>"><?php echo get_post_meta($post->ID, 'email', true); ?></a>
        <p><?php get_the_terms( $equipo, 'depto' ); ?></p>
        <p><?php get_the_terms( $equipo, 'cargos' ); ?></p>
      </div>
    </article>

  <?php } wp_reset_query(); ?>


</section>





<?php get_footer(); ?>
