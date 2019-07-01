<?php
// create custom plugin settings menu
add_action('admin_menu', 'my_cool_plugin_create_menu');

function my_cool_plugin_create_menu() {

	//create new top-level menu
  add_menu_page('Gif not found settings', 'Gif not found', 'administrator', 'gif_not_found_settings', 'elementsPage' );
  // add_submenu_page('gif_not_found_settings','Add a new gif', 'Add gif', 'administrator', 'gif_not_found_add', 'addGifPage');

	//call register settings function
	// add_action( 'admin_init', 'register_my_cool_plugin_settings' );
}


// function register_my_cool_plugin_settings() {
//   register_setting('gif_not_found-group', 'elements');
// }

function elementsPage(){
  ?>
  <h1>Documentation du plugin Gif not found</h1>
  <p> pour utiliser le pluging il faut utiliser les shortcodes suivant : </p>
  
  <table>
    <thead>
        <tr>
            <th colspan="2">The table header</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>The table body</td>
            <td>with two columns</td>
        </tr>
    </tbody>
</table>
  <?php
}

