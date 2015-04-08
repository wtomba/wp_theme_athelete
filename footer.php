      </div>
      <footer class="site-footer">
        <p><?php bloginfo('name'); ?> - &copy; <?php echo date('Y'); ?></p>
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

        $(".category-nav ul li:has(.current-cat-parent)").find("ul").show();

        $(".map iframe").height($(".map iframe").width() * 0.6);
      });

    </script>
    <?php wp_footer(); ?>
  </body>
</html>
