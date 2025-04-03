<?php
class MPM_Admin_UI {
    public function __construct() {
        add_action( 'admin_menu', array( $this, 'add_admin_menu' ) );
    }

    public function add_admin_menu() {
        add_menu_page(
            'Configuración MI POS',
            'MI POS Configuración',
            'manage_options',
            'mpm_config',
            array( $this, 'render_config_page' ),
            'dashicons-admin-generic'
        );
    }

    public function render_config_page() {
        echo '<h1>Configuración de MI POS MOBILE BARCODE</h1>';
    }
}
