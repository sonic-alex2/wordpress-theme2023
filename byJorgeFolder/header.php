<!-- va información de html -->
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta <?php bloginfo('charset'); ?>>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php 
            wp_title(' - ',true,"right");
            bloginfo('name');
        ?>
    </title>
    <!-- recomendado siempre colocarlo -->
    <?php
        wp_head();
    ?>
    <style>
        .all_content{
            /* llama a la función "custom_colors_in_settings" */
            background-color: <?php echo get_theme_mod('custom_colors_in_settings'); ?>;
        }
    </style>
</head>

<body <?php body_class(); ?>>
    <header>
        <nav>
            <a href="<?php echo esc_url( home_url('/')) ?>"> menu</a>
            <?php
                if (has_nav_menu('primary_menu')) {
                    wp_nav_menu(
                        array(
                            "theme_location" => "primary_menu",
                            "menu_class" => "primary_menu_class",
                            "container_class" => "primary_menu_container_class",
                        )
                    );
                }
            ?>
        </nav>
    </header>
</body>