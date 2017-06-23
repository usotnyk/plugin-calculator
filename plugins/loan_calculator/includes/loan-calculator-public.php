
<!-- HTML FOR THE PLUGIN -->
<div class="cal-plugin margin-8 flex-media dir-row-media margin-5-media just-cont-btw-media">
  <section class="flex-media dir-col-media width-40-media height-media just-cont-cent">
    <div class="margin-bottom-50">
      <label for="amount"> How much do you need? </label>
      <input type="text" id="amount" readonly>
      <div id="slider-amount"></div>
    </div>

    <div class="margin-bottom-50">
      <label for="term"> How much do you need? </label>
      <input type="text" id="term" class="no-border" readonly>
      <div id="slider-term"></div>
    </div>

    <div class="margin-bottom-50">
      <label for="total-loan-amount"> Your estimated bi-weekely payment </label>
    <!--   <p> $4,028 - $4,473 </p> -->
      <!-- dynam amount from js -->
      <p><span id="minimum-payment"></span> - <span id="maximum-payment"></span></p>

      <a href="" class="button">Get Your Free Quote </a>
    </div>
  </section>

  <section class="flex-media dir-col-media width-60-media height-media just-cont-cent-media bg-media">
    <h3> With Lendified you could </h3>
    <h3 class="text-green"> save up to <span id="amount-saved"></span> in interest </h3>
    <img src="bar.png" alt="temporary bar">
    <h6 class="text-center">Estimated Total Interest Cost </h6>
  </section>

</div>