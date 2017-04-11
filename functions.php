<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/assets.php',    // Scripts and stylesheets
  'lib/extras.php',    // Custom functions
  'lib/setup.php',     // Theme setup
  'lib/titles.php',    // Page titles
  'lib/wrapper.php',   // Theme wrapper class
  'lib/customizer.php' // Theme customizer
];

// Register Custom Navigation Walker

require_once('wp_bootstrap_navwalker.php');

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'sage-8.4.2' ),
) );

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);

add_action( 'cmb2_admin_init', 'cmb2_sample_metaboxes' );
/**
 * Define the metabox and field configurations.
 */
function cmb2_sample_metaboxes() {

    // Start with an underscore to hide fields from custom fields list

    /**
     * Initiate the metabox general across website
     */
    $cmb_general = new_cmb2_box( array(
        'id'            => 'general_metabox',
        'title'         => __( 'General Metabox', 'cmb2' ),
        'object_types'  => array( 'page', ), // Post type
        'show_on'      => array( 'key' => 'page-template', 'value' => array('page-home.php', 'page-prices-single.php') ),
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true // Show field names on the left
    ) );
    // Company Phone
    $cmb_general->add_field( array(
        'name'       => __( 'Телефон салону' ),
        'default'    => '+38 (050) 693 1007',
        'id'         => 'company_phone',
        'type'       => 'text',
    ) );
    // Company Working Hours
    $cmb_general->add_field( array(
        'name'       => __( 'Графік роботи' ),
        'default'    => 'ПН-НД: 10:00 — 21:00',
        'id'         => 'work_hours',
        'type'       => 'text',
    ) );

    /**
     * Initiate the metabox for Price (Block 1) page
     */
    $cmb_price_1 = new_cmb2_box( array(
        'id'            => 'price_1_metabox',
        'title'         => __( 'Блок 1', 'cmb2' ),
        'object_types'  => array( 'page', ), // Post type
        'show_on'      => array( 'key' => 'page-template', 'value' => array('page-prices.php', 'page-prices-single.php') ),
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    ) );

    $cmb_price_1->add_field( array(
        'name'       => __( 'Заголовок' ),
        'default'    => '',
        'id'         => 'title_h1',
        'type'       => 'text',
    ) );

    $cmb_price_1->add_field( array(
        'name'       => __( 'Підзаголовок' ),
        'default'    => '',
        'id'         => 'title_h3_1',
        'type'       => 'text',
    ) );

    $group_field_id = $cmb_price_1->add_field( array(
        'id'          => 'repeat_group_price_1',
        'type'        => 'group',
        'description' => __( 'Generates reusable form entries', 'cmb2' ),
        // 'repeatable'  => false, // use false if you want non-repeatable group
        'options'     => array(
            'group_title'   => __( 'Entry {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
            'add_button'    => __( 'Add Another Entry', 'cmb2' ),
            'remove_button' => __( 'Remove Entry', 'cmb2' ),
            'sortable'      => true, // beta
            // 'closed'     => true, // true to have the groups closed by default
        ),
    ) );

// Id's for group's fields only need to be unique for the group. Prefix is not needed.
    $cmb_price_1->add_group_field( $group_field_id, array(
        'name' => 'Послуга',
        'id'   => 'title1',
        'type' => 'text',
    ) );

    $cmb_price_1->add_group_field( $group_field_id, array(
        'name' => 'Ціна',
        'id'   => 'price1',
        'type' => 'text',
    ) );

    /**
     * Initiate the metabox for Price (Block 2) page
     */
    $cmb_price_2 = new_cmb2_box( array(
        'id'            => 'price_2_metabox',
        'title'         => __( 'Блок 2', 'cmb2' ),
        'object_types'  => array( 'page', ), // Post type
        'show_on'      => array( 'key' => 'page-template', 'value' => 'page-prices.php' ),
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    ) );

    $cmb_price_2->add_field( array(
        'name'       => __( 'Підзаголовок' ),
        'default'    => '',
        'id'         => 'title_h3_2',
        'type'       => 'text',
    ) );

    $group_field_id = $cmb_price_2->add_field( array(
        'id'          => 'repeat_group_price_2',
        'type'        => 'group',
        'description' => __( 'Generates reusable form entries', 'cmb2' ),
        // 'repeatable'  => false, // use false if you want non-repeatable group
        'options'     => array(
            'group_title'   => __( 'Entry {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
            'add_button'    => __( 'Add Another Entry', 'cmb2' ),
            'remove_button' => __( 'Remove Entry', 'cmb2' ),
            'sortable'      => true, // beta
            // 'closed'     => true, // true to have the groups closed by default
        ),
    ) );

// Id's for group's fields only need to be unique for the group. Prefix is not needed.
    $cmb_price_2->add_group_field( $group_field_id, array(
        'name' => 'Послуга',
        'id'   => 'title2',
        'type' => 'text',
    ) );

    $cmb_price_2->add_group_field( $group_field_id, array(
        'name' => 'Ціна',
        'id'   => 'price2',
        'type' => 'text',
    ) );

    /**
     * Initiate the metabox for Price (Block 3) page
     */
    $cmb_price_3 = new_cmb2_box( array(
        'id'            => 'price_3_metabox',
        'title'         => __( 'Блок 3', 'cmb2' ),
        'object_types'  => array( 'page', ), // Post type
        'show_on'      => array( 'key' => 'page-template', 'value' => 'page-prices.php' ),
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    ) );

    $cmb_price_3->add_field( array(
        'name'       => __( 'Підзаголовок' ),
        'default'    => '',
        'id'         => 'title_h3_3',
        'type'       => 'text',
    ) );

    $group_field_id = $cmb_price_3->add_field( array(
        'id'          => 'repeat_group_price_3',
        'type'        => 'group',
        'description' => __( 'Generates reusable form entries', 'cmb2' ),
        // 'repeatable'  => false, // use false if you want non-repeatable group
        'options'     => array(
            'group_title'   => __( 'Entry {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
            'add_button'    => __( 'Add Another Entry', 'cmb2' ),
            'remove_button' => __( 'Remove Entry', 'cmb2' ),
            'sortable'      => true, // beta
            // 'closed'     => true, // true to have the groups closed by default
        ),
    ) );

// Id's for group's fields only need to be unique for the group. Prefix is not needed.
    $cmb_price_3->add_group_field( $group_field_id, array(
        'name' => 'Послуга',
        'id'   => 'title3',
        'type' => 'text',
    ) );

    $cmb_price_3->add_group_field( $group_field_id, array(
        'name' => 'Ціна',
        'id'   => 'price3',
        'type' => 'text',
    ) );

}




