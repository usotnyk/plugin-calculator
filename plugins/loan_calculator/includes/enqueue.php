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

//Localizing Interest Rates from Admin Settings

wp_localize_script( 'main-calculator-js', 'wp_rates', array(
  'interestMin' => get_option('bwp_interest_min'),
  'interestMax' => get_option('bwp_interest_max'),
  'landifiedInterest' => get_option('lendified_interest'),
  'barOneInterest' => get_option('bar_1_interest'),
  'barTwoInterest' => get_option('bar_2_interest'),
  'barThreeInterest' => get_option('bar_3_interest')
  ) );

//Localizing Loan Amount and Term from Admin Settings

wp_localize_script( 'main-calculator-js', 'wp_ranges', array(
  'loanAmountMin' => get_option('loan_amount_min'),
  'loanAmountMax' => get_option('loan_amount_max'),
  'loanAmountStep' => get_option('loan_amount_step'),
  'loanAmountDefault' => get_option('loan_amount_default'),
  'loanTermMin' => get_option('loan_term_min'),
  'loanTermMax' => get_option('loan_term_max'),
  'loanTermStep' => get_option('loan_term_step'),
  'loanTermDefault' => get_option('loan_term_default')
  ) );

//Localizing Labels and titles from Admin Settings

wp_localize_script( 'main-calculator-js', 'wp_labels', array(
  'barOneLabel' => get_option('bar_1_label'),
  'barTwoLabel' => get_option('bar_2_label'),
  'barThreeLabel' => get_option('bar_3_label'),
  'paymentPopupContent' => get_option('payment_popup'),
  'chartPopupContent' => get_option('chart_popup'),
  'amountLabel' => get_option('amount_label'),
  'termLabel' => get_option('term_label'),
  'paymentLabel' => get_option('payment_label'),
  'buttonLabel' => get_option('button_label'),
  'chartHeading' => get_option('chart_heading'),
  'chartLabel' => get_option('chart_label'),
  ) );
?>
