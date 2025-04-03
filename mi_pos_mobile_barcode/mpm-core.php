<?php
/*
Plugin Name: MI POS MOBILE BARCODE
Plugin URI: https://github.com/common-repository/mi-pos-mobile-barcode
Description: Plugin para gestionar inventarios, pedidos y productos con escáner de código de barras.
Version: 1.0.0
Author: Tu Nombre
License: GPL2
*/

if ( ! defined( 'ABSPATH' ) ) exit; // Evitar el acceso directo

// Definir la ruta del plugin
define( 'MPM_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );

// Incluir archivos necesarios
require_once MPM_PLUGIN_PATH . 'includes/class-product-management.php';
require_once MPM_PLUGIN_PATH . 'includes/class-inventory-management.php';
require_once MPM_PLUGIN_PATH . 'includes/class-order-management.php';
require_once MPM_PLUGIN_PATH . 'includes/class-sync-api.php';

// Activar el plugin
function mpm_activate_plugin() {
    // Lógica de activación del plugin
}
register_activation_hook( __FILE__, 'mpm_activate_plugin' );

// Desactivar el plugin
function mpm_deactivate_plugin() {
    // Lógica de desactivación
}
register_deactivation_hook( __FILE__, 'mpm_deactivate_plugin' );

// Inicializar el plugin
function mpm_init_plugin() {
    // Llamar funciones necesarias
}
add_action( 'plugins_loaded', 'mpm_init_plugin' );
