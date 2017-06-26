console.log("hello");
// console.log(wp_rates);
//console.log(wp_rates.interestMin);

jQuery(document).ready(function($) {
	$('.outer-bar-1').delay(100).animate({'height': '40%'},800);
	$('.outer-bar-2').delay(200).animate({'height': '70%'},800);
	$('.outer-bar-3').delay(300).animate({'height': '100%'},800);
	$('.hidden').delay(500).animate({'opacity': '1'},800);
	$('.lendified-price').delay(100).fadeIn(800);
	$('.comp-1-price').delay(200).fadeIn(800);
	$('.comp-2-price').delay(300).fadeIn(800);
});


jQuery('#change').mouseup(function($) {
	$('.lendified-price').fadeOut(200).delay(100).fadeIn(800);
	$('.comp-1-price').fadeOut(200).delay(200).fadeIn(800);
	$('.comp-2-price').fadeOut(200).delay(300).fadeIn(800);
	$('.hidden').animate({'opacity': '0'},0).delay(500).animate({'opacity': '1'},800);
	$('.outer-bar-1').animate({'height': '0%'},200).delay(100).animate({'height': '40%'},800);
	$('.outer-bar-2').animate({'height': '0%'},200).delay(200).animate({'height': '70%'},800);
	$('.outer-bar-3').animate({'height': '0%'},200).delay(300).animate({'height': '100%'},800);
});



jQuery( function() {
  $( document ).tooltip();
} );
