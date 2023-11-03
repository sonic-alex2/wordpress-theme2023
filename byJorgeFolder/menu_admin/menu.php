<?php
    require "content-menu.php";

    function testFunction_for_menu(){

        /* function test_function(){
            echo "estamos dentro del admin desde archivo menu.php";
        } */

        add_menu_page(
            'Nuevo menu admin',
            'Titulo menu',
            'manage_options',
            'menu_slug', //principal
            'test_function', //función que se debe de generar
            'dashicons-lock', 
            20
        );

        add_submenu_page(
            'menu_slug', 
            'titulo pagina',
            'titulo sub menu',
            'manage_options',
            'lin_ts',
            'test_function', 
        );
    }

    add_action('admin_menu','testFunction_for_menu')

?>