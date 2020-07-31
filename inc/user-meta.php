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
        <tr>
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
        </tr>
        
        <tr>
            <th>
                <label for="lt_text">Texto</label>
            </th>
            <td>
                <input type="text"
                    class="regular-text ltr"
                    id="lt_text"
                    name="lt_text"
                    value="<?= esc_attr( get_user_meta( $user->ID, 'lt_text', true ) ) ?>"
                    title="Enter some text."
                    required>
                <p class="description">
                    Please enter your text.
                </p>
            </td>
        </tr>
        
        <tr>
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
        </tr>
        
        <tr>
            <th>
                <label for="lt_checkbox">Checkbox</label>
            </th>
            <td>
                <input type="checkbox"
                    class="regular-text ltr"
                    id="lt_checkbox"
                    name="lt_checkbox"
                    title="Enter some checkbox."
                    <?php if ( get_user_meta( $user->ID, 'lt_checkbox', true ) ) { echo "checked"; } ?>
                    required>
                <p class="description">
                    Please enter your checkbox., <?= esc_attr( get_user_meta( $user->ID, 'lt_checkbox', true ) ) ?>
                </p>
            </td>
        </tr>
        
        <tr>
            <th>
                <label for="lt_select">Select</label>
            </th>
            <td>

                
                <select name="lt_select" id="lt_select">
                    <option value="option_1" <?php if ( get_user_meta( $user->ID, 'lt_select', true ) == "option_1" ) { echo "selected"; } ?>>option_1</option>
                    <option value="option_2" <?php if ( get_user_meta( $user->ID, 'lt_select', true ) == "option_2" ) { echo "selected"; } ?>>option_2</option>
                    <option value="option_3" <?php if ( get_user_meta( $user->ID, 'lt_select', true ) == "option_3" ) { echo "selected"; } ?>>option_3</option>
                    <option value="option_4" <?php if ( get_user_meta( $user->ID, 'lt_select', true ) == "option_4" ) { echo "selected"; } ?>>option_4</option>
                </select>


                <p class="description">
                    Please enter select an option. Current option: <?php echo get_user_meta( $user->ID, 'lt_select', true ); ?>
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
        'lt_date'    => $_POST['lt_date'],
        'lt_text'    => $_POST['lt_text'],
        'lt_number'  => $_POST['lt_number'],
        'lt_select'  => $_POST['lt_select'],
        'lt_checkbox'=> $_POST['lt_checkbox'],
    );

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