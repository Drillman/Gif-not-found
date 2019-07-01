<?php
// create custom plugin settings menu

// add_action('admin_head', 'gif_not_found_admin_stylesheets');

// function gif_not_found_admin_stylesheets()
// {
//     echo '<link rel="stylesheet" href="admin.css" />';
// }

function wpln_custom_admin_css() {
  echo '<style type="text/css">
  body {
    background: #fafafa url(https://jackrugile.com/images/misc/noise-diagonal.png);
    color: #444;
    font: 100%/30px \'Helvetica Neue\', helvetica, arial, sans-serif;
    text-shadow: 0 1px 0 #fff;
  }
  
  strong {
    font-weight: bold; 
  }
  
  em {
    font-style: italic; 
  }
  
  table {
    background: #f5f5f5;
    border-collapse: separate;
    box-shadow: inset 0 1px 0 #fff;
    font-size: 12px;
    line-height: 24px;
    margin: 30px auto;
    text-align: left;
    width: 800px;
  }	
  
  th {
    background: url(https://jackrugile.com/images/misc/noise-diagonal.png), linear-gradient(#777, #444);
    border-left: 1px solid #555;
    border-right: 1px solid #777;
    border-top: 1px solid #555;
    border-bottom: 1px solid #333;
    box-shadow: inset 0 1px 0 #999;
    color: #fff;
    font-weight: bold;
    padding: 10px 15px;
    position: relative;
    text-shadow: 0 1px 0 #000;	
  }
  
  th:after {
    background: linear-gradient(rgba(255,255,255,0), rgba(255,255,255,.08));
    content: \'\';
    display: block;
    height: 25%;
    left: 0;
    margin: 1px 0 0 0;
    position: absolute;
    top: 25%;
    width: 100%;
  }
  
  th:first-child {
    border-left: 1px solid #777;	
    box-shadow: inset 1px 1px 0 #999;
  }
  
  th:last-child {
    box-shadow: inset -1px 1px 0 #999;
  }
  
  td {
    border-right: 1px solid #fff;
    border-left: 1px solid #e8e8e8;
    border-top: 1px solid #fff;
    border-bottom: 1px solid #e8e8e8;
    padding: 10px 15px;
    position: relative;
    transition: all 300ms;
  }
  
  td:first-child {
    box-shadow: inset 1px 0 0 #fff;
  }	
  
  td:last-child {
    border-right: 1px solid #e8e8e8;
    box-shadow: inset -1px 0 0 #fff;
  }	
  
  tr {
    background: url(https://jackrugile.com/images/misc/noise-diagonal.png);	
  }
  </style>';
}
add_action('admin_head', 'wpln_custom_admin_css');

add_action('admin_menu', 'my_cool_plugin_create_menu');

function my_cool_plugin_create_menu() {
  add_menu_page('Documentation', 'Gif not found', 'administrator', 'gif_not_found_settings', 'elementsPage' );
}

function elementsPage(){
  ?>
  <h1>Documentation du plugin Gif not found</h1>
  <p> pour utiliser le pluging il faut utiliser les shortcodes suivant : </p>
  
  

  <table>
  <thead>
    <tr>
      <th>Option</th>
      <th>Default</th>
      <th>Description</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><strong>showSpeed</strong></td>
      <td>15</td>
      <td>The speed of the show/reveal</td>
    </tr>
    <tr>
      <td><strong>showEasing</strong></td>
      <td>'linear'</td>
      <td>The easing of the show/reveal</td>
    </tr>
    <tr>
      <td><strong>hideSpeed</strong></td>
      <td>50</td>
      <td>The speed of the hide/conceal</td>
    </tr>
    <tr>
      <td><strong>hideEasing</strong></td>
      <td>'linear'</td>
      <td>The easing of the hide/conceal</td>
    </tr>					
    <tr>
      <td><strong>width</strong></td>
      <td>'auto'</td>
      <td>The width that the data will be truncated to - <em>('auto' or px amount)</em></td>
    </tr>
    <tr>
      <td><strong>ellipsis</strong></td>
      <td>true</td>
      <td>Set to true to enable the ellipsis</td>
    </tr>
    <tr>
      <td><strong>title</strong></td>
      <td>false</td>
      <td>Set to true to show the full data on hover</td>
    </tr>
    <tr>
      <td><strong>afterShow</strong></td>
      <td> $.noop</td>
      <td>The callback fired after the show/reveal</td>
    </tr>
    <tr>
      <td><strong>afterHide</strong></td>
      <td>$.noop</td>
      <td>The callback fired after the hide/conceal</td>
    </tr>
  </tbody>
</table>

  <?php
}

