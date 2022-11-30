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
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Contenido</label>
                    <textarea class="form-control" id="content" name="content" rows="3" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary" name="enviar">Guardar</button>
                <a href="index.php" class="btn btn-outline-primary">Volver</a>
            </form>
        </div>
    </div>

    <?php
        if(isset($_POST['enviar'])){
            /* comprobar que los campos tno estén vacios */
            if(!empty($_POST['title']) && !empty($_POST['content'])){
                $dataToView->insertar($_POST['title'], $_POST['content']);
                echo '<div class="mt-3 alert alert-success" role="alert">
                            Nota insertada correctamente
                        </div>';
            }                   
        }
    ?>
</body>
</html>