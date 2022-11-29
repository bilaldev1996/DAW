<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrar</title>
</head>
<body>
    

    <!-- mostrar mensaje de nota borrada -->
    <?php if(isset($_SESSION['delete'])): ?>
        <div class="alert alert-success">
            <?php echo $_SESSION['delete']; ?>
        </div>
    <?php endif; ?>
</body>
</html>