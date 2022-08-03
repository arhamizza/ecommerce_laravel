/* -------------------------------------------------------------------------------- /
	
	Magentech jQuery
	Created by Magentech
	v1.0 - 20.9.2016
	All rights reserved.

	+----------------------------------------------------+
		TABLE OF CONTENTS
	+----------------------------------------------------+
	
	[1]		Language and Currency Dropdowns
	[2]		Header Top link
	[3]		Resonsive Header Top
	[4]		Accordion to Bonus page
	[5]		Magnific Popup
	[6]		Quick View
	[7]		Quantity minus and plus
	[8]		Owl carousel - Slider
	[9]		Listing Tabs - Slider
	[10]	Other Query
	[11]	Page Quickview
	[12]	Page About Us
	[13]	Page Category
	[14]	Page Detail
/ -------------------------------------------------------------------------------- */


$(document).ready(function(){
	/* ---------------------------------------------------
	Preloading Screen
-------------------------------------------------- */
$(window).load(function() {
	// Animate loader off screen
	$('body').addClass('loaded');
});

/* ---------------------------------------------------
	Language and Currency Dropdowns
-------------------------------------------------- */

	/*$screensize = $(window).width();
	if ($screensize > 991) {
	$('#currency, #bt-language, #my_account').hover(function() {
		$(this).find('ul').stop(true, true).slideDown('fast');
	  },function() {
		$(this).find('ul').stop(true, true).css('display', 'none');
	  });
	}*/
	
// Hide tooltip when clicking on it
    var hasTooltip = $("[data-toggle='tooltip']").tooltip();
	hasTooltip.on('click', function () {
		    $(this).tooltip('hide')
	});
/* ---------------------------------------------------
	Header Top link
-------------------------------------------------- */
	$(".header-top-right .top-link > li").mouseenter(function(){
		$(".header-top-right .top-link > li.account").addClass('inactive');
	});
	$(".header-top-right .top-link > li").mouseleave(function(){
		$(".header-top-right .top-link > li.account").removeClass('inactive');
	});
	$(".header-top-right .top-link > li.account").mouseenter(function(){
		$(".header-top-right .top-link > li.account").removeClass('inactive');
	});
/* ---------------------------------------------------
	Resonsive Header Top
-------------------------------------------------- */
	$(".collapsed-block .expander").click(function (e) {
        var collapse_content_selector = $(this).attr("href");
        var expander = $(this);
		
        if (!$(collapse_content_selector).hasClass("open")) {
			expander.addClass("open").html("<i class='fa fa-angle-up'></i>") ;
		}
		else expander.removeClass("open").html("<i class='fa fa-angle-down'></i>");
		
		if (!$(collapse_content_selector).hasClass("open")) $(collapse_content_selector).addClass("open").slideDown("normal");
        else $(collapse_content_selector).removeClass("open").slideUp("normal");
        e.preventDefault()
    })

/* ---------------------------------------------------
	Accordion to Bonus page
-------------------------------------------------- */
	$("ul.yt-accordion li").each(function() {
		if($(this).index() > 0) {
			$(this).children(".accordion-inner").css('display', 'none');
		}
		else {
			$(this).find(".accordion-heading").addClass('active');
		}
		
		var ua = navigator.userAgent,
		event = (ua.match(/iPad/i)) ? "touchstart" : "click";
		$(this).children(".accordion-heading").bind(event, function() {
			$(this).addClass(function() {
				if($(this).hasClass("active")) return "";
				return "active";
			});
	
			$(this).siblings(".accordion-inner").slideDown(350);
			$(this).parent().siblings("li").children(".accordion-inner").slideUp(350);
			$(this).parent().siblings("li").find(".active").removeClass("active");
		});
	});
	

	
/* ---------------------------------------------------
	Magnific Popup
-------------------------------------------------- */
    $('.image-popup').magnificPopup({
	  type: 'image',
	  closeOnContentClick: true,
	  image: {
		verticalFit: false
	  }
	});
	$('.blog-listitem').magnificPopup({
	  delegate: '.popup-gallery',
	  type: 'image',
	  tLoading: 'Loading image #%curr%...',
	  mainClass: 'mfp-img-mobile',
	  gallery: {
		enabled: true,
		navigateByImgClick: true,
		preload: [0,1] // Will preload 0 - before current, and 1 after the current image
	  },
	  image: {
		tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
		titleSrc: function(item) {
		  return item.el.attr('title') ;
		}
	  }
	});
	
	
/* ---------------------------------------------------
	Quick View
-------------------------------------------------- */
	
	$('.iframe-link').magnificPopup({
		type:'iframe',
	    fixedContentPos: true,
        fixedBgPos: true,
        overflowY: 'auto',
        closeBtnInside: true,
		closeOnContentClick: true,
        preloader: true,
		midClick: true,
		removalDelay: 300,
		mainClass: 'my-mfp-zoom-in',
		//gallery: {  enabled: true }
    });
	
	
/* ---------------------------------------------------
	Social Widgets Accounts
-------------------------------------------------- */

jQuery(function ($) {
    "use strict";
    var socialItems = $('.social-widgets .items .item');
    var counter = 0;
    socialItems.each(function () {
        counter++;
        var itemclass = "item-0" + counter;
        $(this).addClass(itemclass)
    });
});

jQuery(function ($) {
    "use strict";
    $(".social-widgets .item").each(function () {
        var $this = $(this),
            timer;
        $this.on("mouseenter", function () {
            var $this = $(this);
            if (timer) clearTimeout(timer);
            timer = setTimeout(function () {
                $this.addClass("active")
            }, 200)
        }).on("mouseleave", function () {
            var $this = $(this);
            if (timer) clearTimeout(timer);
            timer = setTimeout(function () {
                $this.removeClass("active")
            }, 100)
        }).on("click", function (e) {
            e.preventDefault()
        })
    })
});

jQuery(function ($) {
    "use strict";
    var loadmap = $(".social-widgets .item a");
    loadmap.click(function (e) {
        e.preventDefault()
    });
    loadmap.hover(function (e) {
		
        if (!$(this).parent().hasClass("load")) {
            var loadcontainer = $(this).parent().find(".loading");
            $.ajax({
                url: $(this).attr("href"),
                cache: false,
                success: function (data) {
					
                    setTimeout(function () {
                        loadcontainer.html(data)
                    }, 1000)
                }
			
            });
            $(this).parent().addClass("load")
        }
    })
});

				
/* ---------------------------------------------------
	Back to Top
-------------------------------------------------- */
$(".back-to-top").addClass("hidden-top");
	$(window).scroll(function () {
	if ($(this).scrollTop() === 0) {
		$(".back-to-top").addClass("hidden-top")
	} else {
		$(".back-to-top").removeClass("hidden-top")
	}
});

$('.back-to-top').click(function () {
	$('body,html').animate({scrollTop:0}, 1200);
	return false;
});	
/* ---------------------------------------------------
	Range slider && Filter  Reset
-------------------------------------------------- */
if($('#slider').length){
	window.startRangeValues = [28.00, 562.00];
	$('#slider').slider({

		range : true,
		min : 10.00,
		max : 580.00,
		values : window.startRangeValues,
		step : 0.01,

		slide : function(event, ui){

			var min = ui.values[0].toFixed(2),
				max = ui.values[1].toFixed(2),
				range = $(this).siblings('.range');


			range.children('.min_value').val(min).next().val(max);

			range.children('.min_val').text('$' + min).next().text('$' + max);

		},

		create : function(event, ui){

			var $this = $(this),
				min = $this.slider("values", 0).toFixed(2),
				max = $this.slider("values", 1).toFixed(2),
				range = $this.siblings('.range');

			range.children('.min_value').val(min).next().val(max);

			range.children('.min_val').text('$' + min).next().text('$' + max);
			
		}

	});

}

	if(!window.startRangeValues) return;
		var startValues = window.startRangeValues,
			min = startValues[0].toFixed(2),
			max = startValues[1].toFixed(2);
		$('.filter_reset').on('click', function(){

			var form = $(this).closest('form'),
				range = form.find('.range');

				console.log(startValues);

			// form.find('#slider').slider('option','values', startValues);

			form.find('#slider').slider('values', 0, min);
			form.find('#slider').slider('values', 1, max);

			form.find('.options_list').children().eq(0).children().trigger('click');

			range.children('.min_value').val(min).next().val(max);

			range.children('.min_val').text('$' + min).next().text('$' + max);

		});

	

});


