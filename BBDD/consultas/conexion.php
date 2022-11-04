<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    

    <!-- conectar base de datos -->
    <?php 
        $servername = "localhost";
        $username = "root";
        $password = "";
        $conectar = mysqli_connect($servername, $username, $password);
        if (!$conectar) {
            die("No se pudo conectar: " . mysqli_connect_error());
        }
       // echo "1.Conectado satisfactoriamente <br />";
    ?>
</body>
</html>