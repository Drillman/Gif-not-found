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
  
  

  <div class="units-row">
    <h4>Simple Table</h4>
    <hr/>
    <table class="table-simple">
      <thead>
        <tr>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Points</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>John</td>
          <td>Doe</td>
          <td>50</td>
        </tr>
        <tr>
          <td>Jill</td>
          <td>Smith</td>
          <td>94</td>
        </tr>
        <tr>
          <td>Jane</td>
          <td>Doe</td>
          <td>67</td>
        </tr>
      </tbody>
      <tfoot>
        <tr>
          <td colspan="2">Total points</td>
          <td>211</td>
        </tr>
      </tfoot>
    </table>
  </div>

  <?php
}

