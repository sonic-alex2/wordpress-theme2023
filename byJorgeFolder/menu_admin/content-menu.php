<?php
    function test_function(){
?>
        <form action="#" method="POST">
            <label for="text_example">
                Deseas guardar activo?
            </label>
            <input type="text" name="text_input" id="text_example">
            <input type="submit" name="send_form" value="Enviar">
        </form>
<?php
    }

    if (isset($_POST['text_input'])) {
        $inputCheckBox = $_POST['text_input'];

        //lo primero es lo que se envía a la db, y después valor, este solo agrega.
        //add_option("texto_en_DB", $inputCheckBox);
        

        //este si lo permite actualizar.
        update_option("texto_en_DB", $inputCheckBox);
    }
?>