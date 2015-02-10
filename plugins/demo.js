/*!
 * jQuery Cookie Plugin v1.3
 * https://github.com/carhartl/jquery-cookie
 *
 * Copyright 2011, Klaus Hartl
 * Dual licensed under the MIT or GPL Version 2 licenses.
 * http://www.opensource.org/licenses/mit-license.php
 * http://www.opensource.org/licenses/GPL-2.0
 */
(function ($, document, undefined) {

	var pluses = /\+/g;

	function raw(s) {
		return s;
	}

	function decoded(s) {
		return decodeURIComponent(s.replace(pluses, ' '));
	}

	var config = $.cookie = function (key, value, options) {

		// write
		if (value !== undefined) {
			options = $.extend({}, config.defaults, options);

			if (value === null) {
				options.expires = -1;
			}

			if (typeof options.expires === 'number') {
				var days = options.expires, t = options.expires = new Date();
				t.setDate(t.getDate() + days);
			}

			value = config.json ? JSON.stringify(value) : String(value);

			return (document.cookie = [
				encodeURIComponent(key), '=', config.raw ? value : encodeURIComponent(value),
				options.expires ? '; expires=' + options.expires.toUTCString() : '', // use expires attribute, max-age is not supported by IE
				options.path    ? '; path=' + options.path : '',
				options.domain  ? '; domain=' + options.domain : '',
				options.secure  ? '; secure' : ''
			].join(''));
		}

		// read
		var decode = config.raw ? raw : decoded;
		var cookies = document.cookie.split('; ');
		for (var i = 0, parts; (parts = cookies[i] && cookies[i].split('=')); i++) {
			if (decode(parts.shift()) === key) {
				var cookie = decode(parts.join('='));
				return config.json ? JSON.parse(cookie) : cookie;
			}
		}

		return null;
	};

	config.defaults = {};

	$.removeCookie = function (key, options) {
		if ($.cookie(key) !== null) {
			$.cookie(key, null, options);
			return true;
		}
		return false;
	};

})(jQuery, document);


/*-----------------------------------------------------------------------------------
/* Style Switcher
-----------------------------------------------------------------------------------*/

$(document).ready(function(){ 

$('#styleswitcher h2 a').click(function(e){
	e.preventDefault();
	var div = $('#styleswitcher');
	if (div.css('left') === '0px') {
			$('#styleswitcher').animate({
			left: '-180px'
	}); 
	} else {
		$('#styleswitcher').animate({
			left: '0px' 
		});
	}
});

/* Layouts */
$('.fullwidth').click(function() {		
	$('body').addClass('fullwidth');
});
$('.boxed').click(function() {	
	$('body').removeClass('fullwidth');
});
	
/* Colors */
var cookieName = 'themes';

function changeLayout(colorsid) {
$.cookie(cookieName, colorsid);
	$('head link[id=themes]').attr('href', 'css/themes/' + colorsid + '.css');
}

if( $.cookie(cookieName)) {
	changeLayout($.cookie(cookieName));
}

$(".green").click( function(){ $
	changeLayout('green');
});

$(".blue").click( function(){ $
	changeLayout('blue');
});

$(".red").click( function(){ $
	changeLayout('red');
});

$(".pink").click( function(){ $
	changeLayout('pink');
});

$('.bg li a').click(function(e){
	var bg = $(this).css('backgroundImage');
	$('body').css('backgroundImage',bg);
	return false;
});	

$('.modal-sample').on('click', function() {
		var effect  = $(this).html();
		var modal='<div class="modal myModalSample" tabindex="-1" data-effect="fadeIn" role="dialog" aria-labelledby="myModalSample" aria-hidden="true"><div class="modal-dialog"><div class="modal-content  animated ' + effect + '"><div class="modal-header"><button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button><h4 class="modal-title" id="myModalSampleLabel">'+ effect +' modal effect</h4></div><div class="modal-body"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nec mattis odio. In hac habitasse platea dictumst. Vestibulum volutpat pretium porta. Cras mattis metus non ipsum porttitor pulvinar. Proin tempus erat ac neque gravida suscipit. Morbi faucibus turpis a turpis hendrerit sodales sed vel nisl. Praesent vitae magna luctus, blandit quam eu, semper mi.</p></div></div></div></div>';
		$(this).after( modal );
		$('.myModalSample').on('hidden.bs.modal', function (e) {
			$(this).remove( );
		});
});
		
});

