<?php

if(!is_admin()){
  /* FOLLOWING ENQUEUE(s) ARE FOR THE SLIDER */

  wp_enqueue_style ('jquery-ui-css', 'https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css');

  wp_enqueue_style ('slider-style', plugins_url('loan_calculator/public/css/') . 'sliderstyle.css');

  wp_enqueue_script ('jquery', 'https://code.jquery.com/jquery-1.12.4.js', array('jquery'), 3.3, true);

  wp_enqueue_script ('jquery-ui-js', 'https://code.jquery.com/ui/1.12.1/jquery-ui.js', array('jquery'), 3.3, true);

  wp_enqueue_script ('jquery-ui-touch-punch', 'https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js', array('jquery'), 3.3, true);

  wp_enqueue_script ('bars-js', plugins_url('loan_calculator/public/js/') . 'test.js');

  wp_enqueue_script ('main-calculator-js', plugins_url('loan_calculator/public/js/') . 'main_calculator.js');
}

wp_localize_script( 'main-calculator-js', 'wp_rates', array(
  'interestMin' => get_option('bwp_interest_min'),
  'interestMax' => get_option('bwp_interest_max'),
  'landifiedInterest' => get_option('lendified_interest'),
  'competitorOneInterest' => get_option('competitor_one_interest'),
  'competitorTwoInterest' => get_option('competitor_two_interest')
  ) );

wp_localize_script( 'main-calculator-js', 'wp_ranges', array(
  'loanAmountMin' => get_option('loan_amount_min'),
  'loanAmountMax' => get_option('loan_amount_max'),
  'loanTermMin' => get_option('loan_term_min'),
  'loanTermMax' => get_option('loan_term_max')
  ) );
?>
