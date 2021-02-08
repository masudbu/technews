<?php
//Get for single category name for heading
function get_head_cat_name($cat_name) { 
	$term = get_term($cat_name);
	return $term->name;		
}
//Get 1st category 12 posts 
function single_category_posts($category, $count){
	$newspress_args = array(
    'cat'   => $category,
	'type'            => 'post',
	'orderby'         => 'post_date',
	'order'           => 'DESC',
	'post_status'     => 'publish',
	'posts_per_page'  => $count,
	'suppress_filters' => true );
	$data='';
	$list1='';
	$list2='';
	$list3='';
	$column='';
	$counter=0;
	$subtitle=0;
	$media='';
	$newspress_query = new WP_Query($newspress_args);
	 if ($newspress_query->have_posts()) { 
		 while ( $newspress_query->have_posts()) {
			 $newspress_query->the_post();
			 $counter++;
             $imageurl = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'sidebar_img');
		$thumb_id = get_post_thumbnail_id($post->id);
		$alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);
		if( $imageurl[0] == NULL ) {
			
			$imageurl[0] = get_template_directory_uri()."/img/no-image-available.png";
		}
             
		$list1.='<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 paddingTop5">
		<div class="box-part text-center">
			<img class="rpwe-alignleft rpwe-thumb" src="'.$imageurl[0].'" />
				<div class="title">
					<h3>
						<a href="'.get_permalink().'" title="'.get_the_title().'" rel="bookmark">'.get_the_title().'</a>
					</h3>
				</div>
			</div>
		</div>';
		 }
         $data.='<section class="section">
         			<div class="box">
         				<div class="container">
         					<div class="row">
		         			<h3 class="section-title">'.get_head_cat_name($category).'</h3>
							'.$list1.'
							</div>
						</div>
					</div>
				</section>';
		
		 
	 }
 wp_reset_query();
 return $data;
}

