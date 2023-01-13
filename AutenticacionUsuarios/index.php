<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link
        href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css"
        rel="stylesheet"
    />
</head>
<body>
    <?php
        session_start();
        /* Comprobando si el usuario ya está logueado. Si es así, redirige a la página principal. */
        if (isset($_SESSION['usuario']) && isset($_SESSION['password'])) {
            header('Location: main.php');
        }
    ?>
    <div class="flex justify-center items-center h-screen">
        <form action="login.php" method="POST" class="flex justify-center flex-col items-center bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <svg class="h-40 w-40 text-gray-500"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="usuario">
                    Usuario
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="usuario"
                    name="usuario"
                    type="text"
                    placeholder="Usuario"
                    autocomplete="off"
                    required
                />
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    Contraseña
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                    id="password"
                    name="password"
                    type="password"
                    placeholder="******************"
                    autocomplete="off"
                    required
                />
                <p class="text-red-500 text-xs italic">
                    <?php
                    // Mostrando errores de inicio de sesión
                        if(isset($_SESSION['errorUsuarioPass'])){
                            echo $_SESSION['errorUsuarioPass'];
                            unset($_SESSION['errorUsuarioPass']);
                        }else if (isset($_SESSION['errorUsuario'])) {
                            echo $_SESSION['errorUsuario'];
                            unset($_SESSION['errorUsuario']);
                        }else if (isset($_SESSION['errorPassword'])) {
                            echo $_SESSION['errorPassword'];
                            unset($_SESSION['errorPassword']);
                        }
                    ?>
                </p>
            </div>
            <div class="flex items-center justify-between">
                <button
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit"
                >
                    Iniciar sesión
                </button>
            </div>
    </form>
</body>
</html>