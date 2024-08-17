<?php
function get_group_by_name($group_name) {
    // Access the global $wpdb object
    global $wpdb;

    // Define the table name, using the WordPress table prefix
    $table_name = $wpdb->prefix . "posts";

    // Prepare the SQL query safely
    $group_key = $wpdb->get_var($wpdb->prepare(
        "SELECT post_name FROM $table_name WHERE post_title = %s AND post_type = %s",
        $group_name, 'acf-field-group'
    ));

    $field_values = array();

    $fields = acf_get_fields( $group_key );

    foreach ( $fields as $field ) {
        $field_value = get_field( $field['name'] );

        if ( ! empty( $field_value ) ) {
            $field_values[ $field['name'] ] = $field_value;
        } else {
            $field_values[ $field['name'] ] = 'no value';
        }
    }

    return $field_values;
}
