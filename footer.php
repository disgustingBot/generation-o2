

  <footer class="footer" id="footer">

    <div class="footer_links_container">
      <?php
      $args = array(
        'theme_location' => 'footerNav',
        'depth' => 0,
        'container'	=> false,
        'fallback_cb' => false,
        'menu_class' => 'footer_navBar',
      );
      wp_nav_menu($args);
      ?>

      <?php include 'inc/socialmedia.php'; ?>
    </div>

    <form class="form contact_form" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="POST">
      <input type="hidden" name="action" value="lt_form_handler">
      <input type="hidden" name="link" value="<?php echo home_url( $wp->request ); ?>">
      <input type="text" name="a00" value="" placeholder="jeje" hidden>
      <h3 class="form_title">Contáctanos</h3>
      <label for="name">Nombre</label>
      <input type="text" id="name" name="text">
      <label for="email">Email</label>
      <input type="email" id="email" name="mail">
      <label for="comment">Comentario</label>
      <textarea id="comment" name="a03"></textarea>
      <input class="btn contact_btn" type="submit" name="a04" value="ENVIAR">
    </form>


    <p class="copyright">© Copyright 2019 - Todos los derechos reservados</p>


  </footer>



  <sign class="signature">
    <p>&#60;&#47;&#62; width ❤️ by <a href="https://lattedev.com/" target="_blank" class="latteLink">Latte</a></p>
  </sign>
  <?php wp_footer(); ?>
</body>
</html>