/* ---------------------------------------------------
	Quantity minus and plus
-------------------------------------------------- */
$(function ($) {
    "use strict";
	//Quantity plus minus 
    $.initQuantity = function ($control) {
        $control.each(function () {
            var $this = $(this),
                data = $this.data("inited-control"),
                $plus = $(".input-group-addon:last", $this),
                $minus = $(".input-group-addon:first", $this),
                $value = $(".form-control", $this);
            if (!data) {
                $control.attr("unselectable", "on").css({
                    "-moz-user-select": "none",
                    "-o-user-select": "none",
                    "-khtml-user-select": "none",
                    "-webkit-user-select": "none",
                    "-ms-user-select": "none",
                    "user-select": "none"
                }).bind("selectstart", function () {
                    return false
                });
                $plus.click(function () {
                    var val =
                        parseInt($value.val()) + 1;
                    $value.val(val);
                    return false
                });
                $minus.click(function () {
                    var val = parseInt($value.val()) - 1;
                    $value.val(val > 0 ? val : 1);
                    return false
                });
                $value.blur(function () {
                    var val = parseInt($value.val());
                    $value.val(val > 0 ? val : 1)
                })
            }
        })
    };
    $.initQuantity($(".quantity-control"));
    $.initSelect = function ($select) {
        $select.each(function () {
            var $this = $(this),
                data = $this.data("inited-select"),
                $value = $(".value", $this),
                $hidden = $(".input-hidden", $this),
                $items = $(".dropdown-menu li > a", $this);
            if (!data) {
                $items.click(function (e) {
                    if ($(this).closest(".sort-isotope").length >
                        0) e.preventDefault();
                    var data = $(this).attr("data-value"),
                        dataHTML = $(this).html();
                    $this.trigger("change", {
                        value: data,
                        html: dataHTML
                    });
                    $value.html(dataHTML);
                    if ($hidden.length) $hidden.val(data)
                });
                $this.data("inited-select", true)
            }
        })
    };
    $.initSelect($(".btn-select"));
	
	if(!window.startRangeValues) return;
	var startValues = window.startRangeValues,
		min = startValues[0].toFixed(2),
		max = startValues[1].toFixed(2);

	$('.filter_reset').on('click', function(){

		var form = $(this).closest('form'),
			range = form.find('.range');

			console.log(startValues);

		// form.find('#slider').slider('option','values', startValues);

		form.find('#slider').slider('values', 0, min);
		form.find('#slider').slider('values', 1, max);

		form.find('.options_list').children().eq(0).children().trigger('click');

		range.children('.min_value').val(min).next().val(max);

		range.children('.min_val').text('$' + min).next().text('$' + max);

	});
	
	
});

