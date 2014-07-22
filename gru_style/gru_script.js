
var domainroot="http://www.gru.edu"; // Specify your domain below. The search results will only be made for your website

var enable_mobile = 0; 		// Enable mobile version redirect?   1 - Yes / 0 - No
var mobile_url = "gru.edu/mobile/"; // If mobile enabled, where to redirect?

if(enable_mobile == 1) {
			
	// Create the Script Object
	var script = document.createElement('script');
	script.src = 'js/redirection_mobile.min.js';
	script.type = 'text/javascript';
	script.defer = true;
	script.id = 'scriptID'; // This will help us in referencing the object later for removal
	// Insert the created object to the html head element
	var head = document.getElementsByTagName('head').item(0);
	head.appendChild(script);
	
	(function($){ 
		$(window).load(function(){
			SA.redirection_mobile ({
				noredirection_param:"noredirection",
				mobile_url : mobile_url, // put here your own link
				mobile_prefix : "http",
				cookie_hours : "2" 
			});
		});
	})(jQuery);

}

;
(function($){

	$(document).ready(function(e) {
		
		// activate placeholders for older browsers
		$('input, textarea').placeholder();
		
		/* Activate Superfish Menu */
		var sfDelay = 200;
		if($('html').hasClass('isie'))
			sfDelay = 300;
		$('#main_menu > ul')
		.supersubs({ 
			minWidth:    12,   // minimum width of sub-menus in em units 
			maxWidth:    27,   // maximum width of sub-menus in em units 
			extraWidth:  1     // extra width can ensure lines don't sometimes turn over 
		}).superfish({
			delay:sfDelay,
			dropShadows:false,
			autoArrows:true,
			speed:300
		}).mobileMenu({
			switchWidth: 960,
			topOptionText: document.mobileMenuText,
			indentString: '&nbsp;&nbsp;&nbsp;'
		});
		
		// --- search panel
		var searchBtn = $('#search').children('.searchBtn'),
		searchPanel = searchBtn.next(),
		searchP = searchBtn.parent();
		searchBtn.click(function(e){
			e.preventDefault();
			var _t = $(this);
			if(!_t.hasClass('active')) {
				_t.addClass('active')
				.find('span')
				.removeClass('icon-search icon-white')
				.addClass('icon-remove');
				searchPanel.show();
			} else {
				_t.removeClass('active')
				.find('span')
				.addClass('icon-search icon-white')
				.removeClass('icon-remove');
				searchPanel.hide();
			}
		}); // searchBtn.click //
		$(document).click(function(){
			searchBtn.removeClass('active')
			searchBtn.addClass('closed')
			.find('span')
			.addClass('icon-search icon-white')
			.removeClass('icon-remove');
			searchPanel.hide(0);
		});
		//searchBtn.mouseover
		searchBtn.mouseenter(function() {
			var _t = $(this);
			if (!_t.hasClass('active')) {
				if (!_t.hasClass('closed')) {
					_t.addClass('active')
					.find('span')
					.removeClass('icon-search icon-white')
					.addClass('icon-remove');
					searchPanel.show();
				}
			}
		});
		//searchBtn.mouseout
		searchBtn.mouseout(function() {
			var _t = $(this);
			if (_t.hasClass('closed')) {
				_t.removeClass('closed');
			}
		});
		searchP.click(function(event){
			event.stopPropagation();
		});
		// --- end search panel

		/* sliding panel toggle (support panel) */
		var sliding_panel = $('#sliding_panel');
		$('#open_sliding_panel').toggle(function(e){
			e.preventDefault();
			sliding_panel.animate({
				height:130
			}, {
				duration:100, 
				queue:false, 
				easing:'easeOutQuint'
			});
			$(this).addClass('active');
		}, function(){
			sliding_panel.animate({
				height:0
			}, {
				duration:100, 
				queue:false, 
				easing:'easeOutQuint'
			});
			$(this).removeClass('active');
		});
		// --- end sliding panel
		
		/* scroll to top */
		function totop_button(a) {
			var b = $("#totop");
			b.removeClass("off on");
			if (a == "on") {
				b.addClass("on")
			} else {
				b.addClass("off")
			}
		}
		window.setInterval(function () {
			var b = $(this).scrollTop();
			var c = $(this).height();
			if (b > 0) {
				var d = b + c / 2
			} else {
				var d = 1
			}
			if (d < 1e3) {
				totop_button("off")
			} else {
				totop_button("on")
			}
		}, 300);
		
		$("#totop").click(function (e) {
			e.preventDefault();
			$('body,html').animate({
				scrollTop:0
			},800, 'easeOutExpo');
		});
		// --- end scroll to top
		
		// activate tooltips
		$('*[data-rel="tooltip"]').tooltip();
		
		//activate collapsible accordions
		$(".collapse").collapse();
		
	
		
	});	// doc.ready end //
	
	$(window).load(function(){
		
		if($('body').hasClass('slider_fixed')) {
			
			//$('.slider_fixed #slideshow').
			$('.inner-page').css({
				'top':(parseInt($('.slider_fixed #slideshow .item').first().css('height'))-10)+'px', 
				'background-color': $('body').css('background-color')
			});
		}
		var pageLoading = $("#page-loading");
		if(pageLoading.length > 0){
			setTimeout(function() {
				pageLoading.fadeOut();
			}, 1000);
		}
		
		$('.hoverBorder').each(function(index, element) {
			$(this).find('img').wrap('<span class="hoverBorderWrapper"/>').after('<span class="theHoverBorder"></span>');
		});
		
		//grayscale effect
		var grayHover = $('.grayHover'),
		grayHoverImg = grayHover.find('img'),
		spd = 200;
		
		grayHoverImg.each(function(){
			var el = $(this);
			el.parent().css({
				width:el.width(), 
				height:el.height()
			});
			el.clone().addClass('grayscale').css({
				"z-index":"998",
				"opacity":"0"
			}).insertBefore(el).queue(function(){
				var el = $(this);
				el.dequeue();
			});
			this.src = grayscale(this.src);
			el.css({
				"top":"-"+ el.height() +"px"
			});
		});
		grayHover.mouseover(function(){
			$(this).find('img:first').animate({
				opacity:1
			}, {
				queue:false, 
				duration: spd
			});
		});
		grayHover.mouseout(function(){
			$(this).find('img.grayscale').animate({
				opacity:0
			}, {
				queue:false, 
				duration: spd
			});
		}); // end grayscale efect
		
		// hover effect
		$('.hover_effect').each(function(){
			var hoverLink = $(this),
			hoverLinkImg = hoverLink.find('img'),
			hoverLinkTitle = hoverLink.attr('title');
			hoverLink.css({
				'width':hoverLinkImg.width(), 
				'height':hoverLinkImg.height()
			}).append("<span class=\"title\">"+hoverLinkTitle+"</span>");
		});
		
		//hoverlink
		$("a.hoverLink").each(function(index, element) {
			var $t = $(this),
			dtype = $t.data('type'),
			img = $t.find('img'),
			sp = 'fast',
			app = '<span class="icon_wrap"><span class="icon '+dtype+'"></span></span>';
			$t.append(app);
			
			$t.hover(function(){
				img.animate({
					'opacity': 0.5
				}, sp);
				$t.find('.icon_wrap').animate({
					'opacity': 1
				}, sp);
			}, function(){
				img.animate({
					'opacity': 1
				}, sp);
				$t.find('.icon_wrap').animate({
					'opacity': 0
				}, sp);
			});
		});
		
	});
	
})(jQuery);

