<div class="col-md-3">
	<div class="row">
        <h3 class="sitebar-title"> সর্বশেষ </h3>
        <ul class="list-group">
            <?php
            $breaking = new WP_Query(array( 'post_type' => 'post','posts_per_page' =>'10'));
                   
                     if ($breaking->have_posts()) : 
                      while ($breaking ->have_posts()) : $breaking->the_post(); 
                ?>

            <li>
                <span class="glyphicon glyphicon-chevron-right"></span>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                <br/>
                <span style="font-size:13px;"><i class="fa fa-clock-o"></i>
                           <?php the_time(' l, F j, Y '); ?></span>
            </li>
            <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                    <?php else : ?>
              <p><?php __('No News'); ?></p>
                <?php endif; ?>
        </ul>
    </div>
	<div class="fb-page" data-href="<?php echo cs_get_option('fb_link'); ?>" data-tabs="timeline" data-width="" data-height="150" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="<?php echo cs_get_option('fb_link'); ?>" class="fb-xfbml-parse-ignore"><a href="<?php echo cs_get_option('fb_link'); ?>">Peoples News</a></blockquote></div>
    <div class="row">
		<h3 class="sitebar-title"> জনপ্রিয় সংবাদ </h3>
		<ul class="list-group">
            <?php
                  $breaking = new WP_Query( array( 'post_type' => 'post','posts_per_page' => 10, 'meta_key' => 'post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC'  ) );
                     if ($breaking->have_posts()) : 
                      while ($breaking->have_posts()) : $breaking->the_post(); 
                ?>

            <li>
                <span class="glyphicon glyphicon-chevron-right"></span>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                <br/>
                <span style="font-size:13px;"><i class="fa fa-clock-o"></i>
                           <?php the_time(' l, F j, Y '); ?></span>
            </li>
            <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                    <?php else : ?>
              <p><?php __('No News'); ?></p>
                <?php endif; ?>
        </ul>
	</div>
	
</div>