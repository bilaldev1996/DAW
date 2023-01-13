<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php
        session_start();
        if (isset($_POST['usuario']) && isset($_POST['password'])) {
            if ($_POST['usuario'] == 'admin' && $_POST['password'] == 'admin') {
                $_SESSION['usuario'] = $_POST['usuario'];
                $_SESSION['password'] = $_POST['password'];
                header('Location: main.php');
            } else {
                if($_POST['usuario'] != 'admin'){
                    $_SESSION['errorUsuario'] = 'Usuario incorrecto';
                }
                if($_POST['password'] != 'admin'){
                    $_SESSION['errorPassword'] = 'Contraseña incorrecta';
                }

                if($_POST['usuario'] != 'admin' && $_POST['password'] != 'admin'){
                    $_SESSION['errorUsuarioPass'] = 'Usuario o contraseña incorrecto';
                }
                    
                header('Location: index.php');
            }
        }
    ?>
</body>
</html>