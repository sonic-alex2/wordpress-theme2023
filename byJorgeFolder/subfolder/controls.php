<?php
    //funcion que agregara un nuevo control
    function testFunction_register_controls($wp_customize){
        $wp_customize->add_control(
            new WP_Customize_Color_Control(
                $wp_customize,
                'custom_colors_in_settings'/* en archivo subfolder/setting.php */,
                array(
                    'label' => "Color Header/Footer", 
                    'description' => "Esto se genero desde subfolder/controls.php", 
                    'section' => "mytheme_mysection" //es en la seccion que se mostrara, como se cre una nueva,
                    //'type' => ""
                )
            )
        );
    }

    //hook
    add_action('customize_register', 'testFunction_register_controls')

?>