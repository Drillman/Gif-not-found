<?php class Gif_not_found extends WP_Widget {
 
 // Configuration globale du widget
 function __construct() {

         $widget_args = array(
                 'classname' => 'Gif_not_found',
                 'description' => 'Gif_not_found'
         );

         $control_args = array(
                 'width' => 350
         );

         parent::__construct(
                 'gif_not_found_widget',
                 __('Image animée aléatoire'),
                 $widget_args,
                 $control_args
         );
 }

 // Affichage en front-end
 function widget($args, $instance) {
        extract($args);
        $tag = strip_tags($instance['tag']);
        $height = strip_tags($instance['height']);
        $width = strip_tags($instance['width']);
        $name = strip_tags($instance['name']);
        echo "<div id='gif_not_found_slider_widget'></div><input id='gif_not_found_slider_widget_data' type='hidden' data-tag='$tag' data-width='$width' data-height='$height' data-name='$name'/>";
    
 }

 // Traitement des données avant sauvegarde
 function update( $new_instance, $old_instance ) {
         $new_instance['tag'] = strip_tags($new_instance['tag']);
         $new_instance['height'] = strip_tags($new_instance['height']);
         $new_instance['width'] = strip_tags($new_instance['width']);
         $new_instance['name'] = strip_tags($new_instance['name']);
         return $new_instance;
 }

 // Affichage du formulaire de réglages du widget en back-end
 function form($instance) {
         $instance = wp_parse_args(
                 $instance,
                 array(
                         'tag'    => 'cat',
                         'height' => '30vh',
                         'width'  => '30vw',
                         'name'   => 'slide-left'  
                 )
         );

         $tag = strip_tags($instance['tag']);
         $height = strip_tags($instance['height']);
         $width = strip_tags($instance['width']);
         $name = strip_tags($instance['name']);
         ?>

         <p>
                 <label for="<?php echo $this->get_field_id('tag'); ?>">Tag :</label>
                 <input id="<?php echo $this->get_field_id('tag'); ?>" name="<?php echo $this->get_field_name('tag'); ?>" type="text" value="<?php echo esc_attr($tag); ?>" />
         </p>
         <p>
                 <label for="<?php echo $this->get_field_id('height'); ?>">Hauteur :</label>
                 <input id="<?php echo $this->get_field_id('height'); ?>" name="<?php echo $this->get_field_name('height'); ?>" type="text" value="<?php echo esc_attr($height); ?>" />
        </p>
        <p>
                <label for="<?php echo $this->get_field_id('width'); ?>">Largeur :</label>
                <input id="<?php echo $this->get_field_id('width'); ?>" name="<?php echo $this->get_field_name('width'); ?>" type="text" value="<?php echo esc_attr($width); ?>" />
        </p>
        <p>
            <?php
                $transitions = [
                    'slide-left' => 'Slide de droite à gauche',
                    'slide-right' => 'Slide de gauche à droite',
                    'slide-top' => 'Slide de haut en bas',
                    'slide-bot' => 'Slide de bas en haut'
                ];
            ?>
            <label for="<?php echo $this->get_field_id('name'); ?>">Choix de transition :</label> 
            <select id="<?php echo $this->get_field_id('name'); ?>" name="<?php echo $this->get_field_name('name'); ?>" > 
                <?php foreach ($transitions as $key => $transition): ?>
                    <option value="<?php echo $key ?>"
                        <?php if ($name == $key){
                            echo "selected";
                        }?>
                    >
                    <?php echo $transition ?>
                        </option>
                    <?php endforeach; ?>
            </select>
        </p>
    <?php }
}

function init_gif_not_found_widget() {
 register_widget('Gif_not_found');
}
add_action('widgets_init', 'init_gif_not_found_widget');
