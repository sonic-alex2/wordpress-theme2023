<!-- muestra en bucle -->

<div class="all_content_template">
    <div id="<?php the_ID(); ?>" <?php post_class('page_post'); ?>>
        <?php
            //muestra imágenes de una entrada.
            if(has_post_thumbnail()){
                //the_post_thumbnail(); //diferente a la validación de si tiene imagen la entrada.
                //también se puede usar: <?php the_title_attribute();
                ?>
                    <div class="publication">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail(); ?>
                        </a>
                    </div>

                <?php   
            }else{
                echo "no hay thumbnail desde content.php <br>";
            }
        ?>

        Inicia link de comentarios.<br>
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute();//<--optimizada para atributo html ?>" > <?php the_title(); ?></a>

        <?php
            if (comments_open()) {//si no hay comentarios 
                comments_popup_link();//
            }


            if (current_user_can('edit_posts')) {//si es un administrador dejara editarlo
                edit_post_link();//
            }else{
                echo "no tienes permisos edit_post <br>";
            }
        ?>
    </div>
</div>