(function($) {
	$(window).load(function(){
		var menu_ul = $('.menu > li > ul'),
		menu_a = $('.menu > li > a');
		menu_ul.hide();
		menu_a.click(function(e) {
			if($(this).attr('href') == "#") {
				e.preventDefault();
				if(!$(this).hasClass('active')) {
					menu_a.removeClass('active');
					menu_ul.filter(':visible').slideUp('normal');
					$(this).addClass('active').next().stop(true,true).slideDown('normal');
				} else {
					$(this).removeClass('active');
					$(this).next().stop(true,true).slideUp('normal');
				}
			}
		});

	});
})(jQuery);
 
function grayscale(src) {
      
	var canvas = document.createElement('canvas');
	var ctx = canvas.getContext('2d');
	var imgObj = new Image();
	imgObj.src = src;
	canvas.width = imgObj.width;
	canvas.height = imgObj.height;
	ctx.drawImage(imgObj, 0, 0);
	var imgPixels = ctx.getImageData(0, 0, canvas.width, canvas.height);
	for(var y = 0; y < imgPixels.height; y++){
		for(var x = 0; x < imgPixels.width; x++){
			var i = (y * 4) * imgPixels.width + x * 4;
			var avg = (imgPixels.data[i] + imgPixels.data[i + 1] + imgPixels.data[i + 2]) / 3;
			imgPixels.data[i] = avg;
			imgPixels.data[i + 1] = avg;
			imgPixels.data[i + 2] = avg;
		}
	}
	ctx.putImageData(imgPixels, 0, 0, 0, 0, imgPixels.width, imgPixels.height);
	return canvas.toDataURL();
   
}

function Gsitesearch(curobj){
	curobj.q.value="site:"+domainroot+" "+curobj.qfront.value
}