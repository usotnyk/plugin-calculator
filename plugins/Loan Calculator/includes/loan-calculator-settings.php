<?php

add_action('admin_init', 'loan_calculator_settings');

function loan_calculator_settings() {

	register_setting( 'loan-calculator-settings-group', 'loan_amount_min');
	register_setting( 'loan-calculator-settings-group', 'loan_amount_max');
	register_setting( 'loan-calculator-settings-group', 'loan_length_min');
	register_setting( 'loan-calculator-settings-group', 'loan_length_max');

	// Loan amount settings section

	add_settings_section(
		'loan-amount-options',
		'Loan Amount Range',
		'loan_amount_description',
		'loan_amount_options'
	);

	add_settings_field(
		'loan-amount-min',
		'Loan Amount Min', 
		'amount_range_min', 
		'loan_amount_options', 
		'loan-amount-options'
	);

	add_settings_field(
		'loan-amount-max',
		'Loan Amount Max', 
		'amount_range_max', 
		'loan_amount_options', 
		'loan-amount-options'
	);

	// Loan length settings section

	add_settings_section(
		'loan-length-options',
		'Loan Length Range',
		'loan_length_description',
		'loan_length_options'
	);

	add_settings_field(
		'loan-length-min',
		'Loan Length Min', 
		'length_range_min', 
		'loan_length_options', 
		'loan-length-options'
	);

	add_settings_field(
		'loan-length-max',
		'Loan Length Max', 
		'length_range_max', 
		'loan_length_options', 
		'loan-length-options'
	);
} 

function loan_amount_description() {
	echo "Enter your loan amount range here.";
}

function amount_range_min() {
	$loan_amount_min = esc_attr( get_option('loan_amount_min') );
	echo "<input type='text' name='loan_amount_min' value='".$loan_amount_min."'/>";
}
function amount_range_max() {
	$loan_amount_max = esc_attr( get_option('loan_amount_max') );
	echo "<input type='text' name='loan_amount_max' value='".$loan_amount_max."'/>";
}

function loan_length_description() {
	echo "Enter your loan length range here.";
}

function length_range_min() {
	$loan_length_min = esc_attr( get_option('loan_length_min') );
	echo "<input type='text' name='loan_length_min' value='".$loan_length_min."'/>";
}
function length_range_max() {
	$loan_length_max = esc_attr( get_option('loan_length_max') );
	echo "<input type='text' name='loan_length_max' value='".$loan_length_max."'/>";
}


?>