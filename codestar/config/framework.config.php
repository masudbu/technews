<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$settings           = array(
  'menu_title'      => 'Technews Options',
  'menu_type'       => 'menu', // menu, submenu, options, theme, etc.
  'menu_slug'       => 'cs-framework',
  'ajax_save'       => false,
  'show_reset_all'  => false,
  'framework_title' => 'Technews <small>by HM MASUD</small>',
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options        = array();

// ----------------------------------------
// a option section for options overview  -
// ----------------------------------------
$options[]      = array(
  'name'        => 'header',
  'title'       => 'Header Settings',
  'icon'        => 'fa fa-star',

  // begin: fields
  'fields'      => array(


    array(
      'id'      => 'site-favicon',
      'type'    => 'image',
      'title'   => 'Favicon Image',
      'help'    => 'This option field is useful. You will love it!',
    ),

   array(
      'id'      => 'logo',
      'type'    => 'image',
      'title'   => 'Header Logo',
      'help'    => 'This option field is useful. You will love it!',
    ),

    array(
      'id'      => 'footer_logo',
      'type'    => 'image',
      'title'   => 'Footer Logo',
      'help'    => 'This option field is useful. You will love it!',
    ),

    array(
      'id'      => 'breaking_post_number',
      'type'    => 'number',
      'title'   => 'Number of posts to show for breaking',
      'help'    => 'This option field is useful. You will love it!',
    ),
  )
);
//custom footer section for theme options


$options[]      = array(
  'name'        => 'footer',
  'title'       => 'Footer Settings',
  'icon'        => 'fa fa-star',

  // begin: fields
  'fields'      => array(
       array(
          'id'       => 'wysiwyg_1',
          'type'     => 'wysiwyg',
          'title'    => 'About',
          'settings' => array(
            'textarea_rows' => 5,
            'tinymce'       => false,
            'media_buttons' => false,
          )
        ),

       array(
          'id'       => 'wysiwyg_2',
          'type'     => 'wysiwyg',
          'title'    => 'Editor Info',
          'settings' => array(
            'textarea_rows' => 5,
            'tinymce'       => false,
            'media_buttons' => false,
          )
        ),
  )
);

/*$options[]      = array(
  'name'        => 'gallery',
  'title'       => 'Photo Gallery',
  'icon'        => 'fa fa-star',
    // begin: fields
  'fields'      => array(
array(
  'id'              => 'unique_option_901',
  'type'            => 'group',
  'title'           => 'Group Field',
  'button_title'    => 'Add New',
  'accordion_title' => 'Add New Field',
  'fields'          => array(
    array(
      'id'    => 'photo_title',
      'type'  => 'text',
      'title' => 'Photo Title',
    ),
    array(
      'id'        => 'image_2',
      'type'      => 'image',
      'title'     => 'Image',
      'add_title' => 'Gallery Photo',
    ),
  )
)
),
);*/
//end  of footer theme option

//Social Networking section theme options

  $options[]      = array(
  'name'        => 'social',
  'title'       => 'Social Networking',
  'icon'        => 'fa fa-star',

  // begin: fields
  'fields'      => array(
   
    array(
      'id'      => 'fb_link',
      'type'    => 'text',
      'title'   => 'Facebook Link',
      'attributes' => array(

              'placeholder'=>'Enter The URL',
          )
    ),


    array(
      'id'      => 'tw-link',
      'type'    => 'text',
      'title'   => 'Twitter Link',
      'attributes' => array(

              'placeholder'=>'Enter The URL',
          )
    ),

    array(
      'id'      => 'gp-link',
      'type'    => 'text',
      'title'   => 'Google+ URL',
      'attributes' => array(

              'placeholder'=>'Enter The URL',
          )
    ),

    array(
      'id'      => 'linkedin-link',
      'type'    => 'text',
      'title'   => 'LinkedIn URL',
      'attributes' => array(

              'placeholder'=>'Enter The URL',
          )
    ),
    array(
      'id'      => 'youtube-link',
      'type'    => 'text',
      'title'   => 'YouTube URL',
      'attributes' => array(

              'placeholder'=>'Enter The URL',
          )
    ),
  )

);


  $options[]      = array(
  'name'        => 'sidebar',
  'title'       => 'Sidebar Content',
  'icon'        => 'fa fa-star',

  // begin: fields
  'fields'      => array(
    
    array(
      'id'      => 'facebook_page_link',
      'type'    => 'text',
      'title'   => 'Facebook Page Link',
      'attributes' => array(

              'placeholder'=>'Enter The URL',
          )
    ),
  ),
);

//Home page category settings

$options[]      = array(
  'name'        => 'homepageSetting',
  'title'       => 'Home Category',
  'icon'        => 'fa fa-star',

    // begin: fields
    'fields'      => array(
		
	array(
      'id'             => 'home_cat_name_breaking',
      'type'           => 'select',
      'title'          => 'ব্রেকিং',
      'options'        => 'categories',
      'default_option' => 'Select a category',
      'class'   => 'chosen',
      ),
		
	array(
      'id'             => 'home_cat_name_leadnews',
      'type'           => 'select',
      'title'          => 'লিড নিউজ',
      'options'        => 'categories',
      'default_option' => 'Select a category',
      'class'   => 'chosen',
      ),
		
		

      array(
      'id'             => 'home_cat_name_national',
      'type'           => 'select',
      'title'          => 'National Category',
      'options'        => 'categories',
      'default_option' => 'Select a category',
      'class'   => 'chosen',
      ),
		
	 array(
      'id'             => 'home_cat_name_politics',
      'type'           => 'select',
      'title'          => 'Political Category',
      'options'        => 'categories',
      'default_option' => 'Select a category',
      'class'   => 'chosen',
      ),
		
      array(
      'id'             => 'home_cat_name_all_bangla',
      'type'           => 'select',
      'title'          => ' সারা বাংলা Category',
      'options'        => 'categories',
      'default_option' => 'Select a category',
      'class'   => 'chosen',
      ),

      array(
      'id'             => 'home_cat_name_international',
      'type'           => 'select',
      'title'          => 'International Category',
      'options'        => 'categories',
      'default_option' => 'Select a category',
      'class'   => 'chosen',
      ),

	array(
      'id'             => 'home_cat_name_campus',
      'type'           => 'select',
      'title'          => 'Campus Category',
      'options'        => 'categories',
      'default_option' => 'Select a category',
      'class'   => 'chosen',
      ),
     

      array(
      'id'             => 'home_cat_name_entertainment',
      'type'           => 'select',
      'title'          => 'Entertainment Category',
      'options'        => 'categories',
      'default_option' => 'Select a category',
      'class'   => 'chosen',
      ),

      array(
      'id'             => 'home_cat_name_sports',
      'type'           => 'select',
      'title'          => 'Sports Category',
      'options'        => 'categories',
      'default_option' => 'Select a category',
      'class'   => 'chosen',
      ),
		
	array(
      'id'             => 'home_cat_name_special',
      'type'           => 'select',
      'title'          => 'Special Category',
      'options'        => 'categories',
      'default_option' => 'Select a category',
      'class'   => 'chosen',
      ),
     
	array(
      'id'             => 'home_cat_name_religion',
      'type'           => 'select',
      'title'          => 'Religion Category',
      'options'        => 'categories',
      'default_option' => 'Select a category',
      'class'   => 'chosen',
      ),
		
	array(
      'id'             => 'home_cat_name_economics',
      'type'           => 'select',
      'title'          => 'Economics Category',
      'options'        => 'categories',
      'default_option' => 'Select a category',
      'class'   => 'chosen',
      ),

      array(
      'id'             => 'home_cat_name_technology',
      'type'           => 'select',
      'title'          => 'Technology Category',
      'options'        => 'categories',
      'default_option' => 'Select a category',
      'class'   => 'chosen',
      ),
		
	

      array(
      'id'             => 'home_cat_name_education',
      'type'           => 'select',
      'title'          => 'Education Category',
      'options'        => 'categories',
      'default_option' => 'Select a category',
      'class'   => 'chosen',
      ),

      array(
      'id'             => 'home_cat_name_crime',
      'type'           => 'select',
      'title'          => 'Crime Category',
      'options'        => 'categories',
      'default_option' => 'Select a category',
      'class'   => 'chosen',
      ),

      array(
      'id'             => 'home_cat_name_helth',
      'type'           => 'select',
      'title'          => 'Helth Category',
      'options'        => 'categories',
      'default_option' => 'Select a category',
      'class'   => 'chosen',
      ),

      

  )

);


CSFramework::instance( $settings, $options );