//Get 2nd category 5 posts 
function common_category_posts($category, $count){
	$newspress_args = array(
    'cat'   => $category,
	'type'            => 'post',
	'orderby'         => 'post_date',
	'order'           => 'DESC',
	'post_status'     => 'publish',
	'posts_per_page'  => $count,
	'suppress_filters' => true );
	$data='';
	$list1='';
	$list2='';
	$list3='';
	$column='';
	$counter=0;
	$subtitle=0;
	$media='';
	$newspress_query = new WP_Query($newspress_args);
	 if ($newspress_query->have_posts()) { 
		 while ( $newspress_query->have_posts()) {
			 $newspress_query->the_post();
			 $counter++;
             $imageurl = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'sidebar_img');
		$thumb_id = get_post_thumbnail_id($post->id);
		$alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);
		if( $imageurl[0] == NULL ) {
			
			$imageurl[0] = get_template_directory_uri()."/assets/img/technews.png";
		}

		if($counter==1){
			$list1.='<div class="img-box">
						<img class="rpwe-alignleft rpwe-thumb" src="'.$imageurl[0].'" />
					</div>
					<h3>
	                   <a href="'.get_permalink().'" title="'.get_the_title().'" rel="bookmark">'.get_the_title().'</a>
	                </h3>';
		 }elseif($counter>=2 and $counter<=6){
				$imageurl = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'national_other_img');
				$thumb_id = get_post_thumbnail_id($post->id);
				$alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);
				if( $imageurl[0] == NULL ) {
					
					$imageurl[0] = get_template_directory_uri()."/assets/img/technews.png";
				}
                $list2.='<div>
                  	<div class="media-body">
                        <h4 class="media-heading">
						<a href="'.get_permalink().'" rel="bookmark">'.get_the_title().'</a>
						</h4>
					</div></div>'; 
            }
    	}
        $data.='
          	<div class="col-sm-3">
            	<div class="single-cat-height">
 					<h3 class="section-title">'.get_head_cat_name($category).'</h3>
 					<div class="single-block">
						'.$list1.'
						<div class="details">
						 
							'.$list2.'
						
						</div>
					</div>
				</div>
				<div class="allnews">
                  <a href="'.get_category_link($category).'">
                   সবখবর
                  </a>
            	</div>
			</div>';

		 
	 }
 wp_reset_query();
 return $data;
}
//get breaking news function
function scroll_posts($category, $count){
	$newspress_args = array(
    'cat'   => $category,
	'type'            => 'post',
	'orderby'         => 'post_date',
	'order'           => 'DESC',
	'post_status'     => 'publish',
	'posts_per_page'  => $count,
	'suppress_filters' => true );
	$data='';
	$list1='';
	$list2='';
	$list3='';
	$column='';
	$counter=0;
	$subtitle=0;
	$media='';
	$newspress_query = new WP_Query($newspress_args);
	 if ($newspress_query->have_posts()) { 
		 while ( $newspress_query->have_posts()) {
			 $newspress_query->the_post();
			 $counter++;
			$list1.='<i class="fa fa-desktop" ></i>&nbsp;&nbsp;<a href="'.get_permalink().'" title="'.get_the_title().'" rel="bookmark">'.get_the_title().'</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
		 }
         $data.='<div class="col-md-10">
  		  			<marquee>
						'.$list1.'
					</marquee>
				</div>';
		
		 
	 }
 wp_reset_query();
 return $data;
}
//get last 30 posts
function last_posts($count){
	$newspress_args = array(
	'type'            => 'post',
	'orderby'         => 'post_date',
	'order'           => 'DESC',
	'post_status'     => 'publish',
	'posts_per_page'  => $count,
	'suppress_filters' => true );
	$data='';
	$list1='';
	$list2='';
	$list3='';
	$column='';
	$counter=0;
	$subtitle=0;
	$media='';
	$newspress_query = new WP_Query($newspress_args);
	 if ($newspress_query->have_posts()) { 
		 while ( $newspress_query->have_posts()) {
			 $newspress_query->the_post();
			 $counter++;
			 $list1.='<li>
                        <span class="glyphicon glyphicon-chevron-right"></span>
						<a href="'.get_permalink().'" title="'.get_the_title().'" rel="bookmark">'.get_the_title().'</a>
						<br/>
						<span><i class="fa fa-clock-o"></i> '.get_the_time( get_option( 'date_format' ) ).'</span>
					  </li>';
		 }
         $data.='<div class="col-md-3" style="height: 400px; overflow-y: scroll;">
              		<h3 class="section-title">সর্বশেষ</h3>
                		<ul class="list-group">
						'.$list1.'
					</ul>
				</div>';
		
		 
	 }
 wp_reset_query();
 return $data;
}
//Get most read posts
function most_read_posts($count){
	$newspress_args = array(
	'type'            	=> 'post',
	'meta_key' 			=> 'post_views_count',
	'orderby' 			=> 'meta_value_num',
	'order'           	=> 'DESC',
	'post_status'     	=> 'publish',
	'posts_per_page'  	=> $count,
	'suppress_filters' 	=> true );
	$data='';
	$list1='';
	$list2='';
	$list3='';
	$column='';
	$counter=0;
	$subtitle=0;
	$media='';
	$newspress_query = new WP_Query($newspress_args);
	 if ($newspress_query->have_posts()) { 
		 while ( $newspress_query->have_posts()) {
			 $newspress_query->the_post();
			 $counter++;
			 $list1.='<li>
                        <span class="glyphicon glyphicon-chevron-right"></span>
						<a href="'.get_permalink().'" title="'.get_the_title().'" rel="bookmark">'.get_the_title().'</a>
						<br/>
						<span><i class="fa fa-clock-o"></i> '.get_the_time( get_option( 'date_format' ) ).'</span>
					  </li>';
		 }
         $data.='<div class="col-md-3" style="height: 400px; overflow-y: scroll;">
              		<h3 class="section-title">সর্বাধিক পঠিত</h3>
                		<ul class="list-group">
						'.$list1.'
					</ul>
				</div>
				';
		
		 
	 }
 wp_reset_query();
 return $data;
}
//Get 10 lead news for slider
function get_crousel_slider_lead_news($category, $count){
	$newspress_args = array(
    'cat'   		  => $category,
	'type'            => 'post',
	'orderby'         => 'post_date',
	'order'           => 'DESC',
	'post_status'     => 'publish',
	'posts_per_page'  => $count,
	'suppress_filters' => true );
	$data='';
	$list1='';
	$list2='';
	$list3='';
	$column='';
	$counter=0;
	$subtitle=0;
	$media='';
	$newspress_query = new WP_Query($newspress_args);
	 if ($newspress_query->have_posts()) { 
		 while ( $newspress_query->have_posts()) {
			 $newspress_query->the_post();
			 $counter++;
             $imageurl = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'sidebar_img');
				$thumb_id = get_post_thumbnail_id($post->id);
				$alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);
				if( $imageurl[0] == NULL ) {

					$imageurl[0] = get_template_directory_uri()."/assets/img/technews.png";
				}
			$list1.='<div class="item '.($counter==1 ? " active" : "") .'">
						<img src="'.$imageurl[0].'" />
					</div>
					';
		 }         
	 }
 wp_reset_query();
 return $list1;
}