<?php 

    function acf_local_json_load( $paths ) {
        // remove original path (optional)
        unset($paths[0]);
        
        // append path
        $paths[] = get_stylesheet_directory() . '/acf-json';
        
        // return
        return $paths;
        
    }

    add_filter('acf/settings/load_json', 'acf_local_json_load');