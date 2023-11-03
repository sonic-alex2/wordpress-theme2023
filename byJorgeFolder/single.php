<!-- muestra de una publicación estática -->

<!-- se puede agregar el header con "get_header()" -->
<?php get_header(); ?>
<div class="single_post" id="single_post_id">
    <?php
         if( have_posts()){ // verifica si hay post.
            while( have_posts()){ //se recorren los post
                the_post();

                the_content(); //obtiene el contenido de la publicación.
                
                if (has_category() || has_tag()) {
                    
                    if (has_category()) {
                        echo "Categorías<br>";

                        the_category('-'); // se pasa la separación "un guion"
                        echo "<br>";
                    }

                    if (has_tag()) {
                        echo "Etiquetas<br>";

                        the_tags('-','*',''); // se pasa la separación "un guion"
                    }
                }

                
                if(comments_open() || get_comments_number()/* contador de comentarios */ ){
                    comments_template();
                    
                }

                //muestra la navegación de las entradas.
                the_post_navigation(
                    array(
                        'prev_text' => "Anterior",
                        'next_text' => "siguiente",
                    )
                );

            }
            
        }else{
            echo "no hay entrada | from single.php";
        }
    ?>
</div>


<!-- se puede agregar el header con "get_footer()" -->