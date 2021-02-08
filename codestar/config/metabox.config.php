<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// METABOX OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options      = array();


// -----------------------------------------
// Post Metabox Options                    -
// -----------------------------------------
$options[]    = array(
  'id'        => '_custom_post_options_video',
  'title'     => 'Custom Post Options',
  'post_type' => 'post',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(

  /*  array(
      'name'   => 'post_video_optional',
      'fields' => array(
          
          
        array(
          'id'    => 'reporter_name',
          'type'  => 'text',
          'title' => 'Reporter Name',
          'attributes' => array(

              'placeholder'=>'Enter reporter name',
          )
        ),

        array(
          'id'    => 'post_video',
          'type'  => 'text',
          'title' => 'Post Video URL',
          'attributes' => array(

              'placeholder'=>'Enter Your Video URL',
          )
        ),

        array(
          'id'    => 'short_title',
          'type'  => 'text',
          'title' => 'Short Title',
          'attributes' => array(

              'placeholder'=>'Enter Your Short Title',
          )
        ),
		  

		  
      ),
    ),*/

  ),
);


CSFramework_Metabox::instance( $options );
