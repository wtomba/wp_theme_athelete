      </div>
      <footer class="site-footer">
        <div class="row" data-equalizer>
            <!-- footer Left Widget -->
            <div class="large-3 medium-6 columns">
              <div class="footer-widget">
                <div class="latest-posts" data-equalizer-watch>
                  <?php
                    if (is_active_sidebar('footer_left1')) {
                      dynamic_sidebar('footer_left1');
                    }
                  ?>
                </div>
              </div>
            </div>

            <!-- footer Center Widget -->
            <div class="large-3 medium-6 columns">
              <div class="footer-widget">
                <div class="latest-posts" data-equalizer-watch>
                  <?php
                    if (is_active_sidebar('footer_left2')) {
                      dynamic_sidebar('footer_left2');
                    }
                  ?>
                </div>
              </div>
            </div>

            <!-- footer Right Widget -->
            <div class="large-3 medium-6 columns">
              <div class="footer-widget">
                <div class="latest-posts" data-equalizer-watch>
                  <?php
                    if (is_active_sidebar('footer_right1')) {
                      dynamic_sidebar('footer_right1');
                    }
                  ?>
                </div>
              </div>
            </div>

            <!-- footer Right Widget -->
            <div class="large-3 medium-6 columns">
              <div class="footer-widget">
                <div class="latest-posts" data-equalizer-watch>
                  <?php
                    if (is_active_sidebar('footer_right2')) {
                      dynamic_sidebar('footer_right2');
                    }
                  ?>
                </div>
              </div>
            </div>
            <div class="large-12 columns">
              <p class="warning label right"><?php bloginfo('name'); ?> - &copy; <?php echo date('Y'); ?></p>
            </div>
        </div>
      </footer>
    </div>
    <script type="text/javascript">
      jQuery(function ($){
        $.noConflict();
        $(document).foundation();

        $(".menu-toggle").click(function () {
          var menu = $(".main-nav nav ul");        
          menu.slideToggle();
        });

        $(".search-toggle").click(function () {
          var searchContainer = $(".search-container"),
              sliderFormContainer = $(".slider-form-container");
          searchContainer.slideToggle();
          sliderFormContainer.slideToggle();
        });

        $(".category-menu-toggle").click(function () {
          var menu = $(".category-nav");
          menu.slideToggle();
        });

        if ($('.menu-toggle').is(':visible')) {
            $('.slider-form-container').css('position','static');
        }

        $(document).scroll(function() {
          var menuTop = $('.site-header').offset().top + ($('.site-header').height() - $('.main-nav').height() );

          if ($(this).scrollTop() > menuTop) {
            $('.main-nav').css('position','fixed');
            $('.main-nav').css('top','0');
            $('.main-nav').css('width','100%');
            $('.form-container').css('position','fixed');
            $('.form-container').css('top','58px');
            $('.form-container').css('left','0');
            $('.form-container').css('right','0');
            $('.form-container').css('background-color', '#FFF');
            $('.slider-form-container').css('position','fixed');
            $('.slider-form-container').css('top','58px');
            $('.slider-form-container').css('left','0');
            $('.slider-form-container').css('right','0');
            $('.slider-form-container').css('background-color', '#FFF');
            if ($('.menu-toggle').is(':visible') && !$('.search-container, .slider-form-container').is(':visible')) {
              $('.main-nav').css('box-shadow','0px 0px 10px #000');
            } else {
              $('.form-container, .slider-form-container').css('box-shadow','0px 0px 10px #000');
            }
          } 
          else {
            if ($('.menu-toggle').is(':visible')) {
              $('.slider-form-container').css('position','static');
            } else {
              $('.slider-form-container').css('position','absolute');              
            }
            $('.slider-form-container').css('top','25rem');
            $('.slider-form-container').css('background-color', 'transparent');
            $('.form-container').css('position','relative');
            $('.form-container').css('top','2.5rem');
            $('.form-container').css('background-color', 'transparent');
            $('.main-nav').css('position','static');
            
            if ($('.menu-toggle').is(':visible') && !$('.search-container, .slider-form-container').is(':visible')) { 
              $('.main-nav').css('box-shadow','none');
            } else {
              $('.form-container, .slider-form-container').css('box-shadow','none');
            }
          }
        });

        $(".expand-comments").click(function () {
          $(".comments").slideToggle("slow");
          if ($(".comments").is(":visible")) {
              var top = $(".expand-comments").offset().top - ($(".main-nav").height() + $(".form-container").height());
              $("body, html").animate({ scrollTop:  top}, '500');
              $(".comments textarea").focus();
            }
        });
      });

    </script>
    <?php wp_footer(); ?>
  </body>
</html>
