<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://redacademy.com/
 * @since      1.0.0
 *
 * @package    Loan_Calculator
 * @subpackage Loan_Calculator/admin/partials
 */
?>

<div class="wrap">
    <h1><?= esc_html(get_admin_page_title()); ?></h1>
    <?php settings_errors(); ?>
    <p>Copy and paste the following shortcode onto the page where you would like the loan calculator to appear: [loan-calculator]</p>
    <p><span class="required">*</span> Indicates a required field.</p>
    <form action="options.php" method="post">
        <?php 
        	settings_fields('loan-calculator-settings-group');
        	echo "<div class='flex flex-space-between padding-top-sm'>";
            echo "<div class='settings-group width-50'>";
            do_settings_sections('interest_rates');
            echo "</div>";
            echo "<div class='settings-group width-50'>";
            do_settings_sections('labels');
            echo "</div>";
            echo "</div>";
            echo "<div class='flex flex-space-between'>";
        	echo "<div class='settings-group width-25'>";
        	do_settings_sections('loan_amounts');
        	echo "</div>";
            echo "<div class='settings-group width-25'>";
        	do_settings_sections('loan_terms');
            echo "</div>";
            echo "<div class='settings-group width-50'>";
            do_settings_sections('pop_ups');
            echo "</div>";
            echo "</div>";
            echo "<div class='settings-group width-50''>";
            do_settings_sections('links');
            echo "</div>";
        	submit_button('Save Settings');
        ?>
    </form>
</div>