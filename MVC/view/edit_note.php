<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>

    <!-- formulario editar con bootstrap -->
    <div class="container">
        <div class="row">
                <form action="index.php?controller=note&action=editar" method="POST">
                    <input type="hidden" name="id" value="<?php echo $nota->id; ?>">
                    <div class="form-group">
                        <label for="title">Titulo</label>
                        <input type="text" name="title" id="title" class="form-control" value="<?php echo $nota->title; ?>">
                    </div>
                    <div class="form-group mt-3">
                        <label for="content">Contenido</label>
                        <textarea name="content" id="content" cols="30" rows="10" class="form-control"><?php echo $nota->content; ?></textarea>
                    </div>
                    <div class="form-group mt-3">
                        <input type="submit" value="Editar" class="btn btn-primary">
                    </div>
                </form>
        </div>
    </div>

</body>
</html>