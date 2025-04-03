<?php
class MPM_Product_Management {
    public function __construct() {
        add_action( 'admin_menu', array( $this, 'add_product_menu' ) );
    }

    public function add_product_menu() {
        add_menu_page(
            'Gestionar Productos',
            'Productos',
            'manage_options',
            'mpm_products',
            array( $this, 'render_product_page' ),
            'dashicons-cart'
        );
    }

    public function render_product_page() {
        echo '<h1>Gestionar Productos</h1>';
    }
}
