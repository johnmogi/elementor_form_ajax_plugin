<?php
/**
 * Plugin Name: john mogi elementor form
 * Plugin URI: https://www.johnmogi.com
 * Description: a simple plugin to hook into elementor forms, send data via a webhook and do some demo calculations.
 * Version: 1.0
 * Author: John Mogi
 * Author URI: https://www.johnmogi.com
 */


// A send custom WebHook
add_action( 'elementor_pro/forms/new_record', function( $record, $handler ) {
    //make sure its our form
    $detailsForm2 = $record->get_form_settings( 'detailsForm2' );

    // Replace MY_FORM_NAME with the name you gave your form
    if ( 'detailsForm2' !== $detailsForm2 ) {
        return;
    }?>
    <script>
    alert( '<p>Thank you for reading!</p>');
    
    </script>
    <?php
    // $raw_fields = $record->get( 'fields' );
    // $fields = [];
    // foreach ( $raw_fields as $id => $field ) {
    //     $fields[ $id ] = $field['value'];
    // }

    // // Replace HTTP://YOUR_WEBHOOK_URL with the actuall URL you want to post the form to
    // wp_remote_post( 'HTTP://YOUR_WEBHOOK_URL', [
    //     'body' => $fields,
    // ]);
}, 10, 2 );