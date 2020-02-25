<?php 
   function neuron_theme_file(){
        wp_enqueue_style('animate', get_template_directory_uri() .'/assets/css/animate.css', array(), '1.0', 'all');
   }
   add_action('wp_enqueue_scripts', 'neuron_theme_file');

?>