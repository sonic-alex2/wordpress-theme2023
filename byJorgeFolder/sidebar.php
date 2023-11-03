<?php
    //este archivo se agregan los widgets que se crearon en el sidebar
    if (is_active_sidebar('my_sidebar'/* se manda a llamar en el archivo functions.php es una función*/)){

        ?>

            <div class="all_sidebar">
                <div class="all_widgets">
                    <?php dynamic_sidebar('my_sidebar');?>
                </div>
            </div>

        <?php
        
    }
?>