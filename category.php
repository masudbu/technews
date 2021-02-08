<?php get_header();?>
<section>
  	<div class="container">
	  	<div class="row">
	  		<div class="col-md-9"> 
            <?php 

			
				if (have_posts()) : 
            		while (have_posts()) : the_post(); 
            			
			?>   
            <div class="col-md-4 category-img"> 
            	 <?php the_post_thumbnail(array(725,425),array( 'alt' => get_the_title(),'class'=>'img-thumbnail','title'=>get_the_title())); ?>
            </div>
            <div class="col-md-8 category-content"> 
            	<h2>
	        	 	<a href="<?php the_permalink(); ?>">
	                   <?php the_title(); ?>            
	              	</a>
                </h2>
            	<p>
            		<?php echo wp_trim_words( get_the_content(), 50, '...' ); ?>
            	</p>
            </div>

             <?php endwhile; endif; ?>

             	<center>
                    <?php 
						the_posts_pagination( array(
							'prev_text'          => __( 'Previous', 'ajkaler' ),
							'next_text'          => __( 'Next', 'ajkaler' ),
							'before_page_number' => '<span class="meta-nav">' . __( ' ', 'ajkaler' ) . ' </span>',
						) );

					?>
					</center>
		 	
	  		</div>
	  		<?php get_sidebar(); ?>
    </div>
	</div>
</section>
<hr/>
<?php get_footer();?>