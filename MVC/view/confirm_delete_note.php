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
            <h1>¿Desea borrar la nota?</h1>
            <form action="index.php?controller=note&action=borrar" method="POST">
                <input type="hidden" name="id" value="<?php echo $nota->id; ?>">
                <div class="form-group mt-3">
                    <input type="submit" value="Borrar" href="delete_note.php" class="btn btn-danger">
                    <a href="index.php" class="btn btn-primary">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>