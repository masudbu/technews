<?php
if(file_exists(get_template_directory().'/inc/enqueue.php')){
	require_once(get_template_directory().'/inc/enqueue.php');
}
if(file_exists(get_template_directory().'/inc/class-wp-bootstrap-navwalker.php')){

	require_once(get_template_directory().'/inc/class-wp-bootstrap-navwalker.php');
}
if(file_exists(get_template_directory().'/inc/custom-widget.php')){

	require_once(get_template_directory().'/inc/custom-widget.php');
}
if(file_exists(get_template_directory().'/inc/theme_setup.php')){

	require_once(get_template_directory().'/inc/theme_setup.php');
}
if(file_exists(get_template_directory().'/inc/view_count.php')){

	require_once(get_template_directory().'/inc/view_count.php');
}
if(file_exists(get_template_directory().'/codestar/cs-framework.php')){

	require_once(get_template_directory().'/codestar/cs-framework.php');
}
if(file_exists(get_template_directory().'/inc/category_functions.php')){

	require_once(get_template_directory().'/inc/category_functions.php');
}

	