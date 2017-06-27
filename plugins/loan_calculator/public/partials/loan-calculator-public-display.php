<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       http://redacademy.com/
 * @since      1.0.0
 *
 * @package    Loan_Calculator
 * @subpackage Loan_Calculator/public/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<!-- HTML FOR THE PLUGIN -->
<div class="cal-plugin flex-media dir-row-media just-cont-btw-media">
  <section class="payment flex-media dir-col-media just-cont-cent">

    <div>
      <label for="amount"><?php echo get_option('amount_label'); ?></label>
      <input type="text" id="amount" readonly>
      <div id="slider-amount"></div>
    </div>

    <div>
      <label for="term"><?php echo get_option('term_label'); ?></label>
      <input type="text" id="term" class="no-border" readonly>
      <div id="slider-term"></div>
    </div>

    <div>
      <label for="total-loan-amount"><?php echo get_option('payment_label'); ?>   <span role="tooltip" class="fa fa-question-circle-o" aria-hidden="true" title="bi-weekly payment"></span> </label>
      <p> <span id="minimum-payment"></span> -  <span id="maximum-payment"></span> </p>
      <a href="<?php echo get_option('button_link'); ?>" class="button"><?php echo get_option('button_label'); ?></a>
    </div>
  </section>

  <section class=" bar-graph flex-media dir-col-media just-cont-btw-media">
      <h3><?php echo get_option('chart_heading'); ?></h3>

    <div class="outer-graph">
    	<div class="inner-graph">

    		<div class="outer-bar-1 flex flex-col">
    			<div class="bar-1-title">
    				<?php
    					if (get_option('bar_1_label') == 'Lendified') {
    						echo "<img class='hidden title-p' src='https://www.lendified.com/wp-content/uploads/2015/07/lendified-logo-dark@2x.png'>";
    					} else {
      						echo "<p class='hidden title-p'>".get_option('bar_1_label')."</p>";
    					}
    				?>
    			</div>
    			<div class="bar-1-column">
    				<p class="column-p lendified-price" id="bar-one-cost"></p>
    			</div>
    			</div>

    			<div class="outer-bar-2 flex flex-col">
      			<div class="bar-2-title">
      				<p class="hidden title-p"><?php echo get_option('bar_2_label'); ?></p>
      			</div>
      			<div class="bar-2-column">
      				<p class="column-p comp-1-price" id="bar-two-cost"></p>
      			</div>
    			</div>

    			<div class="outer-bar-3 flex flex-col">
      			<div class="bar-3-title">
      				<p class="hidden title-p"><?php echo get_option('bar_3_label'); ?></p>
      			</div>
      			<div class="bar-3-column">
      				<p class="column-p comp-2-price" id="bar-three-cost"></p>
      			</div>
    		 </div>

    	</div>
    </div>

    <!-- <a href="#" id="change">Click</a> -->

    <h6><?php echo get_option('chart_label'); ?> <span role="tooltip" class="fa fa-question-circle-o" aria-hidden="true" title="Total interest cost "></span> </h6>
  </section>

</div>
