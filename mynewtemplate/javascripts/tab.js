var $tab = jQuery.noConflict();
$tab(document).ready(function(){
  "use strict";

    $tab("#tabCtoQ").on('click', function(e)  {
        // var currentAttrValue = jQuery(this).attr('href');
 console.log("test");
		 // Show/Hide Tabs
		$tab('.tabs').siblings().slideUp(400);
		$tab('.tabs').delay(400).slideDown(400);
		
		// jQuery('.tabs ' + currentAttrValue).siblings().slideUp(400);
		// jQuery('.tabs ' + currentAttrValue).delay(400).slideDown(400);

        // Change/remove current tab to active
        $tab(this).parent('li').addClass('active').siblings().removeClass('active');
 
        e.preventDefault();
    });
});