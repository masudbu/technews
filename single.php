<?php get_header();?>
 <section class="">
 	<div class="container">
 		<div class="row">
 			<div class="col-md-9 single-page">
			   	<?php 
					if (have_posts()) : 
	        		while (have_posts()) : the_post(); 

	        			setPostViews(get_the_ID());
				?>
				<div class="single-header">
					<h3><?php the_title(); ?></h3>
				</div>
				<div class="meta-item-single">
					<h5>
						<span>প্রকাশিত: <?php the_time(' l, F j, Y g:i a'); ?>&nbsp;&nbsp; <a onclick="myFunction()"><i class="fa fa-print"></i></a></span>
					</h5>
				</div>	
				<div class="single-pg-header">
                        
					<p class="author-location"><?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?> | <b><?php the_author(); ?></b></p>
                </div>
				
				<div class="single-img">
					<?php the_post_thumbnail();?>
				</div>
				<div class="single-content">
					<p><?php the_content(); ?></p>
				</div>
				<div>
				    
                    

						   
                    <div class="under-post-campaign">			
                    	<div class="textwidget12">
                    		বিনোদন, লাইফস্টাইল, তথ্যপ্রযুক্তি, ভ্রমণ, তারুণ্য, ক্যাম্পাস ও মতামত কলামে লিখতে পারেন আপনিও – 
                    		<a href="">example@gmail.com</a> 
                    		ইমেইল করুন
                    &nbsp;</div>
                    </div> 
				</div>
				<?php endwhile; endif; ?>
				
				<div class="recent-news">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="cardd-4-title section-title rct-title">
                                <h3>আরও পড়ুন</h3>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="post-navigation">
                            <ul>
								<?php
								$cat = get_category( $post->ID );
								$query = new WP_Query( array(
									'cat' => $post_cat[0]->term_id,
									'post_type'		=> 'post',
									'posts_per_page'	=> '8',
									'post__not_in'	=> $post_not_in

								) );
								while( $query->have_posts() ): $query->the_post();
								$post_not_in[]=get_the_ID();
								?>
                                    <div class="col-md-3 col-sm-6 col-xs-6">
                                            <div class="small-card">
                                                <div class="small-cd-img">

                                                    <a href="<?php the_permalink(); ?>">
                                                   <?php 				
		$imageurl = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'post_navvv');
		$thumb_id = get_post_thumbnail_id($post->id);
		$alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);
	?>                                                                                                                             <img src="<?php echo $imageurl[0]; ?>" alt="<?php the_title(); ?>" class="img-responsive">
                                                                                                            </a>
                                                </div>
                                                <div class="sm-cd-caption">
                                                    <h3>
                                                        <a href="<?php the_permalink(); ?>">
                                                           <?php the_title(); ?>                                              </a>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
										
										<?php
										endwhile;
										?>
								 </ul>
                            </div>
                            

                    </div>
                </div>
 			</div>
 			<?php get_sidebar(); ?>
 		</div>
 	</div>
 </section>
<?php get_footer();?>