/* ---------------------------------------------------
	Owl carousel - Slider
-------------------------------------------------- */


/* ---------------------------------------------------
	Other Query
-------------------------------------------------- */
$(document).ready(function($) {
	$('.date').datetimepicker({
		pickTime: false
	});
});

/* ---------------------------------------------------
	Page About Us
-------------------------------------------------- */

/* ---------------------------------------------------
	Page Category
-------------------------------------------------- */

$(document).ready(function(){
	$('#cat_accordion').cutomAccordion ({
		eventType: 'click',
		autoClose: true,
		saveState: true,
		disableLink: true,
		speed: 'slow',
		showCount: false,
		autoExpand: true,
		cookie	: 'dcjq-accordion-1',
		classExpand	 : 'button-view'
	});  
});

$(function() {
	var austDay = new Date(2018, 3 - 1, 28);
	$('.defaultCountdown-30').countdown(austDay, function(event) {
		var $this = $(this).html(event.strftime(''
		   + '<div class="time-item time-day"><div class="num-time">%D</div><div class="name-time">Day </div></div>'
		   + '<div class="time-item time-hour"><div class="num-time">%H</div><div class="name-time">Hour </div></div>'
		   + '<div class="time-item time-min"><div class="num-time">%M</div><div class="name-time">Min </div></div>'
		   + '<div class="time-item time-sec"><div class="num-time">%S</div><div class="name-time">Sec </div></div>'));
	});

});

