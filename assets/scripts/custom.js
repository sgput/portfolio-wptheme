jQuery('.mobile-burger').click(function() {
	jQuery('.bar-left').toggleClass('rotateL');
	jQuery('.bar-middle').toggleClass('box-out');
	jQuery('.bar-right').toggleClass('rotateR');
	jQuery('.mobile-menu').toggle(50);
});


// Back to top

jQuery(window).scroll(function() {
if (jQuery(this).scrollTop() > 350) {
	jQuery('.back-to-top').fadeIn(500);
} else {
	jQuery('.back-to-top').fadeOut(500);
}
});

jQuery('.back-to-top').click(function(event) {
	event.preventDefault();
	jQuery('html, body').animate({opacity:0.5, scrollTop:0}, 'slow');
	return false;
});