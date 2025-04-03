<?php
class MPM_Sync_API {
    public function __construct() {
        add_action( 'rest_api_init', array( $this, 'register_api_routes' ) );
    }

    public function register_api_routes() {
        register_rest_route( 'mpm/v1', '/sync/', array(
            'methods' => 'POST',
            'callback' => array( $this, 'sync_inventory' ),
        ) );
    }

    public function sync_inventory( $data ) {
        return new WP_REST_Response( 'Sincronización exitosa', 200 );
    }
}
