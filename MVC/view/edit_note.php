<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>

    <?php
        $id = $_GET['id'];
        $nota = $dataToView->getNota($id);
    ?>

    <!-- formulario editar con bootstrap -->
    <div class="container">
        <div class="row">
                <form action="#" method="POST">
                    <div class="form-group">
                        <label for="title">Titulo</label>
                        <input type="text" name="title" id="title" class="form-control" value="<?php echo $nota[0]->title; ?>">
                    </div>
                    <div class="form-group mt-3">
                        <label for="content">Contenido</label>
                        <textarea name="content" id="content" cols="20" rows="5" class="form-control"><?php echo $nota[0]->content; ?></textarea>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-warning" name="editar">
                            <i class="bi bi-pencil-square"></i>
                            Editar
                        </button>
                        <a href="index.php" class="btn btn-outline-warning">
                            <i class="bi bi-arrow-left"></i>
                            Volver
                        </a>
                    </div>
                </form>
        </div>
    </div>

    <?php
        if(isset($_POST['editar'])){
            $dataToView->editar($id,$_POST['title'], $_POST['content']);
            echo '<div class="mt-3 alert alert-success" role="alert">
                        Nota editada correctamente
                    </div>';
            header('Refresh: 2; URL=index.php?action=list_note');
        }
    ?>

</body>
</html>
