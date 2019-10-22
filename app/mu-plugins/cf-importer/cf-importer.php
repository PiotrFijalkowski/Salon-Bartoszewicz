<?php

/*
Plugin Name: Custom Field Importer Meta Box
Description: Custom Field Importer Meta Box
Version: 1.0
Author: 
*/


class CustomFieldImporter_Meta_Box {
 
    /**
     * Constructor.
     */
    public function __construct() {
        if ( is_admin() ) {
            add_action( 'load-post.php',     array( $this, 'init_metabox' ) );
            add_action( 'load-post-new.php', array( $this, 'init_metabox' ) );
        }
 
    }
 
    /**
     * Meta box initialization.
     */
    public function init_metabox() {
        add_action( 'add_meta_boxes', array( $this, 'add_metabox'  )        );
        add_action( 'save_post',      array( $this, 'save_metabox' ), 10, 2 );
    }
 
    /**
     * Adds the meta box.
     */
    public function add_metabox() {
        add_meta_box(
            'custom-field-importer',
            __( 'Import Custom FIelds', 'cfi' ),
            array( $this, 'render_metabox' ),
            'page',
            'advanced',
            'default'
        );
 
    }
 
    /**
     * Renders the meta box.
     */
    public function render_metabox( $post ) {
        // Add nonce for security and authentication.
		wp_nonce_field( 'cfi_nonce_action', 'cfi_nonce' );
		
		$meta = get_post_meta($post->ID);
		
		?>
		<h4>
            Export Code
        </h4>
        <textarea name="" readonly style="width: 100%; height: 100px;"><?php echo base64_encode(json_encode($meta)); ?></textarea>      
		<h4>
            Import Code
        </h4>
		<textarea name="__import" style="width: 100%; height: 100px;"></textarea>
		<?php 
    }
 
    /**
     * Handles saving the meta box.
     *
     * @param int     $post_id Post ID.
     * @param WP_Post $post    Post object.
     * @return null
     */
    public function save_metabox( $post_id, $post ) {
        // Add nonce for security and authentication.
        $nonce_name   = isset( $_POST['cfi_nonce'] ) ? $_POST['cfi_nonce'] : '';
        $nonce_action = 'cfi_nonce_action';
 
        // Check if nonce is valid.
        if ( ! wp_verify_nonce( $nonce_name, $nonce_action ) ) {
            return;
        }
 
        // Check if user has permissions to save data.
        if ( ! current_user_can( 'edit_post', $post_id ) ) {
            return;
        }
 
        // Check if not an autosave.
        if ( wp_is_post_autosave( $post_id ) ) {
            return;
        }
 
        // Check if not a revision.
        if ( wp_is_post_revision( $post_id ) ) {
            return;
		}
		
		if($_POST['__import']){
			$import = base64_decode($_POST['__import']);			
			$meta = (array) json_decode($import);
			foreach ($meta as $meta_key => $meta_value) {
				update_post_meta($post_id, $meta_key, ($meta_value[0]));
				// update_post_meta($post_id, $meta_key, unserialize($meta_value[0]));
			}				
			
		}
    }
}

new CustomFieldImporter_Meta_Box();



