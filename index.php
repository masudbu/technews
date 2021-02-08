<?php get_header(); ?>
<div class="container" style="padding-bottom: 20px;">
	<div class="col-md-2 breaking-title">
		<span>Breaking</span>
	</div>
	<?php echo scroll_posts(cs_get_option('home_cat_name_breaking'),cs_get_option('breaking_post_number')); ?>
</div>
<section class="main-leadbox paddingTop20">
    <div class="container">
      <div class="row">
		  <?php echo last_posts(30); ?>
          <div class="col-md-6">
              <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  
                 
                  <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                      
                      
                    <?php echo get_crousel_slider_lead_news(cs_get_option('home_cat_name_leadnews'),10); ?>
                				
				                   
                  </div>

                  <!-- Left and right controls -->
                  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
          </div>
		<?php echo most_read_posts(30); ?>
      </div>
  </div>
</section>
<!--Five Section-->

<?php echo single_category_posts(cs_get_option('home_cat_name_national'), 12); ?>

<section class="main-leadbox paddingTopbottom20">
    <div class="container">
      <div class="row">
        <div class="main-content category">
         <?php echo common_category_posts(cs_get_option('home_cat_name_politics'), 6); ?>
         <?php echo common_category_posts(cs_get_option('home_cat_name_all_bangla'), 6); ?>
         <?php echo common_category_posts(cs_get_option('home_cat_name_international'), 6); ?>
         <?php echo common_category_posts(cs_get_option('home_cat_name_campus'), 6); ?>
        </div>
      </div>
    </div>
</section>

<?php echo single_category_posts(cs_get_option('home_cat_name_entertainment'), 12); ?>

<section class="main-leadbox paddingTopbottom20">
    <div class="container">
      <div class="row">
        <div class="main-content category">
         <?php echo common_category_posts(cs_get_option('home_cat_name_sports'), 6); ?>
         <?php echo common_category_posts(cs_get_option('home_cat_name_special'), 6); ?>
         <?php echo common_category_posts(cs_get_option('home_cat_name_religion'), 6); ?>
         <?php echo common_category_posts(cs_get_option('home_cat_name_economics'), 6); ?>
        </div>
      </div>
    </div>
</section>
<?php get_footer(); ?>