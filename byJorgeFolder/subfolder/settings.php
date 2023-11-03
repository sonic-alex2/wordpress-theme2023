<?php
    function testFunction_register_settings($wp_customize){
        $wp_customize->add_setting(
            'custom_colors_in_settings', /* en archivo subfolder/controls.php  se controla*/
            array(
                'default' => "#000",
                
            )
        );
    }

    //hook
    add_action('customize_register', 'testFunction_register_settings')
?>