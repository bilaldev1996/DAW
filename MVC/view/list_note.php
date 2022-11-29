<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar</title>
</head>
<body>
    

    <?php
        /* listar todas las notas */
        $listaNotas = $dataToView->listar();
    ?>
    <!-- mostrar en tabla con bottstrap -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope='col'>id</th>
                            <th scope='col'>Título</th>
                            <th scope='col'>Contenido</th>
                            <th scope='col'>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($listaNotas as $nota): ?>
                            <tr>
                            <th scope='row'>
                                <?php echo $nota->id; ?>
                            </th>
                                <td>
                                    <?php echo $nota->title; ?>
                                </td>
                                <td>
                                    <?php echo $nota->content; ?>
                                </td>
                                <td>
                                    <a href="index.php?action=edit_note&id=<?php echo $nota->id; ?>" class="btn btn-warning">Editar</a>
                                    <a href="index.php?action=delete_note&id=<?php echo $nota->id; ?>" class="btn btn-danger">Eliminar</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <a href="index.php?action=insert_note" class="btn btn-success float-end">Insertar</a>
            </div>
        </div>
    </div>

</body>
</html>
