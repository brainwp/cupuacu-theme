$(document).ready(function(){

	$('#slider_destaque')
	.anythingSlider({
		width               : 310,
		height              : 225,
		AutoPlay        	: false,
		buildArrows         : true,
		buildNavigation     : false,
		pauseOnHover        : true, 
		delay               : 2500,      // How long between slideshow transitions in AutoPlay mode (in milliseconds)
  		animationTime       : 400,
		tooltipClass        : 'tooltip', // Class added to navigation & start/stop button (text copied to title if it is hidden by a negative text indent)
		navigationFormatter : function(i, panel){
			return ['', '', '', '', ''][i - 1];
		}
	})
	 /* this "custom" code is the equivalent of the base caption functions */
.anythingSliderFx({
   // '.selector' : [ 'caption', 'distance/size', 'time', 'easing' ]
   // 'distance/size', 'time' and 'easing' are optional parameters
   '.caption-top'    : [ 'caption-Top', '50px' ],
   '.caption-right'  : [ 'caption-Right', '130px', '1000', 'easeOutBounce' ],
   '.caption-bottom' : [ 'caption-Bottom', '50px' ],
   '.caption-left'   : [ 'caption-Left', '130px', '1000', 'easeOutBounce' ]
  })
  /* add a close button (x) to the caption */
  .find('div[class*=caption]')
    .css({ position: 'absolute' })
    .prepend('<span class="close">x</span>')
    .find('.close').click(function(){
      var cap = $(this).parent(),
       ani = { bottom : -50 }; // bottom
      if (cap.is('.caption-top')) { ani = { top: -50 }; }
      if (cap.is('.caption-left')) { ani = { left: -150 }; }
      if (cap.is('.caption-right')) { ani = { right: -150 }; }
      cap.animate(ani, 400, function(){ cap.hide(); } );
    });

});