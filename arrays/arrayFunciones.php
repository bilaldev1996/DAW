<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Funciones</title>
    </head>
    <body>

        <form method="get" action="arrayFunciones.php">
            <label for="fNumber">Primer Número:</label>
            <input type="number" name="fNumber" /><br />
            <label for="sNumber">Segundo Número:</label>
            <input type="number" name="sNumber" /><br />
            <label for="operacion">Operación: </label>
            <input type="text" name="operacion"  /><br />
            <ul>
                Operaciones disponibles:
                <li>sumar</li>
                <li>restar</li>
                <li>multiplicar</li>
                <li>dividir</li>
            </ul>
            <input type="submit" value="Enviar" />
        </form>
        <?php
            include './biblioteca.php';
            $fNumber = $_GET['fNumber'];
            $sNumber = $_GET['sNumber'];
            $operacion = $_GET['operacion'];
            switch ($operacion) {
                case $operacion == 'sumar':
                    echo sumar($fNumber,$sNumber);
                    break;
                case $operacion == 'restar':
                    echo restar($fNumber,$sNumber);
                    break;
                case $operacion == 'multiplicar':
                    echo multiplicar($fNumber,$sNumber);
                    break;
                case $operacion == 'dividir':
                    echo dividir($fNumber,$sNumber);
                    break;
                default:
                    echo "<h1>Introduce una opcion válida...</h1>";
            }
            
        ?>
    </body>
</html>