<?php get_header(); ?>


<form class="sumate_form" action="">
    <h1>SUMATE</h1>

    <div>
        <label for="sumate_name">Nombre</label>
        <input type="text" id="sumate_name">
    </div>

    <div>
        <label for="sumate_last">Apellido</label>
        <input type="text" id="sumate_last">
    </div>

    <div>
        <label for="sumate_dni">DNI / NIE</label>
        <input type="text" id="sumate_dni">
    </div>

    <div>
        <label for="sumate_mail">E-mail</label>
        <input type="text" id="sumate_mail">
    </div>

    <div>
        <label for="sumate_telefono">Telefono</label>
        <input type="text" id="sumate_telefono">
    </div>

    <div>
        <label for="sumate_ciudad">ciudad</label>
        <input type="text" id="sumate_ciudad">
    </div>

    <div>
        <label for="sumate_codigo_postal">codigo postal</label>
        <input type="text" id="sumate_codigo_postal">
    </div>

    <div>
        <label for="sumate_domicilio">Domicilio</label>
        <input type="text" id="sumate_domicilio">
    </div>

    <div>
        <p>Sumarme como</p>
        <label for="sumate_tipo_socio">Socio</label>
        <input type="checkbox" id="sumate_tipo_socio">
        <label for="sumate_tipo_voluntario">Voluntario</label>
        <input type="checkbox" id="sumate_tipo_voluntario">
    </div>

    <div>
        <label for="sumate_cantidad">Donar</label>
        <select name="sumate_cantidad" id="sumate_cantidad">
            <option value="10">Cuota 10 euros</option>
            <option value="20">Cuota 20 euros</option>
            <option value="otro">Otra cantidad</option>
        </select>
    </div>

    <div>
        <label for="sumate_dia_pago">Dia de pago</label>
        <select name="sumate_dia_pago" id="sumate_dia_pago">
            <option value="05">El 05 de cada mes</option>
            <option value="10">El 10 de cada mes</option>
            <option value="15">El 15 de cada mes</option>
        </select>
    </div>

    <div>
        <label for="sumate_cuenta_bancaria">Cuenta bancaria</label>
        <input type="text" id="sumate_cuenta_bancaria">
    </div>

    <div>
        <label for="sumate_departamento">Elige</label>
        <select name="sumate_departamento" id="sumate_departamento">
            <option value="d_ela">Departamento ELA</option>
            <option value="i_ela">Investigacion ELA</option>
            <option value="i_vih">Investigacion VIH</option>
            <option value="i_nma">Investigacion Niños mariposa</option>
            <option value="e_prp">Eleccion propia</option>
        </select>
    </div>

    <div>
        <label for="sumate_nota">Nota</label>
        <textarea type="text" id="sumate_nota"></textarea>
    </div>
</form>

<?php get_footer(); ?>
