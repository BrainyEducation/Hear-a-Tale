
<!-- Carousels (by CarouFredSel) -->
<script src="http://www.gru.edu/js/jquery.carouFredSel.js" type="text/javascript"></script>
<script type="text/javascript" language="javascript">
	;(function($) {	
		$(window).load(function(){
			// ** recent works
			$('#recent_works2').carouFredSel({
				responsive: true,
				scroll: 1,
				auto: false,
				items: {
					width: 270,
					visible: {
						min: 1,
						max: 10
					}
				},
				prev	: {	
					button	: ".recentwork_carousel .prev",
					key		: "left"
				},
				next	: { 
					button	: ".recentwork_carousel .next",
					key		: "right"
				}
			});
			// *** end recent works carousel
		
		

		});
	
	})(jQuery);
</script>
<script type="text/javascript" src="http://www.gru.edu/js/bootstrap.min.js"></script>
<!-- Bootstrap Framework -->
<script type="text/javascript" src="http://www.gru.edu/js/plugins.js"></script>
<!-- jQuery Plugins -->
<script type="text/javascript" src="http://www.gru.edu/addons/superfish_responsive/superfish_menu.js"></script>
<!-- Superfish Menu -->
<script type="text/javascript" src="http://www.gru.edu/js/gru_script.js"></script>
<!-- custom scripts file -->
<!-- prettyphoto scripts & styles -->
<link rel="stylesheet" href="http://www.gru.edu/addons/prettyphoto/prettyPhoto.css" type="text/css" />
<script type="text/javascript" src="http://www.gru.edu/addons/prettyphoto/jquery.prettyPhoto.js"></script> 
<script type="text/javascript">
	function ppOpen(panel, width){
		jQuery.prettyPhoto.close();
		setTimeout(function() {
			jQuery.fn.prettyPhoto({social_tools: false, deeplinking: false, show_title: false, default_width: width, theme:'pp_gru'});
			jQuery.prettyPhoto.open(panel);
		}, 300);
	} // function to open different panel within the panel
	jQuery(document).ready(function($) {
		jQuery("a[data-rel^='prettyPhoto'], .prettyphoto_link").prettyPhoto({theme:'pp_gru',social_tools:false, deeplinking:false});
		jQuery("a[rel^='prettyPhoto']").prettyPhoto({theme:'pp_gru'});
		jQuery("a[data-rel^='prettyPhoto[login_panel]']").prettyPhoto({theme:'pp_gru', default_width:800, social_tools:false, deeplinking:false});
		
		jQuery(".prettyPhoto_transparent").click(function(e){
			e.preventDefault();
			jQuery.fn.prettyPhoto({social_tools: false, deeplinking: false, show_title: false, default_width: 980, theme:'pp_gru transparent', opacity: 0.95});
			jQuery.prettyPhoto.open($(this).attr('href'),'','');
		});
	});
</script>
<script type="text/javascript">
	jQuery('#urlview').click(function() {
		jQuery('a').each(function() {
			if (jQuery(this).attr("href") !== undefined) {
				jQuery(this).text(jQuery(this).attr("href"));
				var text = jQuery(this).attr("href");
				if (text.search("georgiahealth.edu") > 0 || text.search("aug.edu") > 0) {
					jQuery(this).css("background-color", "yellow");
				}
			}
		});
	});
</script>
<!--end prettyphoto -->
<!-- Google Analytics: change UA-37522387-1 to be your site's ID. -->
<script>
	var _gaq=[["_setAccount","UA-37500387-1"],["_trackPageview"]];
	(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
		g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
		s.parentNode.insertBefore(g,s)}(document,"script"));
</script>
