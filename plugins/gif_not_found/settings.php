<?php

function wpln_custom_admin_css() {
  echo '<style type="text/css">

  .plugin-p{
      font-size:16px;
  }
  
  .plugin-strong {
    font-weight: bold; 
  }
  
  .plugin-table {
    background: #f5f5f5;
    border-collapse: separate;
    box-shadow: inset 0 1px 0 #fff;
    font-size: 12px;
    line-height: 24px;
    margin: 30px auto;
    text-align: left;
    width: 800px;
  }	
  
  #plugin-th {
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
    text-align: center;
  }
  
  #plugin-th:after {
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
  
  #plugin-th:first-child {
    border-left: 1px solid #777;	
    box-shadow: inset 1px 1px 0 #999;
  }
  
  #plugin-th:last-child {
    box-shadow: inset -1px 1px 0 #999;
  }
  
  .plugin-td {
    border-right: 1px solid #fff;
    border-left: 1px solid #e8e8e8;
    border-top: 1px solid #fff;
    border-bottom: 1px solid #e8e8e8;
    padding: 10px 15px;
    position: relative;
    transition: all 300ms;
    text-align:center;
  }
  
  .plugin-td:first-child {
    box-shadow: inset 1px 0 0 #fff;
  }	
  
  .plugin-td:last-child {
    border-right: 1px solid #e8e8e8;
    box-shadow: inset -1px 0 0 #fff;
  }	
  
  .plugin-tr {
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
    <p class = "plugin-p">Il y a un shortcode avec 4 atributs optionnels :</p>
    <ul>
        <li>&nbsp;&nbsp;- le thème </li>
        <li>&nbsp;&nbsp;- la largeur du gif </li>
        <li>&nbsp;&nbsp;- la hauteur du gif </li>
        <li>&nbsp;&nbsp;- le nom de la transition souhaité </li>
    </ul>
  
  <p class = "plugin-p"> Il faut utiliser le shortcode suivant : [gif_not_found_slider] </p>

  <table class = "plugin-table">
  <thead>
    <tr class = "plugin-tr">
      <th id="plugin-th">Option</th>
      <th id="plugin-th">Défaut</th>
      <th id="plugin-th">Description</th>
      <th id="plugin-th">Exemple d'utilisation</th>
    </tr>
  </thead>
  <tbody>
    <tr class = "plugin-tr">
      <td class = "plugin-td"><strong class = "plugin-strong">Tag</strong></td>
      <td class = "plugin-td">cat</td>
      <td class = "plugin-td">Vous pouvez choisir le thème que vous voulez en saissisant le Tag dans le shortcode</td>
      <td class = "plugin-td">[gif_not_found_slider tag="dog"]</td>
    </tr>
    <tr class = "plugin-tr">
      <td class = "plugin-td"><strong class = "plugin-strong">Largeur</strong></td>
      <td class = "plugin-td">30vw</td>
      <td class = "plugin-td">Vous pouvez choisir la taille que vous voulez (en px ou en pourcentage de la taille de la fenêtre [vw]) en saissisant la width dans le shortcode</td>
      <td class = "plugin-td">[gif_not_found_slider width="50vw"]</td>
    </tr>
    <tr class = "plugin-tr">
      <td class = "plugin-td"><strong class = "plugin-strong">Hauteur</strong></td>
      <td class = "plugin-td">30vh</td>
      <td class = "plugin-td">Vous pouvez choisir la taille que vous voulez (en px ou en pourcentage de la taille de la fenêtre [vh]) en saissisant la height dans le shortcode</td>
      <td class = "plugin-td">[gif_not_found_slider height="50vh"]</td>
    </tr>
    <tr class = "plugin-tr">
      <td class = "plugin-td"><strong class = "plugin-strong">Nom de transition</strong></td>
      <td class = "plugin-td">slide-left</td>
      <td class = "plugin-td">Vous pouvez choisir le mouvement de transition que vous souhaité (droite à gauche -> slide-left, gauche à droite -> slide-right, haut en bas -> slide-bot, slide-top -> de bas en haut)</td>
      <td class = "plugin-td">[gif_not_found_slider name="slide-bot"]</td>
    </tr>
  </tbody>
</table>

<p class = "plugin-p"> Vous pouvez utiliser les 4 paramètres ensembles séparés par un espace </p>
<p class = "plugin-p"> Exemple : [gif_not_found_slider tag="dog" height="50vh" width="50vw" name="slide-right"]</p>

<p class = "plugin-p"> Un widget a aussi été créé lorsque vous avez installé le plugin. </p>
<p class = "plugin-p"> Il suffit d'ajouter le widget à l'élément que vous voulez. Et ainsi, remplir les champs : </p>
<ul> 
  <li>&nbsp;&nbsp; - le tag  </li>
  <li>&nbsp;&nbsp; - hauteur </li>
  <li>&nbsp;&nbsp; - largeur </li>
  <li>&nbsp;&nbsp; - choix de transition </li>
</ul>

<?php
}

