<?php

    //registrara una nueva sección en el area de personalización del tema desde el admin.
    function myTheme_register_sections($wp_customize){
        $wp_customize->add_section(
            'mytheme_mysection',
            array(
                'title' => "Nueva sección",
                'description' => "Se creo en subfolder/sections.php",
                'priority' => 100, //indica mas abajo de cero.
            )
        );
    }

    //hook
    add_action('customize_register',"myTheme_register_sections");
?>