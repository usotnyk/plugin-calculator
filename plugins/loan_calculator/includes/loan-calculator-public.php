
<?php
	echo get_option('lend_amount_start');
	echo get_option('lend_amount_end');
  echo "Julia";
  //require 'enqueue.php';
?>

<!-- HTML FOR THE PLUGIN -->

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<!-- <link rel="stylesheet" href="./wp-content/plugins/loan_calculator/public/css/sliderstyle.css"> -->
		<!-- <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>
		<script type="text/javascript" href="./wp-content/plugins/loan_calculator/public/js/slider.js"> -->

		</script>
		<title></title>
	</head>
<body class="margin-5 flex-media dir-row-media margin-5-media just-cont-btw-media">
  <section class="flex-media dir-col-media width-40-media height-media just-cont-cent">
    <div class="margin-bottom-50">
      <label for="amount"> How much do you need? </label>
      <input type="text" id="amount" readonly>
      <div id="slider"></div>
    </div>

    <div class="margin-bottom-50">
      <label for="term"> How much do you need? </label>
      <input type="text" id="term" readonly>
      <div id="term-slider"></div>
    </div>

    <div class="margin-bottom-50">
      <label for="total-loan-amount"> Your estimated bi-weekely payment </label>
      <p> $4,028 - $4,473 </p>
      <!-- dynam amount from js -->
      <!-- <p> <span id="totalAmountMin"></span> </p>
      <p> <span id="totalAmountMax "></span> </p> -->

      <a href="" class="button">Get Your Free Quote </a>
    </div>
  </section>

  <section class="flex-media dir-col-media width-60-media height-media just-cont-cent-media bg-media">
    <h3> With Lendified you could </h3>
    <h3 class="text-green"> save up to <span id="amount-saved">$13,015</span> in interest </h3>
    <img src="bar.png" alt="temporary bar">
    <h6 class="text-center">Estimated Total Interest Cost </h6>
  </section>

</body>
</html>
