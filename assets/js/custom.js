/* Beta Signup */

jQuery(document.body).on('click', 'a#btn-beta-signup', function() {
	jQuery('main').hide();
	jQuery('div#beta-signup').fadeIn();

	jQuery(document).on('keyup', function(e) {
		if (e.keyCode == 27) {
			jQuery('div#beta-signup a').click();
		}
	});
});

jQuery('div#beta-signup a').click(function() {
	jQuery('main').show();
	jQuery('div#beta-signup').fadeOut();
	jQuery(document).off('keyup');
});