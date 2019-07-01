<?php
// create custom plugin settings menu
add_action('admin_menu', 'my_cool_plugin_create_menu');

function my_cool_plugin_create_menu() {

	//create new top-level menu
  add_menu_page('Gif not found settings', 'Gif not found', 'administrator', 'gif_not_found_settings', 'elementsPage' );
  add_submenu_page('gif_not_found_settings','Add a new gif', 'Add gif', 'administrator', 'gif_not_found_add', 'addGifPage');

	//call register settings function
	add_action( 'admin_init', 'register_my_cool_plugin_settings' );
}


function register_my_cool_plugin_settings() {
  register_setting('gif_not_found-group', 'elements');
  // register_setting('gif_not_found-group');
  // register_setting('gif_not_found-group');
  // register_setting('gif_not_found-group');
}

function elementsPage(){
  $elements = get_option('elements')
  ?>
  <div class="wrap">
  <h1>Your GIFs</h1>
  <?php do_settings_sections( 'gif_not_found-group' ); ?>
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Shortcode</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach($elements as $element): ?>
      <tr>
        <td><?php echo $element['id']; ?></td>
        <td><?php echo $element['name']; ?></td>
        <td><?php echo $element['shortcode']; ?></td>
      </tr>
    <?php endforeach ?>
    </tbody>
  </table>
  </div>
  <?php
}

function addElementPage(){ ?>
  <div class="wrap">
    <h1>Add a GIF</h1>
    <form action="options.php" method="post">
      <?php settings_fields('gif_not_found-group') ?>
      <?php do_settings_sections( 'gif_not_found-group' ); ?>
      <input type="text" name="">
    </form>
  </div>
<?php }
