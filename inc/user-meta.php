<?php



/**
 * The field on the editing screens.
 *
 * @param $user WP_User user object
 */
function wporg_usermeta_form_field_birthday( $user )
{
    ?>
    <h3>Informacion adicional</h3>
    <table class="form-table">
        <!-- <tr>
            <th>
                <label for="lt_date">Fecha</label>
            </th>
            <td>
                <input type="date"
                    class="regular-text ltr"
                    id="lt_date"
                    name="lt_date"
                    value="<?= esc_attr( get_user_meta( $user->ID, 'lt_date', true ) ) ?>"
                    title="Please use YYYY-MM-DD as the date format."
                    pattern="(19[0-9][0-9]|20[0-9][0-9])-(1[0-2]|0[1-9])-(3[01]|[21][0-9]|0[1-9])"
                    required>
                <p class="description">
                    Please enter your birthday date.
                </p>
            </td>
        </tr> -->
        
        
        <tr>
            <th>
                <label for="lt_dni">DNI / NIE</label>
            </th>
            <td>
                <input type="text"
                    class="regular-text ltr"
                    id="lt_dni"
                    name="dni"
                    value="<?= esc_attr( get_user_meta( $user->ID, 'dni', true ) ) ?>"
                    title="Ingresa el DNI o NIE."
                    required>
                <p class="description">
                    Por favor ingrese aqui el DNI o NIE del socio y/o voluntario.
                </p>
            </td>
        </tr>
        
        <tr>
            <th>
                <label for="lt_ciudad">Ciudad</label>
            </th>
            <td>
                <input type="text"
                    class="regular-text ltr"
                    id="lt_ciudad"
                    name="ciudad"
                    value="<?= esc_attr( get_user_meta( $user->ID, 'ciudad', true ) ) ?>"
                    title="Ciudad de residencia."
                    required>
                <p class="description">
                    Por favor ingrese aqui la ciudad de residencia del socio y/o voluntario.
                </p>
            </td>
        </tr>
        
        <tr>
            <th>
                <label for="lt_codigo_postal">Codigo Postal</label>
            </th>
            <td>
                <input type="text"
                    class="regular-text ltr"
                    id="lt_codigo_postal"
                    name="codigo_postal"
                    value="<?= esc_attr( get_user_meta( $user->ID, 'codigo_postal', true ) ) ?>"
                    title="Codigo Postal."
                    required>
                <p class="description">
                    Por favor ingrese aqui el codigo postal del socio y/o voluntario.
                </p>
            </td>
        </tr>
        
        <tr>
            <th>
                <label for="lt_domicilio">Domicilio</label>
            </th>
            <td>
                <input type="text"
                    class="regular-text ltr"
                    id="lt_domicilio"
                    name="domicilio"
                    value="<?= esc_attr( get_user_meta( $user->ID, 'domicilio', true ) ) ?>"
                    title="Domicilio."
                    required>
                <p class="description">
                    Por favor ingrese aqui el domicilio del socio y/o voluntario.
                </p>
            </td>
        </tr>
        
        <tr>
            <th>
                <label for="lt_cuenta">Cuenta Bancaria</label>
            </th>
            <td>
                <input type="text"
                    class="regular-text ltr"
                    id="lt_cuenta"
                    name="cuenta"
                    value="<?= esc_attr( get_user_meta( $user->ID, 'cuenta', true ) ) ?>"
                    title="Cuenta Bancaria."
                    required>
                <p class="description">
                    Por favor ingrese aqui la cuenta bancaria del socio.
                </p>
            </td>
        </tr>
        
        <tr>
            <th>
                <label for="lt_telefono">Telefono</label>
            </th>
            <td>
                <input type="text"
                    class="regular-text ltr"
                    id="lt_telefono"
                    name="telefono"
                    value="<?= esc_attr( get_user_meta( $user->ID, 'telefono', true ) ) ?>"
                    title="Telefono del socio y/o voluntario."
                    required>
                <p class="description">
                    Por favor ingrese aqui el telefono del socio y/o voluntario.
                </p>
            </td>
        </tr>
        
        <!-- <tr>
            <th>
                <label for="lt_number">Numero</label>
            </th>
            <td>
                <input type="number"
                    class="regular-text ltr"
                    id="lt_number"
                    name="lt_number"
                    value="<?= esc_attr( get_user_meta( $user->ID, 'lt_number', true ) ) ?>"
                    title="Enter some number."
                    required>
                <p class="description">
                    Please enter your number.
                </p>
            </td>
        </tr> -->
        
        <tr>
            <th>
                <label for="lt_socio">Socio</label>
            </th>
            <td>
                <input type="checkbox"
                    class="regular-text ltr"
                    id="lt_socio"
                    name="socio"
                    title="Es la parsona un socio?."
                    <?php if ( get_user_meta( $user->ID, 'socio', true ) ) { echo "checked"; } ?>
                    required>
                <p class="description">
                    Tildado si la persona se registra como socio y quiere donar.
                </p>
            </td>
        </tr>
        
        <tr>
            <th>
                <label for="lt_voluntario">Voluntario</label>
            </th>
            <td>
                <input type="checkbox"
                    class="regular-text ltr"
                    id="lt_voluntario"
                    name="voluntario"
                    title="Es la parsona un voluntario?."
                    <?php if ( get_user_meta( $user->ID, 'voluntario', true ) ) { echo "checked"; } ?>
                    required>
                <p class="description">
                    Tildado si la persona se registra como voluntario.
                </p>
            </td>
        </tr>
        
        <tr>
            <th>
                <label for="lt_cantidad">Cantidad a donar</label>
            </th>
            <td>

                
                <select name="cantidad" id="lt_cantidad">
                    <option value="10" <?php if ( get_user_meta( $user->ID, 'cantidad', true ) == "10" ) { echo "selected"; } ?>>10 euros al mes</option>
                    <option value="20" <?php if ( get_user_meta( $user->ID, 'cantidad', true ) == "20" ) { echo "selected"; } ?>>20 euros al mes</option>
                    <option value="otro" <?php if ( get_user_meta( $user->ID, 'cantidad', true ) == "otro" ) { echo "selected"; } ?>>otro</option>
                </select>


                <p class="description">
                    Por favor ingrese aqui la cantidad que el socio quiere donar.
                </p>
            </td>
        </tr>
        
        <tr>
            <th>
                <label for="lt_dia_de_pago">Dia de pago</label>
            </th>
            <td>

                
                <select name="dia_de_pago" id="lt_dia_de_pago">
                    <option value="05" <?php if ( get_user_meta( $user->ID, 'dia_de_pago', true ) == "05" ) { echo "selected"; } ?>>El 05 de cada mes</option>
                    <option value="10" <?php if ( get_user_meta( $user->ID, 'dia_de_pago', true ) == "10" ) { echo "selected"; } ?>>El 10 de cada mes</option>
                    <option value="15" <?php if ( get_user_meta( $user->ID, 'dia_de_pago', true ) == "15" ) { echo "selected"; } ?>>El 15 de cada mes</option>
                </select>


                <p class="description">
                    Por favor ingrese aqui el día del mes que el socio quiere donar.
                </p>
            </td>
        </tr>
        
        <tr>
            <th>
                <label for="lt_departamento">Departamento</label>
            </th>
            <td>

                
                <select name="departamento" id="lt_departamento">
                    <option value="d_ela" <?php if ( get_user_meta( $user->ID, 'departamento', true ) == "d_ela" ) { echo "selected"; } ?>>Departamento ELA</option>
                    <option value="i_ela" <?php if ( get_user_meta( $user->ID, 'departamento', true ) == "i_ela" ) { echo "selected"; } ?>>Investigacion ELA</option>
                    <option value="i_vih" <?php if ( get_user_meta( $user->ID, 'departamento', true ) == "i_vih" ) { echo "selected"; } ?>>Investigacion VIH</option>
                    <option value="i_nma" <?php if ( get_user_meta( $user->ID, 'departamento', true ) == "i_nma" ) { echo "selected"; } ?>>Investigacion Niños mariposa</option>
                    <option value="e_prp" <?php if ( get_user_meta( $user->ID, 'departamento', true ) == "e_prp" ) { echo "selected"; } ?>>Eleccion propia</option>
                </select>


                <p class="description">
                    Por favor ingrese aqui eel departamento para el cual el socio/voluntario quiere contribuir.
                </p>
            </td>
        </tr>
        
    </table>
    <?php
}
  
