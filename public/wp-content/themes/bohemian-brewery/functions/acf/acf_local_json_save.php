<?php
 
    function acf_local_json_save( $path ) {
        // update path
        $path = get_stylesheet_directory() . '/acf-json';
             
        // return
        return $path;
        
    }

    add_filter('acf/settings/save_json', 'acf_local_json_save');