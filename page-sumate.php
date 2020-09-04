<?php get_header(); ?>

<?php
$site = '6LeE7b8ZAAAAAJSXcqghZa6spv9aUCuaZm1k8hjh';
$scrt = '6LeE7b8ZAAAAALYT37X6JwPR0gbVFLpU7I-J-DOk';
?>

<section class="grid sumate_ATF">
  <hgroup class="headline_hgroup section_padding">
    <h2 class="hedline_title"><?php echo get_post_meta($post->ID, '1_titulo', true); ?></h2>
    <h5 class="hedline_txt"><?php echo get_post_meta($post->ID, '2_subtitulo', true); ?></h5>
  </hgroup>
  <img class="lazy" data-url="<?php echo get_the_post_thumbnail_url(); ?>" alt="Ilustración Generación o2">
</section>

<form class="form" method="POST" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>">
    <input type="hidden" name="action" value="lt_sumate">
    <input type="hidden" name="link" value="<?php echo home_url( $wp->request ); ?>">
    <h1 class="title form_title"><?php echo get_the_title() ?></h1>

    <div class="form_imp">
        <label class="form_label" for="sumate_name">Nombre</label>
        <input class="form_input" type="text" name="nombre" id="sumate_name" required>
    </div>

    <div class="form_imp">
        <label class="form_label" for="sumate_last">Apellido</label>
        <input class="form_input" type="text" name="apellido" id="sumate_last" required>
    </div>

    <div class="form_imp">
        <label class="form_label" for="sumate_dni">DNI/NIE</label>
        <input class="form_input" type="text" name="dni" id="sumate_dni" required>
    </div>

    <div class="form_imp">
        <label class="form_label" for="sumate_mail">E-mail</label>
        <input class="form_input" type="email" name="email" id="sumate_mail" required>
    </div>

    <div class="form_imp">
        <label class="form_label" for="sumate_telefono">Teléfono</label>
        <input class="form_input" type="text" name="telefono" id="sumate_telefono" required>
    </div>

    <div class="form_imp">
        <label class="form_label" for="sumate_ciudad">Ciudad de residencia</label>
        <input class="form_input" type="text" name="ciudad" id="sumate_ciudad" required>
    </div>

    <div class="form_imp">
        <label class="form_label" for="sumate_codigo_postal">Codigo postal</label>
        <input class="form_input" type="text" name="codigo_postal" id="sumate_codigo_postal" required>
    </div>

    <div class="form_imp">
        <label class="form_label" for="sumate_domicilio">Domicilio</label>
        <input class="form_input" type="text" name="domicilio" id="sumate_domicilio" required>
    </div>

    <div class="form_sumarme_como">
      <p class="form_sumarme_como_txt">Sumarme como:</p>
      <div class="form_sumarme_como_options">
        <div class="form_sumarme_como_option">
          <input class="form_sumarme_como_radio" type="radio" id="lt_socio"
          name="subscription_type" value="socio" <?php if ( get_user_meta( $user->ID, 'subscription_type', true ) == 'socio' ) { echo "checked"; } ?> required>
          <label for="lt_socio">Socio</label>
        </div>
        <div class="form_sumarme_como_option">
          <input class="form_sumarme_como_radio" type="radio" id="lt_voluntario"
          name="subscription_type" value="voluntario" <?php if ( get_user_meta( $user->ID, 'subscription_type', true ) == 'voluntario' ) { echo "checked"; } ?> required>
          <label for="lt_voluntario">Voluntario</label>
        </div>
        <div class="form_sumarme_como_option">
          <input class="form_sumarme_como_radio" type="radio" id="lt_socio_voluntario"
          name="subscription_type" value="socio_voluntario" <?php if ( get_user_meta( $user->ID, 'subscription_type', true ) == 'socio_voluntario' ) { echo "checked"; } ?> required>
          <label for="lt_socio_voluntario">Ambos</label>
        </div>
      </div>
    </div>

    <div class="form_select_container">
        <label class="form_label" for="sumate_cantidad">Donar</label>
        <select class="form_imp" id="sumate_cantidad" name="cantidad" required>
            <option value="10">Cuota 10 euros</option>
            <option value="20">Cuota 20 euros</option>
            <option value="otro">Otra cantidad</option>
        </select>
    </div>

    <div class="form_select_container">
        <label class="form_label" for="sumate_dia_pago">Dia de pago</label>
        <select class="form_imp" id="sumate_dia_pago" name="dia_de_pago" required>
            <option value="05">El 05 de cada mes</option>
            <option value="10">El 10 de cada mes</option>
            <option value="15">El 15 de cada mes</option>
        </select>
    </div>

    <div class="form_imp">
        <label class="form_label" for="sumate_cuenta_bancaria">Cuenta bancaria</label>
        <input class="form_input" type="text" id="sumate_cuenta_bancaria" name="cuenta" required>
    </div>

    <div class="form_select_container">
        <label class="form_label" for="sumate_departamento">Elige</label>
        <select class="form_imp" id="sumate_departamento" name="departamento" required>
            <option value="d_salud">Salud</option>
            <option value="d_lgbti">LGBTI+</option>
            <option value="d_bienestar">Bienestar</option>
            <option value="d_nosotras">Nosotras</option>
            <option value="d_sostenibilidad">Sostenibilidad</option>
        </select>
    </div>

    <div class="form_imp sumarme_textarea">
        <label class="form_label" for="sumate_nota">Nota</label>
        <textarea class="form_input" type="text" id="sumate_nota" name="nota"></textarea>
    </div>

    <div class="form_checkbox">
      <input type="checkbox" required>
      <p class="termsDescription">Acepto los <a href="https://generacion-o2.org/politica-privacidad/" target="_blank" style="text-decoration: underline;"> Términos y condiciones</a> de Generación o2</p>
    </div>

    <div class="g-recaptcha" data-callback="captchaVerified" data-sitekey="<?php echo $site; ?>"></div>
    <input class="recaptcha" type="text" hidden value="">

    <button class="btn buttonSend" disabled type="submit"><?php _e('sumarme', 'lt_domain'); ?></button>
</form>

<?php get_footer(); ?>
