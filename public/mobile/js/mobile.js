/* ------------------------------------------------------ /
	Magentech jQuery
	Created by Magentech
	All rights reserved.
	+----------------------------------------------------+
		TABLE OF CONTENTS
	+----------------------------------------------------+
	
	[1]		Back To Top 
	[2]		Button Collapse 
	[3]		Contentslider - OwlCarousel2
	[4]		Quantity plus minus - Product Detail
	[5]		Resonsive Sidebar aside
	[6]		Custom - Product Detail
	
/ ---------------------------------------------------- */

/* Back To Top 
 ========================================================*/
$(function ($) {
    "use strict";
	$(".back-to-top").addClass("hidden-top");
	$('.content').scroll(function () {
		if ($(this).scrollTop() === 0) {
			$(".back-to-top").addClass("hidden-top")
		} else {
			$(".back-to-top").removeClass("hidden-top")
		}
	});

	$('.back-to-top').click(function () {
		$('.content').animate({scrollTop:0}, 1200);
		return false;
	});	
	
});

/* Button Collapse  
 ========================================================*/
$(function ($) {
    "use strict";
	$('body').delegate('.btn-collapse','click',function(){
		$(this).toggleClass('active');
	});
});	

/* Contentslider - OwlCarousel2
 ========================================================*/
$(function ($) {
    "use strict";
    
	$('.contentslider').each(function () {
		var $slider = $(this),
			$panels = $slider.children('div'),
			data = $slider.data(),
			$totalItem = $panels.length;
		// Apply Owl Carousel
		$slider.on("initialized.owl.carousel2", function () {
			 setTimeout(function() {
               $slider.parent().find('.loading-placeholder').hide();
            }, 1000);
			
		});
		$slider.owlCarousel2({
			responsiveClass: true,
			mouseDrag: true,
			video:true,
			autoWidth: (data.autowidth == 'yes') ? true : false,
			rtl: (data.rtl == 'yes') ? true : false,
			animateIn: data.transitionin,
    		animateOut: data.transitionout,
    		lazyLoad: (data.lazyload == 'yes') ? true : false,
			autoplay: (data.autoplay == 'yes') ? true : false,
			autoHeight: (data.autoheight == 'yes') ? true : false,
			autoplayTimeout: data.delay * 1000,
			smartSpeed: data.speed * 1000,
			autoplayHoverPause: (data.hoverpause == 'yes') ? true : false,
			center: (data.center == 'yes') ? true : false,
			loop: (data.loop == 'yes') ? true : false,
            dots: (data.pagination == 'yes') ? true : false,
            nav: (data.arrows == 'yes') ? true : false,
			dotClass: "owl2-dot",
			dotsClass: "owl2-dots",
            margin: data.margin,
			navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
			navClass: ["owl2-prev", "owl2-next"],
			responsive: {
				0: {
					items	: data.item_xs,
				},
				370: {
					items	: data.item_sm,
				}
			}
		});
		

	});
});

/* Quantity plus minus - Product Detail
 ========================================================*/
$(function ($) {
    "use strict";
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
    $.initSelect($(".btn-select"))
});


/* Resonsive Sidebar aside
 ========================================================*/
$(document).ready(function(){
	$(".open-sidebar").click(function(e){
        e.preventDefault();
        $(".sidebar-overlay").toggleClass("show");
        $(".sidebar-offcanvas").toggleClass("active");
    });
      
    $(".sidebar-overlay").click(function(e){
        e.preventDefault();
        $(".sidebar-overlay").toggleClass("show");
        $(".sidebar-offcanvas").toggleClass("active");
    });
    $('#close-sidebar').click(function() {
        $('.sidebar-overlay').removeClass('show');
        $('.sidebar-offcanvas').removeClass('active');
        
    }); 
});


/* ---------------------------------------------------
	Range slider && Filter  Reset
-------------------------------------------------- */
$(document).ready(function(){
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




/* Custom - Product Detail
 ========================================================*/
 
$('.product-options li.radio').click(function(){
	$(this).addClass(function() {
		if($(this).hasClass("active")) return "";
		return "active";
	});
	
	$(this).siblings("li").removeClass("active");
	$(this).parent().find('.selected-option').html('<span class="label label-success">'+ $(this).find('img').data('original-title') +'</span>');
});
	