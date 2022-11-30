<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmar borrar</title>
</head>
<body>

    <!-- preguntar si desea borrar -->
    <div class="container">
        <div class="row">
            <form action="#" method="POST">
                <div class="form-group mt-3">
                    <h3>¿Desea borrar la nota?</h3>
                </div>
                <div class="form-group mt-3">
                    <button type="submit" class="btn btn-danger" name="submit">
                        <i class="bi bi-trash"></i>
                        Borrar
                    </button>
                    <a href="index.php" class="btn btn-outline-danger">
                        <i class="bi bi-arrow-left"></i>
                        Volver
                    </a>
                </div>
            </form>
        </div>
    </div>
    <?php 
        /* recoger id de la url */
        $id = $_GET['id'];
        if(isset($_POST['submit'])){
            $dataToView->eliminar($id);
            echo "<div class='alert alert-success mt-3' role='alert'>
                    Nota borrada correctamente
                </div>";
            /* Despues de 2 segundos redirige a listar notas */
            header('Refresh: 2; URL=index.php?action=list_note');
        }
    ?>
</body>
</html>