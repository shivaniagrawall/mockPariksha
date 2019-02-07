/*
 * textRotator()
 * url: https://github.com/sturple/textrotator
 * Author Shawn Tuprle
 * version 0.0.1
 */
(function($) {
    $.textRotator = function(element, options) {
        var defaults = {
			random : false,
			fadeIn : 1000,
			fadeOut : 500,
			duration : 5000, 
			easingin : 'swing',
			easingout : 'swing'
        }
        var plugin = this;
        plugin.settings = {}
		plugin.globals = {
			child_select : 1,
			$child_select : null
		}
        var $element = $(element), element = element;    /* reference to the actual DOM element*/
        // the "constructor" method that gets called when the object is created
        plugin.init = function() {
            plugin.settings = $.extend({}, defaults, options);
			if (plugin.settings.random){ plugin._shuffle($element.children());	}
			plugin.globals.$child_select = $element.find('li:nth-child('+ plugin.globals.child_select+')');
			plugin._fadeIn();
		}
		//resizes main image
		plugin._fadeIn = function() {			
			plugin.globals.$child_select.fadeIn({
					duration : plugin.settings.fadeIn,
					easing: plugin.globals.$child_select.data('easingin') ? plugin.globals.$child_select.data('easingin') : plugin.settings.easingin,
					complete: function () {
						if ($element.find('li').length > 1) {plugin._fadeOut();	}						
					}				
				});		 
		}
		plugin._shuffle = function($el) {
			var allElems = $el.get(),
				getRandom = function(max) {	return Math.floor(Math.random() * max);	},
				shuffled = $.map(allElems, function(){
					var random = getRandom(allElems.length),
						randEl = $(allElems[random]).clone(true)[0];
					allElems.splice(random, 1);
					return randEl;
			   });	 
			$el.each(function(i){$(this).replaceWith($(shuffled[i]));});
		}
		
		plugin._fadeOut = function() {
			var sliedDuration = plugin.globals.$child_select.data('duration') ? plugin.globals.$child_select.data('duration') : plugin.settings.duration;
			plugin.globals.$child_select.delay(sliedDuration).fadeOut({
				duration : plugin.settings.fadeOut,
				easing: plugin.globals.$child_select.data('easingout') ? plugin.globals.$child_select.data('easingout') : plugin.settings.easingout,
				complete: function () {
					if  ((plugin.globals.$child_select.index() + 1) == $element.children().length){
                        console.log('last')
						plugin.globals.$child_select = $element.children().first();													
					}
					else {
						plugin.globals.$child_select = plugin.globals.$child_select.next('li');								
					}
					plugin._fadeIn();						
				}				
			});		 			
		}
        plugin.init();
    }
    // add the plugin to the jQuery.fn object
    $.fn.textRotator = function(options) {
        // iterate through the DOM elements we are attaching the plugin to
        return this.each(function() {
            // if plugin has not already been attached to the element
            if (undefined == $(this).data('textRotator')) {
                var plugin = new $.textRotator(this, options);
                $(this).data('textRotator', plugin);
            }
        });
    }
})(jQuery);