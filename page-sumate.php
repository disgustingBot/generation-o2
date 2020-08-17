<?php get_header(); ?>

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
        <input class="form_input" type="text" name="nombre" id="sumate_name">
    </div>

    <div class="form_imp">
        <label class="form_label" for="sumate_last">Apellido</label>
        <input class="form_input" type="text" name="apellido" id="sumate_last">
    </div>

    <div class="form_imp">
        <label class="form_label" for="sumate_dni">DNI/NIE</label>
        <input class="form_input" type="text" name="dni" id="sumate_dni">
    </div>

    <div class="form_imp">
        <label class="form_label" for="sumate_mail">E-mail</label>
        <input class="form_input" type="email" name="email" id="sumate_mail">
    </div>

    <div class="form_imp">
        <label class="form_label" for="sumate_telefono">Ciudad de residencia</label>
        <input class="form_input" type="text" name="telefono" id="sumate_telefono">
    </div>

    <div class="form_imp">
        <label class="form_label" for="sumate_residencia">Ciudad de residencia</label>
        <input class="form_input" type="text" name="telefono" id="sumate_residencia">
    </div>

    <div class="form_imp">
        <label class="form_label" for="sumate_ciudad">ciudad</label>
        <input class="form_input" type="text" name="ciudad" id="sumate_ciudad">
    </div>

    <div class="form_imp">
        <label class="form_label" for="sumate_codigo_postal">codigo postal</label>
        <input class="form_input" type="number" name="codigo_postal" id="sumate_codigo_postal">
    </div>

    <div class="form_imp">
        <label class="form_label" for="sumate_domicilio">Domicilio</label>
        <input class="form_input" type="text" name="domicilio" id="sumate_domicilio">
    </div>

    <div class="form_sumarme_como">
      <p class="form_sumarme_como_txt">Sumarme como:</p>
      <div class="form_sumarme_como_options">
        <div class="form_sumarme_como_option">
          <input class="form_sumarme_como_radio" type="radio" id="lt_socio"
          name="subscription_type" value="socio" <?php if ( get_user_meta( $user->ID, 'subscription_type', true ) == 'socio' ) { echo "checked"; } ?>>
          <label for="lt_socio">Socio</label>
        </div>
        <div class="form_sumarme_como_option">
          <input class="form_sumarme_como_radio" type="radio" id="lt_voluntario"
          name="subscription_type" value="voluntario" <?php if ( get_user_meta( $user->ID, 'subscription_type', true ) == 'voluntario' ) { echo "checked"; } ?>>
          <label for="lt_voluntario">Volunario</label>
        </div>
        <div class="form_sumarme_como_option">
          <input class="form_sumarme_como_radio" type="radio" id="lt_socio_voluntario"
          name="subscription_type" value="socio_voluntario" <?php if ( get_user_meta( $user->ID, 'subscription_type', true ) == 'socio_voluntario' ) { echo "checked"; } ?>>
          <label for="lt_socio_voluntario">Ambos</label>
        </div>
      </div>
    </div>

    <div class="form_select_container">
        <label class="form_label" for="sumate_cantidad">Donar</label>
        <select class="form_imp" id="sumate_cantidad" name="cantidad">
            <option value="10">Cuota 10 euros</option>
            <option value="20">Cuota 20 euros</option>
            <option value="otro">Otra cantidad</option>
        </select>
    </div>

    <div class="form_select_container">
        <label class="form_label" for="sumate_dia_pago">Dia de pago</label>
        <select class="form_imp" id="sumate_dia_pago" name="dia_de_pago">
            <option value="05">El 05 de cada mes</option>
            <option value="10">El 10 de cada mes</option>
            <option value="15">El 15 de cada mes</option>
        </select>
    </div>

    <div class="form_imp">
        <label class="form_label" for="sumate_cuenta_bancaria">Cuenta bancaria</label>
        <input class="form_input" type="text" id="sumate_cuenta_bancaria" name="cuenta">
    </div>

    <div class="form_select_container">
        <label class="form_label" for="sumate_departamento">Elige</label>
        <select class="form_imp" id="sumate_departamento" name="departamento">
            <option value="d_ela">Departamento ELA</option>
            <option value="i_ela">Investigacion ELA</option>
            <option value="i_vih">Investigacion VIH</option>
            <option value="i_nma">Investigacion Niños mariposa</option>
            <option value="e_prp">Eleccion propia</option>
        </select>
    </div>

    <div class="form_imp sumarme_textarea">
        <label class="form_label" for="sumate_nota">Nota</label>
        <textarea class="form_input" type="text" id="sumate_nota" name="nota"></textarea>
    </div>
    <div class="form_checkbox">
      <input type="checkbox" required>
      <p class="termsDescription">Acepto los <a href="https://generacion-o2.org/politica-privacidad/" target="_blank" style="text-decoration: underline;"> terminos y condiciones</a> de Generación o2</p>
    </div>
    <div class="g-recaptcha" data-callback="captchaVerified" data-sitekey="<?php echo $site; ?>"></div>
    <input class="recaptcha" type="text" hidden value="">

    <button class="btn" type="submit">Sumarme</button>
</form>

<?php get_footer(); ?>
