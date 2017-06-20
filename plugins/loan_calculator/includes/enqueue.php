
<?php
echo plugins_url('loan_calculator');


wp_enqueue_script( 'calculator-script', plugins_url('loan_calculator/public/js/') . 'test.js');

?>