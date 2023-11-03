<?php
get_header();

    if (post_password_required()) {
        return;
    }


    if(have_comments()){

        printf('Mostrando %s comentarios', get_comments_number());

    }

?>

    <ul>
        <?php
            wp_list_comments(
                array(
                    "style" => "ul",
                    "short_ping" => true,
                    "avatar_size" => 45,
                )
            );
        ?>
    </ul>
    
    <br>

    <?php
        the_comments_navigation(
            array(
                "prev_text" => "Ant-pag-com",
                "next_text" => "Sig-pag-com",
                "screen_reader_text" => "Pag de coment",
            )
        );
    ?>