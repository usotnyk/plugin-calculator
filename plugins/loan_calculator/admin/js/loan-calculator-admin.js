(function( $ ) {
	'use strict';

	console.log("js for admin");
    jQuery(document).ready(function($) {
        jQuery("#amount_placeholder").click(function() {
            //console.log("clicking");
            var $txt = jQuery("#txt");
            console.log($txt);
            var caretPos = $txt[0].selectionStart;
            var textAreaTxt = $txt.val();
            var txtToAdd = "<span id='?'></span>";
            $txt.val(textAreaTxt.substring(0, caretPos) + txtToAdd + textAreaTxt.substring(caretPos) );
        });
    });

})( jQuery );
