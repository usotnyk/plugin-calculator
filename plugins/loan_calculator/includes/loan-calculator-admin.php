<div class="wrap">
    <h1><?= esc_html(get_admin_page_title()); ?></h1>
    <?php settings_errors(); ?>
    <form action="options.php" method="post">
        <?php 
        	settings_fields('loan-calculator-settings-group');
            echo "<div class='settings-group width-50'>";
            do_settings_sections('interest_rates');
            echo "</div>";
        	echo "<div class='settings-group'>";
        	do_settings_sections('loan_amounts');
        	echo "</div>";
            echo "<div class='settings-group'>";
        	do_settings_sections('loan_terms');
            echo "</div>";
            echo "<div class='settings-group'>";
            do_settings_sections('pop_ups');
            echo "</div>";
            echo "<div class='settings-group'>";
            do_settings_sections('labels');
            echo "</div>";
        	submit_button('Save Settings');
        ?>
    </form>
</div>