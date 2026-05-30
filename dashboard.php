<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Notas</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<div class="contenedor">
    <h1>Registro de Alumnos y Notas</h1>

    <form action="guardar_alumno.php" method="POST">

        <input type="text" name="nombre" placeholder="Nombre del alumno" required>

        <input type="text" name="materia" placeholder="Materia" required>

        <input type="number" step="0.01" name="nota" placeholder="Nota" required>

        <button type="submit">Guardar</button>
    </form>

    <br>

    <a href="logout.php">Cerrar sesión</a>
</div>

</body>
</html>