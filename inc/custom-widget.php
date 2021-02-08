<?php
//Register sidebar for widget
function sidebar_register_widget(){

	register_sidebar(
		array(
			'name' =>'Header 1',
			'id' =>'header_widget',
			'description' =>'Header 1 Widget',
			'before_widget' =>'<div class="col-md-6">',
			'after_widget' =>'</div>',
		)
	);
	
	register_sidebar(
		array(
			'name' =>'Sidebar',
			'id' =>'sidebar_widget1',
			'description' =>'Sidebar Widget',
			'before_widget' =>'<div class="panel-body">',
			'after_widget' =>'</div>',
			'before_title'  => '<h3 class="item-header-width3">',
            'after_title'   => '</h3>',
		)
		
	);
	register_sidebar(
		array(
			'name' =>'home',
			'id' =>'sidebar_widget',
			'description' =>'Home Widget',
			'before_widget' =>'<div class="panel-body">',
			'after_widget' =>'</div>',
			'before_title'  => '<h3 class="item-header-width3">',
            'after_title'   => '</h3>',
		)
		
	);
	
}

add_action('widgets_init','sidebar_register_widget');