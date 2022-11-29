<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insetar</title>
</head>
<body>
    

    <!-- Formulario para insertar una nota con bootstrap -->
    <div class="container mt-5">
        <div class="row">
            <form action="#" class="form-group" method="POST">
                <div class="mb-3">
                    <label for="title" class="form-label">Titulo</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Contenido</label>
                    <textarea class="form-control" id="content" name="content" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary" name="enviar">Guardar</button>
            </form>
        </div>
    </div>

    <?php
        if(isset($_POST['enviar'])){
            $insert = $dataToView->insertar($_POST['title'], $_POST['content']);
            if($insert){
                echo 'Nota insertada';
            }else{
                echo 'Error al insertar';
            }
        }
    ?>
</body>
</html>