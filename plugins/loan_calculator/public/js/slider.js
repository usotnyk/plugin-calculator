jQuery(document).ready(function($) {
<<<<<<< HEAD
  $("#amount-slider").slider({
=======
  for(key in wp_ranges) {
    wp_ranges[key] = parseInt(wp_ranges[key]);
  } 

  $("#slider-amount").slider({
>>>>>>> 5d616db33ebddfc72b6fdf6fff0cc8d7e296c71f
    range: "min",
    value: 75000,
    min: wp_ranges.loanAmountMin,
    max: wp_ranges.loanAmountMax,
    step: 1000,
    slide: function(event, ui) {
      $("#amount").val("$" + ui.value.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
    }
  });
<<<<<<< HEAD
  $("#amount").val("$" + $("#amount-slider").slider("value"));
=======
  $("#amount").val("$" + $("#slider-amount").slider("value").toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
>>>>>>> 5d616db33ebddfc72b6fdf6fff0cc8d7e296c71f

  $("#slider-term").slider({
    range: "min",
    value: 3,
    min: wp_ranges.loanTermMin,
    max: wp_ranges.loanTermMax,
    step: 3,
    slide: function(event, ui) {
      $("#term").val(ui.value + " months");
    }
  });
  $("#term").val($("#slider-term").slider("value") + " months");

});
