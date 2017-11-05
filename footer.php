<?php /*wp_footer();*/ ?>	

	<!-- Copyrights
	============================================= -->
	<div id="copyrights">
		<div class="container clearfix">
			<div class="col_half">
				<p class="copyright">Copyrights &copy; <?php echo date('Y'); ?> All Rights Reserved by Ainushi Translations.</p>
			</div>
		</div>

	</div><!-- #copyrights end -->

		<div class="video-wrap" style="height: 100%;position: absolute; left: 0; top: 0; z-index: 1;">
			<div class="video-overlay" style="background: -moz-linear-gradient(top,  rgba(30,35,42,1) 21%,, rgba(30,35,42,0) 100%); background: -webkit-linear-gradient(top,  rgba(30,35,42,1) 21%,rgba(30,35,42,0) 100%); background: linear-gradient(to bottom,  rgba(30,35,42,1) 21%,rgba(30,35,42,0) 100%); filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#001e232a', endColorstr='#1e232a',GradientType=0 );">
			</div>
		</div>

	</footer><!-- #footer end -->


<!-- Javascripts
============================================= -->
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/slick/slick.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
<script src="<?php echo bloginfo('template_url'); ?>/js/bootstrap.js"></script>
<script src="<?php echo bloginfo('template_url'); ?>/js/materialize.js"></script>
<script src="<?php echo bloginfo('template_url'); ?>/js/bootstrap-toggle.js"></script>
<script type="text/javascript">
	$( document ).ready(function() {
    	var body = document.getElementsByTagName('body')[0],
    		sidebar = document.getElementById('sidebar');

    	// slick slider
    	$('.slider').slick({
  			slidesToScroll: 1,
  			autoplay: true,
  			autoplaySpeed: 2000,
  			centerMode: true,
  			centerPadding: '60px',
 			  slidesToShow: 4,
        arrows: true,
  			responsive: [
  			{
      			breakpoint: 1080,
      			settings: {
        			arrows: true,
        			centerMode: true,
        			centerPadding: '40px',
        			slidesToShow: 3
      			}
    		},
    		{
      			breakpoint: 788,
      			settings: {
        			arrows: false,
        			centerMode: true,
        			centerPadding: '40px',
        			slidesToShow: 2
      			}
    		},
    		{
      			breakpoint: 580,
      			settings: {
        			arrows: false,
        			centerMode: true,
        			centerPadding: '40px',
        			slidesToShow: 1
      			}
    		}]
		});

		// sidebar overflow hide
		sidebar.onmouseover = function() { 
    		body.style.overflow = 'hidden';
		}

		sidebar.onmouseout = function() { 
    		body.style.overflow = 'auto';
		}
	});
</script>
</body>
</html>