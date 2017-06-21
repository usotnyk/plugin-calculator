jQuery(document).ready(function($) {
  $("#slider").slider({
    range: "min",
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
    range: "min",
    value: 3,
    min: 3,
    max: 24,
    step: 3,
    slide: function(event, ui) {
      $("#term").val(ui.value + " months");
    }
  });
  $("#term").val($("#term-slider").slider("value") + " months");
});
