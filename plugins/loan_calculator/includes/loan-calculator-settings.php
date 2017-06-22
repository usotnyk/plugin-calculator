<?php

add_action('admin_init', 'loan_calculator_settings');

function loan_calculator_settings() {

	register_setting( 'loan-calculator-settings-group', 'loan_amount_min');
	register_setting( 'loan-calculator-settings-group', 'loan_amount_max');
	register_setting( 'loan-calculator-settings-group', 'loan_term_min');
	register_setting( 'loan-calculator-settings-group', 'loan_term_max');
	register_setting( 'loan-calculator-settings-group', 'bwp_interest_min');
	register_setting( 'loan-calculator-settings-group', 'bwp_interest_max');
	register_setting( 'loan-calculator-settings-group', 'lendified_interest');
	register_setting( 'loan-calculator-settings-group', 'competitor_one_interest');
	register_setting( 'loan-calculator-settings-group', 'competitor_two_interest');
	register_setting( 'loan-calculator-settings-group', 'pop_up_1');
	register_setting( 'loan-calculator-settings-group', 'pop_up_2');

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


	// Interest Rates Section

	add_settings_section(
		'interest-rates',
		'Interest Rates',
		'interest_description',
		'interest_rates'
	);

	add_settings_field(
		'interest-rate-min',
		'Rate Min',
		'interest_rate_min',
		'interest_rates',
		'interest-rates'
	);

	add_settings_field(
		'interest-rate-max',
		'Rate Max',
		'interest_rate_max',
		'interest_rates',
		'interest-rates'
	);

	add_settings_field(
		'lendified-interest',
		'Lendified Rate',
		'lendified_interest',
		'interest_rates',
		'interest-rates'
	);

	add_settings_field(
		'competitor-interest',
		'Competitor Rate',
		'competitor_interest',
		'interest_rates',
		'interest-rates'
	);

	add_settings_field(
		'merchant-advance-interest',
		'MA Rate',
		'merchant_advance_interest',
		'interest_rates',
		'interest-rates'
	);

	// Pop-up settings

	add_settings_section(
		'pop-up-content',
		'Pop-Up Content',
		'pop_up_description',
		'pop_up_content'
	);

	add_settings_field(
		'pop-up-1',
		'Pop-Up 1 Content',
		'pop_up_1_content',
		'pop_up_content',
		'pop-up-content'
	);

	add_settings_field(
		'pop-up-2',
		'Pop-Up 2 Content',
		'pop_up_2_content',
		'pop_up_content',
		'pop-up-content'
	);
}
// Loan amount functions
function loan_amount_description() {
	echo "Enter your loan amount range here.";
}

function amount_range_min() {
	$loan_amount_min = esc_attr( get_option('loan_amount_min') );
	echo "$ <input type='number' name='loan_amount_min' value='".$loan_amount_min."'/>";
}
function amount_range_max() {
	$loan_amount_max = esc_attr( get_option('loan_amount_max') );
	echo "$ <input type='number' name='loan_amount_max' value='".$loan_amount_max."'/>";
}

// Loan length/term options
function loan_length_description() {
	echo "Enter your loan length range here. (Months)";
}

function length_range_min() {
	$loan_term_min = esc_attr( get_option('loan_term_min') );
	echo "<input type='number' class='term-input' name='loan_term_min' value='".$loan_term_min."'/>";
}
function length_range_max() {
	$loan_term_max = esc_attr( get_option('loan_term_max') );
	echo "<input type='number' class='term-input'  name='loan_term_max' value='".$loan_term_max."'/>";
}

// loan interest functions
function interest_description() {
	echo "Enter your interest rates here.";
}

function interest_rate_min() {
	$interest_rate_min = esc_attr( get_option('bwp_interest_min') );
	echo "<input type='number' name='bwp_interest_min' value='".$interest_rate_min."'/> %";
}
function interest_rate_max() {
	$interest_rate_max = esc_attr( get_option('bwp_interest_max') );
	echo "<input type='number' name='bwp_interest_max' value='".$interest_rate_max."'/> %";
}

function lendified_interest() {
	$lendified_interest = esc_attr( get_option('lendified_interest') );
	echo "<input type='number' name='lendified_interest' value='".$lendified_interest."'/> %";
}
function competitor_interest() {
	$competitor_one_interest = esc_attr( get_option('competitor_one_interest') );
	echo "<input type='number' name='competitor_one_interest' value='".$competitor_one_interest."'/> %";
}

function merchant_advance_interest() {
	$competitor_two_interest = esc_attr( get_option('competitor_two_interest') );
	echo "<input type='number' name='competitor_two_interest' value='".$competitor_two_interest."'/> %";
}

// Pop-up functions
function pop_up_description() {
	echo "Enter your pop-up content here.";
}

function pop_up_1_content() {
	$pop_up_1_content = esc_attr( get_option('pop_up_1') );
	echo "<textarea name='pop_up_1' rows='4' cols='50'>".$pop_up_1_content."</textarea>";
}
function pop_up_2_content() {
	$pop_up_2_content = esc_attr( get_option('pop_up_2') );
	echo "<textarea name='pop_up_2' rows='4' cols='50'>".$pop_up_2_content."</textarea>";
}

get_option('loan-term-length');
?>
