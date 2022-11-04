<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<<<<<<< HEAD
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
=======
>>>>>>> 08b892f5309f8a55ae864168e3649c7b9ca873a7
</head>
<body class="container-xl mt-3">
    
    <fieldset class="border m-3 p-3">
        <legend>Formulario Ingreso Profesor</legend>
<<<<<<< HEAD
            <form action="#" method="post" class="form-row">
            <div class="mb-3 form-floating col-md-6">
                <input type="text" name="nombre" id="nombre" class=" form-control" placeholder="bilal">
                <label for="nombre">Nombre</label>
            </div>
            
            <div class=" mb-3 form-floating col-md-6">
                <input type="text" name="apellidos" id="apellidos" class=" form-control" placeholder="al messaoui">
                <label for="apellidos">Apellidos</label>
            </div>
            <div class="mb-3 form-floating col-md-2">
                <input type="tel" name="telefono" id="telefono" class=" form-control" placeholder="645789123">
                <label for="telefono">Telefono</label>
            </div>
            <div class="mb-3 form-floating col-md-6">
                <input type="email" name="email" id="email" class=" form-control" placeholder="204@cifpceuta.es">
                <label for="email">Email</label>
            </div>
            <!-- Crear select con todos los grupos disponibles -->
            <div class="mb-3 form-floating col-md-4">
                <select name="grupo" id="grupo" class="form-select">
                    <option value="">Selecciona un grupo</option>
                    <?php 
                        include("conexion.php");
                        include("conectar.php");
                        $sql = "SELECT * FROM grupo";
                        $resultado = mysqli_query($conectar, $sql);
                        while($fila = mysqli_fetch_assoc($resultado)){
                            echo "<option value='".$fila['idGrupo']."'>".$fila['nombre']."</option>";
                        }
                    ?>
                </select>
                <label for="grupo">Grupo</label>
            <input type="submit" value="Enviar" name="enviar" class="btn btn-primary mt-2 mb-2 col-md-4">
        </form>
=======
        <form action="#" method="post" class="form-row">
        <div class="mb-3 form-floating col-md-6">
            <input type="text" name="nombre" id="nombre" class=" form-control" placeholder="bilal">
            <label for="nombre">Nombre</label>
        </div>
        
        <div class=" mb-3 form-floating col-md-6">
            <input type="text" name="apellidos" id="apellidos" class=" form-control" placeholder="al messaoui">
            <label for="apellidos">Apellidos</label>
        </div>
        <div class="mb-3 form-floating col-md-2">
            <input type="tel" name="telefono" id="telefono" class=" form-control" placeholder="645789123">
            <label for="telefono">Telefono</label>
        </div>
        <div class="mb-3 form-floating col-md-6">
            <input type="email" name="email" id="email" class=" form-control" placeholder="204@cifpceuta.es">
            <label for="email">Email</label>
        </div>
        <input type="submit" value="Enviar" name="enviar" class="btn btn-primary mt-2 mb-2 col-md-4">
    </form>
>>>>>>> 08b892f5309f8a55ae864168e3649c7b9ca873a7
    </fieldset>

    <?php
        if(isset($_POST['enviar'])){
            include("conexion.php");
            include("conectar.php");
            /* recoger datos */
            $nombre = $_POST['nombre'];
            $apellidos = $_POST['apellidos'];
            $telefono = $_POST['telefono'];
            $email = $_POST['email'];
<<<<<<< HEAD
            $grupo = $_POST['grupo'];
            /* insertar datos omitiendo clave primaria y clave foranea */
            $sql = "INSERT INTO profesor (nombre, apellidos,telefono,email) VALUES ('$nombre', '$apellidos','$telefono','$email')";
            /* insertar en la tabla tutoria que enlaza a grupo y profesor */
            $sql2 = "INSERT INTO tutoria (Grupo_idGrupo, Profesor_idProfesor) VALUES ('$grupo', (SELECT MAX(idProfesor) FROM profesor))";
            
            if (mysqli_query($conectar, $sql) && mysqli_query($conectar, $sql2)) {
                /* mostrar swal2 */
                echo "<script>
                Swal.fire({
                    icon: 'success',
                    title: 'Profesor insertado correctamente',
                    showConfirmButton: false,
                    timer: 1500
                })
                </script>";
=======
            /* insertar datos omitiendo clave primaria y clave foranea */
            $sql = "INSERT INTO profesor (nombre, apellidos,telefono,email) VALUES ('$nombre', '$apellidos','$telefono','$email')";
            if (mysqli_query($conectar, $sql)) {
                echo "<h2>Nuevo registro creado satisfactoriamente</h2>";
>>>>>>> 08b892f5309f8a55ae864168e3649c7b9ca873a7
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conectar);
            }
        }
    ?>
</body>
</html>