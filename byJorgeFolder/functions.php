<?php 

    //la siguiente función crea el sidebar que se puede usar en el admin de wordpress
    function thisFunction_register_sidebar(){
        register_sidebar(
            array(
                "id" => "my_sidebar", //como se llamara a este sidebar. en otras plantillas
                "name" => "El primer Sidebar", //el nombre del sidebar
                "description" => "Este es el sidebar de tema en archivo functions.php", //la description del sidebar
                "class" => "my_sidebar_class_config", //la clase de este sidebar
                //"before_widget" => "antes del widget archivo functions.php", //son contenedores html
                //"before_title" => "texto antes del titulo archivo functions.php", //son contenedores html 
            )
        );
    }

    add_action('widgets_init', 'thisFunction_register_sidebar');


    //función para activar en entradas etiquetas e imágenes en el admin wordpress.
    function otherFunctions_supports_theme(){
        add_theme_support('html5'); //para que el tema soporte etiquetas html5
        add_theme_support('post-thumbnails'); //para que los post permitan vistas en miniatura personalizadas
    }

    function otherFunction_nav_menus(){
        //registra un nuevo menu
        register_nav_menu('primary_menu','Menu from function.php');

        /* register_nav_menus(
            array(
                "primary_menu" => "Nombre que se mostrara",
                "secondary_menu" => "otro Nombre que se mostrara",
            )
        ); */
    }

    function testFunction_include(){
        require 'subfolder/sections.php';
        require 'subfolder/settings.php';
        require 'menu_admin/menu.php';
        require 'subfolder/controls.php'; //<= debe de ir de ultimo, recomendado
    }

    function recommended_function_setup(){
        otherFunctions_supports_theme();
        otherFunction_nav_menus();
        testFunction_include();
    }

    //al momento que se instale el tema se lanza esta función, que llama a otras funciones.
    add_action('after_setup_theme', 'recommended_function_setup');

    



    //función que agrega estilos y javascript.
    function carga_estilos_extras_a_wordpress(){
        wp_enqueue_style('estilos_extras',get_template_directory_uri() . "/estilos_extras.css",'',false,'all');
        wp_enqueue_script('javascript_extra',get_template_directory_uri() . "/javascript_extra.js",'',false,false /* lo carga en el header */);
    }
    //hook de estilos se debe de enviar el primer parámetro "wp_enqueue_scripts"
    add_action('wp_enqueue_scripts','carga_estilos_extras_a_wordpress');
?>
