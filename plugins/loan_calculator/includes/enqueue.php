
<?php
echo plugins_url('loan_calculator');


wp_enqueue_script( 'calculator-script', plugins_url('loan_calculator/public/js/') . 'test.js');


/* FOLLOWING ENQUEUE(s) ARE FOR THE SLIDER */
if (!is_admin){
wp_enqueue_style ('slider-style', plugins_url('loan_calculator/public/css/') . 'sliderstyle.css'); }

wp_enqueue_style ('jquery-ui-css', 'https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css');

wp_enqueue_script ('jquery', 'https://code.jquery.com/jquery-1.12.4.js', array('jquery'), 3.3, true); // or null, null, true

wp_enqueue_script ('jquery-ui-js', 'https://code.jquery.com/ui/1.12.1/jquery-ui.js', array('jquery'), 3.3, true); // or null, null, true

wp_enqueue_script ('jquery-ui-touch-punch', 'https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js', array('jquery'), 3.3, true); // or null, null, true

wp_enqueue_script ('slider-script', plugins_url('loan_calculator/public/js/') . 'slider.js');

wp_enqueue_script ('test-script', plugins_url('loan_calculator/public/js/') . 'test.js');
?>
