<?php
/*
 * Add my new menu to the Admin Control Panel
 */

// Hook the 'admin_menu' action hook, run the function named 'ges_Add_My_Admin_Link()'
add_action( 'admin_menu', 'ges_Add_My_Admin_Link' );

// Add a new top level menu link
function ges_Add_My_Admin_Link(){
      add_menu_page(
        'Gestion des inscriptions', // Title of the page
        'Gestion des inscriptions', // Text to show on the menu link
        'manage_options', // Capability requirement to see the link
        'gestion/includes/ges-page.php' // The 'slug' - file to display when clicking the link
    );
}
