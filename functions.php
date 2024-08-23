<?php
function get_group_by_name($group_name): array
{
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

function getImageFiles($directory) {
    // Define an array of allowed image file extensions
    $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif', 'bmp', 'webp'];

    // Ensure the directory exists
    if (!is_dir($directory)) {
        error_log("Directory not found: " . $directory); // Log error to debug
        return []; // Return an empty array if the directory does not exist
    }

    // List all files and directories in the specified directory
    $files = scandir($directory);

    // Initialize an array to hold image files
    $imageFiles = [];

    // Iterate over the files and filter out the images
    foreach ($files as $file) {
        // Skip the special directories '.' and '..'
        if ($file !== '.' && $file !== '..') {
            // Get the file extension
            $fileExtension = strtolower(pathinfo($file, PATHINFO_EXTENSION));

            // Check if the file is an image
            if (in_array($fileExtension, $allowedExtensions)) {
                $imageFiles[] = $file;
            }
        }
    }

    return $imageFiles;
}

function addPrefixToArray($array, $prefix) {
    // Ensure the input is an array and the prefix is a string
    if (!is_array($array) || !is_string($prefix)) {
        return []; // Return an empty array if the input is invalid
    }

    // Use array_map to apply the prefix to each element
    return array_map(function($item) use ($prefix) {
        return $prefix . $item;
    }, $array);
}