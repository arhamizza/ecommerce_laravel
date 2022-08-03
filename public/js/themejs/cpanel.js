$(document).ready(function(){
	// tooltips on hover
	$('[data-toggle=\'tooltip\']').tooltip({container: 'body'});
	
	/* Begin: Show hide cpanel */  
	var ua = navigator.userAgent;
    event = (ua.match(/iPad/i)) ? "touchstart" : "click";
	widthC = $('#sp-cpanel').width()+40; 
	$("#sp-cpanel_btn").bind("click", function() {
		$(this).animate({left:"-50px"},function(){
			$("#sp-cpanel").animate({left:"0px"},300);
		  });
	});
	
	$(".sp-cpanel-close").bind("click", function() {
		$("#sp-cpanel").animate({left:-widthC},300,function(){
			$("#sp-cpanel_btn").animate({left:"0px"},850);
		 });
	});
	
	//This function puts all of the params into a js object
	url = window.location.href;
	params = getParams(url);
	//Check value from the URL parameter?
	if (params) {
		var values = Object.keys(params);
		$.each( values, function( key, value ) {
			addValue = params[value];
			
			switch(value) {
				case 'scheme':
					$.cookie('customColorScheme',addValue);
					changeColor(addValue);
					break;
				case 'layoutbox':
					$.cookie('layoutbox',addValue);
					changeLayoutBox(addValue);
					break;
				case 'pattern':
					$.cookie('bgPattern',addValue);
					changePattern(addValue);
			}
		});
	}
	
	//Color Scheme
	$("input.minicolors").minicolors({
		position: "bottom right",
		changeDelay: 200,
		theme: 'bootstrap',
		change: function(hex, opacity){
			$.cookie('customColorScheme', hex);
        }
	});
	

	customColor = $.cookie('customColorScheme');
	if (customColor){
		changeColor(customColor);
	}
	
	//Layout Box
	layoutbox_class = $.cookie('layoutbox');
	if (layoutbox_class) {
		changeLayoutBox(layoutbox_class);
		selectElement(layoutbox_class,"cp-layoutbox");
	}
	
	//Overlay pattern
	$(".group-pattern").find('>.img-pattern').each(function() {
		$(this).bind("click", function() {
			$.cookie('bgPattern',$(this).attr('data-pattern'));
			changePattern($(this).attr('data-pattern'));
			
		});
	});
	bgPattern = $.cookie('bgPattern');
	if (bgPattern && layoutbox_class !='full'){
		changePattern(bgPattern);
	}
	
	//Header Type Change
	/*if (typeof $typeheader === 'undefined' || $typeheader === null) {
		headerTypeChange('header-home1');
	}else{
		headerTypeChange($typeheader);
		selectElement($typeheader,"change_header_type");
	}*/
	
	
});

function getParams(u){
    var theURL = u; 
    var params = {}; 
    var splitURL = theURL.split('?'); 
	
    if (splitURL.length>1 ){ 
        var splitVars = splitURL[1].split('&'); 
        for(var i = 0; i < splitVars.length; i++){ 
            splitPair = splitVars[i].split('='); 
            params[splitPair[0]] = splitPair[1]; }

        return params;
    }
    return false;
}


function changeColor($customColor){
	$('input.minicolors').minicolors('value', $customColor)
}

function changeLayoutBox($mode_class){
    if($mode_class == 'full') $('body').addClass('no-bgbody');
	else $('body').removeClass('no-bgbody');
	$('#wrapper').stripClass('wrapper-').addClass('wrapper-'+$mode_class);
	$.cookie('layoutbox',$mode_class);
}

function changePattern($mode_class){
	$('body').stripClass('pattern').addClass('pattern-'+ $mode_class);
	
	$(".group-pattern").find('> .img-pattern').removeClass('selected');
	$(".group-pattern").find("[data-pattern='" + $mode_class + "']").addClass('selected');
}

function headerTypeChange($header){
	var self = this,HEADER = $('#header');
	
	$('#change_header_type').children('.options_list').children(':first').children('a').addClass('active');
	var $this = $(this),
		url,
		type = "";

		
		$this.addClass('active').parent().siblings().children('a').removeClass('active');
		switch($header){

			case "header-home1" :
				url = "header/header1-container.html";
				type = 'type_1';
				headerStyle ='css/header1.css';
				break;

			case "header-home2" :
				url = "header/header2-container.html";
				type = 'type_2';
				headerStyle ='css/header2.css';
				break;

			case "header-home3" :
				url = "header/header3-container.html";
				type = 'type_3';
				headerStyle ='css/header3.css';
				break;

			case "header-home4" :
				url = "header/header4-container.html";
				type = 'type_4';
				headerStyle ='css/header4.css';
				break;
			
			case "header-home5" :
				url = "header/header5-container.html";
				type = 'type_5';
				headerStyle ='css/header5.css';
				break;
				
			case "header-home6" :
				url = "header/header6-container.html";
				type = 'type_6';
				headerStyle ='css/header6.css';
				break;
			
			case "header-home7" :
				url = "header/header7-container.html";
				type = 'type_7';
				headerStyle ='css/header7.css';
				break;
			
			case "header-home8" :
				url = "header/header8-container.html";
				type = 'type_8';
				headerStyle ='css/header8.css';
				break;
		}

		$('#header').slideUp(function(){
			HEADER.removeClass('type_1 type_2 type_3 type_4 type_5 type_6 type_7 type_8').addClass(type);

			$(this).load(url, function(data){
				
				var linkElem = document.createElement('link');
				document.getElementsByTagName('head')[0].appendChild(linkElem);
				linkElem.rel = 'stylesheet';
				linkElem.type = 'text/css';
				linkElem.href = headerStyle;
				
				$.getScript('js/themejs/so_megamenu.js', function() {
					//console.log('Load was performed.');
				});
				$.getScript('js/themejs/application.js', function() {
					//console.log('Load was performed.');
				});
				$(this).slideDown(function(){
					$(this).find('.dropdown').each(function(){
						Core.mainAnimation.prepareDropdown.call($(this));
					});

				});
				
			});

		});

	

}

function ResetAll(){
	$.removeCookie('customColorScheme', null);
	$.removeCookie('layoutbox', null);
	$.removeCookie('bgPattern', null);
	window.location.reload(true);
}

function selectElement(valueToSelect,layoutbox){
    var element = document.getElementById(layoutbox);
    element.value = valueToSelect;
}

$.fn.stripClass = function (partialMatch, endOrBegin) {
	// The way removeClass should have been implemented -- accepts a partialMatch (like "btn-") to search on and remove
	var x = new RegExp((!endOrBegin ? "\\b" : "\\S+") + partialMatch + "\\S*", 'g');
	this.attr('class', function (i, c) {
		if (!c) return;
		return c.replace(x,'').trim();
	});
	return this;
}
