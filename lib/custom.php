<?php
/**
 * Custom functions
 */

add_action( 'init', 'cmb_initialize_cmb_meta_boxes', 9999 );
/**
 * Initialize the metabox class.
 */
function cmb_initialize_cmb_meta_boxes() {

	if ( ! class_exists( 'cmb_Meta_Box' ) )
		require_once 'cmb/init.php';

}

add_filter( 'cmb_meta_boxes', 'cmb_metadata_metaboxes' );

function cmb_metadata_metaboxes( array $meta_boxes ) {

  // Start with an underscore to hide fields from custom fields list
  $prefix = '_meta_';

  $meta_boxes[] = array(
    'id'         => 'metadata',
    'title'      => 'Kiegészítő meta adatok',
    'pages'      => array( 'page', 'post' ), // Post type
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true, // Show field names on the left
    'fields'     => array(
      
      // array(
      //   'name' => 'Test Date Picker',
      //   'desc' => 'field description (optional)',
      //   'id'   => $prefix . 'test_textdate',
      //   'type' => 'text_date',
      // ),
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


      array(
        'name'    => 'Test wysiwyg',
        'desc'    => 'field description (optional)',
        'id'      => $prefix . 'test_wysiwyg',
        'type'    => 'wysiwyg',
        'options' => array( 'textarea_rows' => 5, ),
      ),
      array(
        'name' => 'Beágyazott videó/média',
        'desc' => 'Enter a youtube, twitter, or instagram URL. Supports services listed at <a href="http://codex.wordpress.org/Embeds">http://codex.wordpress.org/Embeds</a>.',
        'id'   => $prefix . 'test_embed',
        'type' => 'oembed',
      ),
    ),
  );


  return $meta_boxes;
}

add_action( 'init', 'cmb_initialize_cmb_meta_boxes', 9999 );