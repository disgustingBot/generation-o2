<?php get_header(); ?>


<form class="sumate_form" method="POST" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>">
    <input type="hidden" name="action" value="lt_sumate">
    <input type="hidden" name="link" value="<?php echo home_url( $wp->request ); ?>">
    <h1>SÚMATE!</h1>

    <div class="sumate_imp">
        <label class="sumate_label" for="sumate_name">Nombre</label>
        <input class="sumate_input" type="text" name="nombre" id="sumate_name">
    </div>

    <div class="sumate_imp">
        <label class="sumate_label" for="sumate_last">Apellido</label>
        <input class="sumate_input" type="text" name="apellido" id="sumate_last">
    </div>

    <div class="sumate_imp">
        <label class="sumate_label" for="sumate_dni">DNI / NIE</label>
        <input class="sumate_input" type="text" name="dni" id="sumate_dni">
    </div>

    <div class="sumate_imp">
        <label class="sumate_label" for="sumate_mail">E-mail</label>
        <input class="sumate_input" type="text" name="email" id="sumate_mail">
    </div>

    <div class="sumate_imp">
        <label class="sumate_label" for="sumate_telefono">Telefono</label>
        <input class="sumate_input" type="text" name="telefono" id="sumate_telefono">
    </div>

    <div class="sumate_imp">
        <label class="sumate_label" for="sumate_ciudad">ciudad</label>
        <input class="sumate_input" type="text" name="ciudad" id="sumate_ciudad">
    </div>

    <div class="sumate_imp">
        <label class="sumate_label" for="sumate_codigo_postal">codigo postal</label>
        <input class="sumate_input" type="text" name="codigo_postal" id="sumate_codigo_postal">
    </div>

    <div class="sumate_imp">
        <label class="sumate_label" for="sumate_domicilio">Domicilio</label>
        <input class="sumate_input" type="text" name="domicilio" id="sumate_domicilio">
    </div>

    <div>
        <p>Sumarme como</p>
        <label for="sumate_tipo_socio">Socio</label>
        <input type="checkbox" id="sumate_tipo_socio" name="socio">
        <label for="sumate_tipo_voluntario">Voluntario</label>
        <input type="checkbox" id="sumate_tipo_voluntario" name="voluntario">
    </div>

    <div>
        <label for="sumate_cantidad">Donar</label>
        <select name="sumate_cantidad" id="sumate_cantidad" name="cantidad">
            <option value="10">Cuota 10 euros</option>
            <option value="20">Cuota 20 euros</option>
            <option value="otro">Otra cantidad</option>
        </select>
    </div>

    <div>
        <label for="sumate_dia_pago">Dia de pago</label>
        <select name="sumate_dia_pago" id="sumate_dia_pago" name="dia_de_pago">
            <option value="05">El 05 de cada mes</option>
            <option value="10">El 10 de cada mes</option>
            <option value="15">El 15 de cada mes</option>
        </select>
    </div>

    <div class="sumate_imp">
        <label class="sumate_label" for="sumate_cuenta_bancaria">Cuenta bancaria</label>
        <input class="sumate_input" type="text" id="sumate_cuenta_bancaria" name="cuenta">
    </div>

    <div>
        <label for="sumate_departamento">Elige</label>
        <select name="sumate_departamento" id="sumate_departamento" name="departamento">
            <option value="d_ela">Departamento ELA</option>
            <option value="i_ela">Investigacion ELA</option>
            <option value="i_vih">Investigacion VIH</option>
            <option value="i_nma">Investigacion Niños mariposa</option>
            <option value="e_prp">Eleccion propia</option>
        </select>
    </div>

    <div>
        <label for="sumate_nota">Nota</label>
        <textarea type="text" id="sumate_nota" name="nota"></textarea>
    </div>

    <button type="submit">Sumarme</button>
</form>

<?php get_footer(); ?>
