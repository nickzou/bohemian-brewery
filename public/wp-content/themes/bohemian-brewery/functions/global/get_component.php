<?php
    function get_component( $file, $c = array(), $cc = array() ) {
        $c = wp_parse_args( $c );
        $cc = wp_parse_args( $cc );
        if ( $cc ) {
            foreach ( $c as $key => $value ) {
                if ( is_scalar( $value ) || is_array( $value ) ) {
                    $cc[$key] = $value;
                } else if ( is_object( $value ) && method_exists( $value, 'get_id' ) ) {
                    $cc[$key] = call_user_method( 'get_id', $value );
                }
            }
            if ( ( $cache = wp_cache_get( $file, serialize( $cc ) ) ) !== false ) {
                if ( ! empty( $c['return'] ) )
                    return $cache;
                return $cache;
                return;
            }
        }
        $file_handle = $file;
        do_action( 'start_operation', 'get_component::' . $file_handle );
        if ( file_exists( get_stylesheet_directory() . '/' . $file . '.php' ) )
            $file = get_stylesheet_directory() . '/' . $file . '.php';
        elseif ( file_exists( get_template_directory() . '/' . $file . '.php' ) )
            $file = get_template_directory() . '/' . $file . '.php';
        ob_start();
        $return = require( $file );
        $data = ob_get_clean();
        do_action( 'end_operation', 'get_component::' . $file_handle );
        if ( $cc ) {
            wp_cache_set( $file, $data, serialize( $cc ), 3600 );
        }
        if ( ! empty( $c['return'] ) )
            if ( $return === false )
                return false;
            else
                return $data;
        return $data;
    }