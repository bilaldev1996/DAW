<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <fieldset>
            <legend>Seleccione</legend>
            <form method="post" action="#">
                <select name="deportes">
                    <option value="futbol">futbol</option>
                    <option value="tenis">tenis</option>
                    <option value="padel">padel</option>
                </select>

                <input type="submit" name="submit" value="Enviar">
            </form>
        </fieldset>
        <?php 
            if(isset($_POST['submit'])){
                echo $_POST['deportes'];
            }

        ?>
    </body>
</html>