<?php
// Lógica para desinstalar el plugin y eliminar datos
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
    exit();
}
// Eliminar opciones y configuraciones
delete_option( 'mpm_settings' );