/**
 * The save action.
 *
 * @param $user_id int the ID of the current user.
 *
 * @return bool Meta ID if the key didn't exist, true on successful update, false on failure.
 */
function wporg_usermeta_form_field_birthday_update( $user_id )
{
    // check that the current user have the capability to edit the $user_id
    if ( ! current_user_can( 'edit_user', $user_id ) ) {
        return false;
    }

    $metas = array( 
        'dni'       => $_POST['dni'],
        'ciudad'    => $_POST['ciudad'],
        'codigo_postal'  => $_POST['codigo_postal'],
        'domicilio'  => $_POST['domicilio'],
        'cuenta'=> $_POST['cuenta'],
        'telefono'=> $_POST['telefono'],
        'socio'=> $_POST['socio'],
        'voluntario'=> $_POST['voluntario'],
        'cantidad'=> $_POST['cantidad'],
        'dia_de_pago'=> $_POST['dia_de_pago'],
        'departamento'=> $_POST['departamento'],
    );

    
    // update_user_meta( $user_id, 'dni', $dni );
    // update_user_meta( $user_id, 'ciudad', $ciudad );
    // update_user_meta( $user_id, 'codigo_postal', $codigo_postal );
    // update_user_meta( $user_id, 'domicilio', $domicilio );
    // update_user_meta( $user_id, 'cuenta', $cuenta );
    // update_user_meta( $user_id, 'telefono', $telefono );
    // update_user_meta( $user_id, 'socio', $socio );
    // update_user_meta( $user_id, 'voluntario', $voluntario );
    // update_user_meta( $user_id, 'cantidad', $cantidad );
    // update_user_meta( $user_id, 'dia_de_pago', $dia_de_pago );
    // update_user_meta( $user_id, 'departamento', $departamento );
    
    // update_user_meta( $user_id, 'nota', $nota );

    foreach($metas as $key => $value) {
        update_user_meta( $user_id, $key, $value );
    }
}

