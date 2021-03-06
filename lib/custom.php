<?php
/**
 * Custom functions
 */


define('ICL_DONT_LOAD_NAVIGATION_CSS', TRUE);
define('ICL_DONT_LOAD_LANGUAGE_SELECTOR_CSS', TRUE);
define('ICL_DONT_LOAD_LANGUAGES_JS', TRUE);
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

/************ MetaBoxes **********/

if ( file_exists(  __DIR__ .'/CMB2/init.php' ) ) { require_once  __DIR__ .'/CMB2/init.php';};




add_filter( 'cmb2_meta_boxes', 'mo_metaboxes' );

function mo_metaboxes( array $meta_boxes ) {

  // Start with an underscore to hide fields from custom fields list
  $prefix = '_meta_';

  $meta_boxes['kezeles'] = array(
    'id'         => 'kezeles_meta',
    'title'      => 'Kezelés oldalsáv',
    'object_types'  => array( 'page'), // Post type
    'show_on'      => array( 'key' => 'page-template', 'value' => 'template-kezeles.php' ),
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true, // Show field names on the left
    'fields'     => array(

      array(
        'name' => 'Intro, bevezető',
        'desc' => 'Rövid frappáns kivonat, vagy bevezető (kötelező).',
        'id'   => $prefix . 'intro',
        'type' => 'textarea_small',
      ),

      array(
        'name' => 'Ügyfél mondta',
        'desc' => 'Kapcsolódó ügyfél visszajelzés',
        'id'   => $prefix . 'ugyfel_mondta',
        'type' => 'textarea_small',
      ),
      array(
        'name' => 'Ügyfél neve',
        'id'   => $prefix . 'ugyfel_nev',
        'type' => 'text_medium',
      ),


    ),
  );


  $meta_boxes['kezelesgyujto'] = array(
    'id'         => 'kezelesgyujto_meta',
    'title'      => 'Kezelés oldalsáv',
    'object_types'  => array( 'page'), // Post type
    'show_on'      => array( 'key' => 'page-template', 'value' => 'template-kezelesgyujto.php' ),
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true, // Show field names on the left
    'fields'     => array(

      array(
        'name' => 'Intro, bevezető',
        'desc' => 'Rövid frappáns kivonat, vagy bevezető (kötelező).',
        'id'   => $prefix . 'intro',
        'type' => 'textarea_small',
      ),
    ),
  );

  $meta_boxes['akcio'] = array(
      'id'         => 'akcio_meta',
      'title'      => 'Akció esetén kitöltendő',
      'object_types'  => array( 'post'),
      'context'    => 'normal',
      'priority'   => 'high',
      'show_names' => true, // Show field names on the left
      'fields'     => array(

        array(
          'name' => 'Intro, bevezető',
          'desc' => 'Rövid frappáns kivonat, vagy bevezető (kötelező).',
          'id'   => $prefix . 'intro',
          'type' => 'textarea_small',
        ),

        array(
          'name' => 'Akció csali',
          'desc' => 'Akció esetén az nyereség kiemelésére. (pl.: megtakarítás 3000 Ft)',
          'id'   => $prefix . 'csali',
          'type' => 'text_medium',
        ),

        array(
          'name' => 'Akció kezdete',
          'desc' => 'Csak akció esetén kitöltendő',
          'id'   => $prefix . 'akcio_kezdet',
          'type' => 'text_date_timestamp',
        ),

        array(
          'name' => 'Akció vége',
          'desc' => 'Csak akció esetén kitöltendő',
          'id'   => $prefix . 'akcio_veg',
          'type' => 'text_date_timestamp',
        ),

      ),
    );

  $meta_boxes['arak'] = array(
    'id'         => 'arak_metadata',
    'title'      => 'Árlista',
    'object_types'     => array( 'page'),
    'show_on'      => array( 'key' => 'page-template', 'value' => 'template-arlista.php' ),
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true, // Show field names on the left
    'fields'     => array(
        array(
          'id'          => 'kezelescsoport',
          'type'        => 'group',
          'description' => __( 'Ismételhető kezeléscsoportok', 'cmb' ),
          'options'     => array(
            'group_title'   => __( 'Nagy kezeléscsoport {#}', 'cmb' ),
            'add_button'    => __( 'Új kezeléscsoport', 'cmb' ),
            'remove_button' => __( 'Csoport törlése', 'cmb' ),
            'sortable'      => true, // beta
          ),
          'fields' => array (
            array(
              'name' => 'Csoport címe',
              'id'   => 'title',
              'type' => 'text',
            ),
            array(
              'name' => 'Cím url',
              'id'   => 'title_url',
              'type' => 'text_url',
            ),
            array(
              'name' => 'Kezelések árak és leírás',
              'description' => __( 'Kezelés neve ára és leírása ";"-el elválasztva pl:--> Teljes szőrtelenítés;12300;fertőtlenítés, maszk, kézmasszázs, masszázs, visszavezetés', 'cmb' ),
              'id'   => 'kezelesesar',
              'type' => 'text',
              'repeatable' => 'true',
            ),

            array(
              'name' => 'Csoport lábléc',
              'desc' => 'Megjegyzés a csoport aljára',
              'id'   => 'footer',
              'type' => 'wysiwyg',
              'options' => array(
                'media_buttons' => false, // show insert/upload button(s)
                'textarea_rows' => get_option('default_post_edit_rows', 3), // rows="..."
                'teeny' => true, // output the minimal editor config used in Press This
              ),
            ),



          )

        ),





    ),
  );



  return $meta_boxes;
}




