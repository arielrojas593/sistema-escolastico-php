<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<div class="login-container">
    <form action="login.php" method="POST">
        <h2>Inicio de Sesión</h2>

        <input type="text" name="usuario" placeholder="Usuario" required>

        <input type="password" name="clave" placeholder="Contraseña" required>

        <button type="submit">Ingresar</button>
    </form>
</div>

</body>
</html>