// Add the field to user's own profile editing screen.
add_action(
    'show_user_profile',
    'wporg_usermeta_form_field_birthday'
);

// Add the field to user profile editing screen.
add_action(
    'edit_user_profile',
    'wporg_usermeta_form_field_birthday'
);

// Add the save action to user's own profile editing screen update.
add_action(
    'personal_options_update',
    'wporg_usermeta_form_field_birthday_update'
);

// Add the save action to user profile editing screen update.
add_action(
    'edit_user_profile_update',
    'wporg_usermeta_form_field_birthday_update'
);



















































/*** Sort and Filter Users ***/
add_action('restrict_manage_users', 'filter_by_meta');

function filter_by_meta( $which )
{
    // template for filtering
    $st = '<select name="lt_select_filter_%s" style="float:none;margin-left:10px;">
        <option value="">%s</option>%s</select>';

    // generate options
    $options = '<option value="option_1">option_1</option>
        <option value="option_2">option_2</option>
        <option value="option_3">option_3</option>
        <option value="option_4">option_4</option>';

    // combine template and options
    $select = sprintf( $st, $which, __( 'Options...' ), $options );

    // output <select> and submit button
    echo $select;
    submit_button(__( 'Filter' ), null, $which, false);
}


add_filter('pre_get_users', 'filter_users_by_job_role_section');
function filter_users_by_job_role_section($query)
{
    global $pagenow;
    if ( is_admin() && $pagenow == 'users.php' ) {
    // figure out which button was clicked. The $which in filter_by_job_role()
        $top = $_GET['lt_select_filter_top'] ? $_GET['lt_select_filter_top'] : null;
        $bottom = $_GET['lt_select_filter_bottom'] ? $_GET['lt_select_filter_bottom'] : null;
        if (!empty($top) OR !empty($bottom)){
            $section = !empty($top) ? $top : $bottom;

            // change the meta query based on which option was chosen
            $meta_query = array (array (
                'key' => 'lt_select',
                'value' => $section,
                'compare' => 'LIKE'
            ));
            $query->set('meta_query', $meta_query);
        }
    }
}