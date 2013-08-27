
jQuery(document).ready(function() {
	jQuery('.fp-slides').cycle({
		fx: 'fade',
		timeout: 4000,
		delay: 0,
		speed: 1000,
		next: '.fp-next',
		prev: '.fp-prev',
		pager: '.fp-pager',
		continuous: 0,
		sync: 1,
		pause: 1,
		pauseOnPagerHover: 1,
		cleartype: true,
		cleartypeNoBg: true,
	});
   // When site loaded, load the Popupbox First
       // loadPopupBox();
    $("#quickform").validate();
 });


