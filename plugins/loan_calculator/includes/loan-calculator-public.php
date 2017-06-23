
<!-- HTML FOR THE PLUGIN -->
<div class="cal-plugin flex-media dir-row-media just-cont-btw-media">
  <section class="payment flex-media dir-col-media just-cont-cent">

    <div>
      <label for="amount"> How much do you need? </label>
      <input type="text" id="amount" readonly>
      <div id="slider-amount"></div>
    </div>

    <div>
      <label for="term"> How much do you need? </label>
      <input type="text" id="term" class="no-border" readonly>
      <div id="slider-term"></div>
    </div>

    <div>
      <label for="total-loan-amount"> Your estimated bi-weekely payment </label>
      <!-- <p> $4,028 - $4,473 </p> -->
      <!-- dynam amount from js -->
      <p> <span id="minimum-payment"></span> </p>
      <p> <span id="maximum-payment"></span> </p>
      <a href="" class="button">Get Your Free Quote </a>
    </div>
  </section>

  <section class=" bar-graph flex-media dir-col-media just-cont-cent-media">
      <h3> With Lendified you could </h3>
      <h3> save up to <span id="amount-saved" class="text-green">$13,015</span> in interest </h3>

    <div class="outer-graph">
    	<div class="inner-graph">

    		<div class="outer-bar-1 flex flex-col">
    			<div class="bar-1-title">
    				<img class="hidden title-p" src="https://www.lendified.com/wp-content/uploads/2015/07/lendified-logo-dark@2x.png">
    			</div>
    			<div class="bar-1-column">
    				<p class="column-p lendified-price">$10,000</p>
    			</div>
    			</div>

    			<div class="outer-bar-2 flex flex-col">
      			<div class="bar-2-title">
      				<p class="hidden title-p">Other Online Lenders</p>
      			</div>
      			<div class="bar-2-column">
      				<p class="column-p comp-1-price">$17,500</p>
      			</div>
    			</div>

    			<div class="outer-bar-3 flex flex-col">
      			<div class="bar-3-title">
      				<p class="hidden title-p">Merchant Advance</p>
      			</div>
      			<div class="bar-3-column">
      				<p class="column-p comp-2-price">$23,015</p>
      			</div>
    		 </div>

    	</div>
    </div>

    <!-- <a href="#" id="change">Click</a> -->

    <h6>Estimated Total Interest Cost </h6>
  </section>

</div>
