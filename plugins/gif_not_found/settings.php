<?php

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
    <p>Il y a un shortCode avec 3 atributs optionnels :</p>
    <p>&nbsp;&nbsp;&nbsp;&nbsp; - le thème </p>
    <p>&nbsp;&nbsp;&nbsp;&nbsp; - la largeur du gif </p>
    <p>&nbsp;&nbsp;&nbsp;&nbsp; - la hauteur du gif </p>
  
  <p>pour utiliser le pluging il faut utiliser le shortcode suivant : [gif_not_found_slider] </p>

  <table>
  <thead>
    <tr>
      <th>Option</th>
      <th>Défaut</th>
      <th>Description</th>
      <th>Exemple d'utilisation</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><strong>Tag</strong></td>
      <td>cat</td>
      <td>Vous pouvez choisir le thème que vous voulez en saissisant le Tag dans le shortCode</td>
      <td>[gif_not_found_slider tag="dog"]</td>
    </tr>
    <tr>
      <td><strong>Largeur</strong></td>
      <td>30vw</td>
      <td>Vous pouvez choisir la taille que vous voulez (en px ou en pourcentage de la taille de la fenêtre [vw]) en saissisant la width dans le shortCode</td>
      <td>[gif_not_found_slider width="50vw"]</td>
    </tr>
    <tr>
      <td><strong>Hauteur</strong></td>
      <td>30vh</td>
      <td>Vous pouvez choisir la taille que vous voulez (en px ou en pourcentage de la taille de la fenêtre [vh]) en saissisant la height dans le shortCode</td>
      <td>[gif_not_found_slider height="50vh"]</td>
    </tr>
  </tbody>
</table>

<p> Vous pouvez utiliser les 3 paramètres ensembles séparés par un espace </p>
<p> Exemple : [gif_not_found_slider tag="dog" height="50vh" width="50vw"]</p>

<br>


  <?php
}