function display(view) {
	$('.products-list').removeClass('list grid').addClass(view);
	$('.list-view .btn').removeClass('active');
	if(view == 'list') {
		//$('.products-list .product-layout').addClass('col-lg-12');
		// $('.products-list .product-layout .left-block').addClass('col-md-4');
		// $('.products-list .product-layout .right-block').addClass('col-md-8');
		$('.products-list .product-layout .item-desc').removeClass('hidden');
		$('.products-list .product-layout .list-block').removeClass('hidden');
		$('.products-list .product-layout .button-group').addClass('hidden');
		$('.list-view .' + view).addClass('active');
		$.cookie('display', 'list'); 
	}else{
		//$('.products-list .product-layout').removeClass('col-lg-12');
		//$('.products-list .product-layout .left-block').removeClass('col-md-4');
		//$('.products-list .product-layout .right-block').removeClass('col-md-8');
		$('.products-list .product-layout .item-desc').addClass('hidden');
		$('.products-list .product-layout .list-block').addClass('hidden');
		$('.products-list .product-layout .button-group').removeClass('hidden');
		$('.list-view .' + view).addClass('active');
		$.cookie('display', 'grid');
	}
}
	
	$(document).ready(function () {
		
		// Click Button
		$('.list-view .btn').each(function() {
			var ua = navigator.userAgent,
			event = (ua.match(/iPad/i)) ? 'touchstart' : 'click';
			$(this).bind(event, function() {
				$(this).addClass(function() {
					if($(this).hasClass('active')) return ''; 
					return 'active';
				});
				$(this).siblings('.btn').removeClass('active');
				$catalog_mode = $(this).data('view');
				display($catalog_mode);
			});
			
		});
	});

/* ---------------------------------------------------
	Page Product Detail
-------------------------------------------------- */

$(document).ready(function() {
	
	
	var zoomCollection = '.large-image img';
	$( zoomCollection ).elevateZoom({
		zoomType    : "inner",
		lensSize    :"200",
		easing:true,
		gallery:'thumb-slider',
		cursor: 'pointer',
		loadingIcon: 'image/theme/lazy-loader.gif',
		galleryActiveClass: "active"
	});
	$('.large-image').magnificPopup({
		items: [
			{src: 'image/catalog/demo/product/funiture/1.jpg' },
			{src: 'image/catalog/demo/product/funiture/2.jpg' },
			{src: 'image/catalog/demo/product/funiture/3.jpg' },
			{src: 'image/catalog/demo/product/funiture/4.jpg' },
			{src: 'image/catalog/demo/product/funiture/5.jpg' },
		],
		gallery: { enabled: true, preload: [0,2] },
		type: 'image',
		mainClass: 'mfp-fade',
		callbacks: {
			open: function() {
				
				var activeIndex = parseInt($('#thumb-slider .img.active').attr('data-index'));
				var magnificPopup = $.magnificPopup.instance;
				magnificPopup.goTo(activeIndex);
			}
		}
	});
	$("#thumb-slider .owl2-item").each(function() {
		$(this).find("[data-index='0']").addClass('active');
	});
	
	$('.thumb-video').magnificPopup({
	  type: 'iframe',
	  iframe: {
		patterns: {
		   youtube: {
			  index: 'youtube.com/', // String that detects type of video (in this case YouTube). Simply via url.indexOf(index).
			  id: 'v=', // String that splits URL in a two parts, second part should be %id%
			  src: '//www.youtube.com/embed/%id%?autoplay=1' // URL that will be set as a source for iframe. 
				},
			}
		}
	});
	$('.product-options li.radio').click(function(){
		$(this).addClass(function() {
			if($(this).hasClass("active")) return "";
			return "active";
		});
		
		$(this).siblings("li").removeClass("active");
		$(this).parent().find('.selected-option').html('<span class="label label-success">'+ $(this).find('img').data('original-title') +'</span>');
	});
	// Product detial reviews button
	$(".reviews_button,.write_review_button").click(function (){
		var tabTop = $(".producttab").offset().top;
		$("html, body").animate({ scrollTop:tabTop }, 1000);
	});
	
	
});







