jQuery(document).ready(function($) {
  $("#slider").slider({
    value: 5000,
    min: 5000,
    max: 150000,
    step: 1000,
    slide: function(event, ui) {
      $("#amount").val("$ " + ui.value);
    }
  });
  $("#amount").val("$" + $("#slider").slider("value"));

  $("#term-slider").slider({
    value: 3,
    min: 3,
    max: 24,
    step: 3,
    slide: function(event, ui) {
      $("#term").val(ui.value + "term");
    }
  });
  $("#term").val($("#term-slider").slider("value") + " months");
});
