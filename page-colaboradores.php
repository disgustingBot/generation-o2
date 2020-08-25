<?php get_header(); ?>
<section class="colaboradores_section">

  <hgroup class="headline_hgroup section_padding">
    <h1 class="hedline_title"><?php echo get_the_title(); ?></h1>
    <h5 class="hedline_txt"><?php echo get_the_excerpt() ?></h5>
  </hgroup>
  <section class="filterable" id="filterable">
    <div class="hamburguer_selector_container">
      <div class="hamburger_menu_equipo rowcol1">
        <div class="hamburger_menu" onclick="altClassFromSelector('active','#filter_container')">
          <span class="hamStripe"></span>
          <span class="hamStripe"></span>
          <span class="hamStripe"></span>
        </div>
      </div>
      <div class="filter_container" id="filter_container">
        <div class="filter_menu" id="filter_menu">

          <?php $terms = get_terms( array(
            'taxonomy' => 'entidad',
            'parent'   => 0
          ) );
          foreach ($terms as $term) {
            echo '<style>';
            echo ".$term->slug .$term->slug{display:grid}";
            echo "[class='filterable'] .$term->slug{display:grid}";
            echo '</style>';
            ?>
            <p class="filter_menu_but" onclick="altClassFromSelector('<?php echo $term->slug; ?>','#filterable', 'filterable')">&#8226; <?php echo $term->name; ?></p>
          <?php } ?>
        </div>
      </div>
    </div>

    <?php
    $args=array(
      'post_type' => 'colaborador',
      // 'posts_per_page'=> 4,
    );
    $colaboradores=new WP_Query();
    $colaboradores->query($args);

    while($colaboradores->have_posts()){$colaboradores->the_post();
      $terms = get_the_terms( get_the_id(), 'entidad' );
      ?>

      <article class="hover_card <?php foreach($terms as $term) { echo ' ' . $term->slug; } ?>">
        <img class="hover_card_img rowcol1" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
        <div class="hover_card_info rowcol1">
          <h5><?php the_title(); ?></h5>

          <?php foreach($terms as $term) { ?>
            <p class="hover_card_txt">
              <?php echo $term->name; ?>
            </p>
          <?php } ?>
          <a class="hover_card_txt hover_card_mail" href="<?php echo get_post_meta($post->ID, 'link', true); ?>" target="_blank">Ir a la web del colaborador</a>
        </div>
      </article>

    <?php } wp_reset_query(); ?>


  </section>


</section>



<?php get_footer(); ?>