$(document).ready(function() {
	/*var zoomCollection = '.large-image img';
	$( zoomCollection ).elevateZoom({
		zoomType    : "inner",
		lensSize    :"200",
		easing:true,
		gallery:'thumb-slider-vertical',
		cursor: 'pointer',
		galleryActiveClass: "active"
	});
	$('.large-image').magnificPopup({
		items: [
			{src: 'image/catalog/demo/product/funiture/1.jpg' },
			{src: 'image/catalog/demo/product/funiture/2.jpg' },
			{src: 'image/catalog/demo/product/funiture/3.jpg' },
			{src: 'image/catalog/demo/product/funiture/4.jpg' },
			{src: 'image/catalog/demo/product/funiture/5.jpg' },
		],
		gallery: { enabled: true, preload: [0,2] },
		type: 'image',
		mainClass: 'mfp-fade',
		callbacks: {
			open: function() {
				
				var activeIndex = parseInt($('#thumb-slider-vertical .img.active').attr('data-index'));
				var magnificPopup = $.magnificPopup.instance;
				magnificPopup.goTo(activeIndex);
			}
		}
	});*/
	$("#thumb-slider-vertical .owl2-item").each(function() {
		$(this).find("[data-index='0']").addClass('active');
	});
	
	$('.thumb-video').magnificPopup({
	  type: 'iframe',
	  iframe: {
		patterns: {
		   youtube: {
			  index: 'youtube.com/', // String that detects type of video (in this case YouTube). Simply via url.indexOf(index).
			  id: 'v=', // String that splits URL in a two parts, second part should be %id%
			  src: '//www.youtube.com/embed/%id%?autoplay=1' // URL that will be set as a source for iframe. 
				},
			}
		}
	});
	
	$('.product-options li.radio').click(function(){
		$(this).addClass(function() {
			if($(this).hasClass("active")) return "";
			return "active";
		});
		
		$(this).siblings("li").removeClass("active");
		$(this).parent().find('.selected-option').html('<span class="label label-success">'+ $(this).find('img').data('original-title') +'</span>');
	});
	
	var _isMobile = {
	  iOS: function() {
	   return navigator.userAgent.match(/iPhone/i);
	  },
	  any: function() {
	   return (_isMobile.iOS());
	  }
	};
	
	$(".thumb-vertical-outer .next-thumb").click(function () {
		$( ".thumb-vertical-outer .lSNext" ).trigger( "click" );
	});

	$(".thumb-vertical-outer .prev-thumb").click(function () {
		$( ".thumb-vertical-outer .lSPrev" ).trigger( "click" );
	});

	
	
	
	// Product detial reviews button
	$(".reviews_button,.write_review_button").click(function (){
		var tabTop = $(".producttab").offset().top;
		$("html, body").animate({ scrollTop:tabTop }, 1000);
	});
});
	