<section class="footer main-leadbox paddingTopbottom20">
       <nav class="navbar navbar-static-top top" role="navigation" id="top">
          <div class="container">
            <div class="col-sm-3">
              
            </div>
            <div class="col-sm-5 text-center social-link">
              <small class="date">
                <?php 
				          date_default_timezone_set("Asia/Dhaka");
                ?>
                <i class="fa fa-map-marker"></i> ঢাকা, <?php echo do_shortcode('[bangla_date]'); ?>  
              </small>
            </div>
            <div class="col-sm-4 text-right social-link">
              <a href="<?php echo cs_get_option('fb_link'); ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
             <a href="<?php echo cs_get_option('tw-link'); ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
              <a href="<?php echo cs_get_option('gp-link'); ?>" target="_blank"><i class="fa fa-google" aria-hidden="true"></i></a>
              <a href="<?php echo cs_get_option('linkedin-link'); ?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
              <a href="<?php echo cs_get_option('youtube-link'); ?>" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a>
            </div>
          </div>
        </nav>
        <footer class="container footer paddingTop20">
          <div class="row">
            <div class="col-md-4">
              <p><?php echo cs_get_option('wysiwyg_1'); ?>
             </p>
            </div>
            <div class="col-md-4">
              <p class="small text-muted">
                <?php echo cs_get_option('wysiwyg_2'); ?>
                
              </p>
            </div>
             <div class="col-md-4">
              	<div class="fb-page" data-href="<?php echo cs_get_option('fb_link'); ?>" data-tabs="timeline" data-width="" data-height="150" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="<?php echo cs_get_option('fb_link'); ?>" class="fb-xfbml-parse-ignore"><a href="<?php echo cs_get_option('fb_link'); ?>">Peoples News</a></blockquote></div>
             </div>
          </div>
        </footer>
  </section>
   <div class="container-fluit">
     <div class="row">
        <div class="copyright">
          <p>&copy;  2020 - masudtech.xyz প্রকাশক কর্তৃক সর্বস্বত্ব সংরক্ষিত | Design <a href="https://masudtech.xyz/">MasudTech</a></p>
        </div>
		 
		 
     </div>
  </div>
</div>
  
  <?php wp_footer(); ?>
</body>
</html>
