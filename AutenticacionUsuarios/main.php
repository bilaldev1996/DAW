<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>main</title>
    <link
        href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css"
        rel="stylesheet"
    />
</head>
<body>
    
    <?php
        session_start();
        /* Comprobando si el usuario ha iniciado sesión, si no, se redirige a la página de inicio de
        sesión. */
        if (isset($_SESSION['usuario']) && isset($_SESSION['password'])) {
            echo "<h1 class=' absolute w-full text-center text-5xl mt-5 text-blue-500'>Bienvenido {$_SESSION['usuario']}</h1>";
        }else{
            header('Location: index.php');
        }
    ?>

    <div class="flex justify-end items-start h-screen">
        <form action="logout.php" method="POST" class="absolute px-8 pt-6 ">
            <button
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline flex gap-2 items-center"
                type="submit"
            >
                Cerrar sesión
                <svg class="h-8 w-8 text-red-500"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" />  <polyline points="16 17 21 12 16 7" />  <line x1="21" y1="12" x2="9" y2="12" /></svg>
            </button>
        </form>
    </div>
</body>
</html>