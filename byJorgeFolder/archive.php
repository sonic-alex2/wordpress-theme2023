<?php
    the_archive_title( );

    the_archive_description();


    if (have_posts()) {
        while(have_posts()){
            the_post();

            get_template_part('content');
        }

        the_posts_pagination(
            array(
                "next_text" => "Sig pag",
                "prev_text" => "Ant pag",
            )
        );
    }
?>