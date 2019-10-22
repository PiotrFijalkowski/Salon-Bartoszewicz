<?php

/*
Plugin Name: Theme File Name
Description: Theme File Name
Version: 1.0
Author: 
*/

if (!class_exists('helpfulThemeFileName')) {
    class helpfulThemeFileName
    {
        public function __construct()
        {
            add_action('admin_bar_menu', array($this, 'action_admin_bar_menu'), 99);
            add_action('wp_footer', array($this, 'action_wp_footer'), 99);
            add_filter( 'mod_rewrite_rules', array($this, 'uploads_from_remote_server') );
        }

        public function action_admin_bar_menu($wp_admin_bar)
        {
            /** @var WP_Admin_Bar $wp_admin_bar */

            $args = array(
                'id' => 'CurrentThemeFile',
                'title' => $this->template(),
                'meta' => array(
                    'html' => '',
                ),
            );

            $wp_admin_bar->add_node($args);
        }

        public function action_wp_footer() {
            if(WP_DEBUG){
                echo '<pre style="position:fixed; z-index: 9; bottom:0; right:0; font-size: 12px;font-family: Consolas; padding:0px 10px;">' . $this->template() .'<br>';
                // wp_nav_menu( array(
                //     'theme_location' => 'top',
                //     // 'depth'             => 4,
                //     'container'         => '',
                //     'menu_id'        => false,
                //     'menu_class'     => '',
                //     ) );
                echo'</pre>';
            }
        }

        public function uploads_from_remote_server( $rules ) {

            if ( ! defined( 'WP_REMOTE_URL' ) || empty( WP_REMOTE_URL ) ) {
                return $rules;
            }

            $rules = "<IfModule mod_rewrite.c>
        RewriteEngine on
        RewriteCond %{REQUEST_FILENAME} !-d
        RewriteCond %{REQUEST_FILENAME} !-f
        RewriteRule app/uploads/(.*) " . untrailingslashit( WP_REMOTE_URL ) . "/app/uploads/$1 [NC,L]
        </IfModule>\n\n" . $rules;

            return $rules;
        }

        private function template()
        {
            global $template;

            return $this->replaceFile($template);
        }

        /**
         * Remove from path of file
         *
         * @param $template
         * @return mixed
         */
        private function replaceFile($template)
        {
            return str_replace(
                array(
                    trailingslashit(get_theme_root()),
                    trailingslashit(get_template()),
                    WP_CONTENT_DIR
                ), '', $template);
        }
    }
}

new helpfulThemeFileName;



