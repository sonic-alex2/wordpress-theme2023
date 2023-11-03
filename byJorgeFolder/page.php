<?php
    get_header();
?>
<div class="page_post">
    <?php
        if (have_posts()) {
            while(have_posts()){
                the_post();

                if (has_post_thumbnail()) {
                    the_post_thumbnail('medium');
                }

                echo "titulo <br>";
                the_title();

                echo "<br> contenido <br>";
                the_content();

                echo "links pagination <br>";
                wp_link_pages(
                    array(
                        "before" => "bef",
                        "after" => "aft",
                        "link_before" => "lin_bef",
                        "link_after" => "lin_aft",
                        "separator" => " - ",
                    )
                );

                if(comments_open() || get_comments_number()/* contador de comentarios */ ){
                    comments_template();
                    
                }
            }
        }
    
    
    ?>

</div>