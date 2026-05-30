<?php
include 'conexion.php';

$nombre = $_POST['nombre'];
$materia = $_POST['materia'];
$nota = $_POST['nota'];

$sql = "INSERT INTO alumnos(nombre, materia, nota)
VALUES('$nombre', '$materia', '$nota')";

if ($conn->query($sql) === TRUE) {
    echo "Alumno registrado correctamente <br><br>";
    echo "<a href='dashboard.php'>Volver</a>";
} else {
    echo "Error: " . $conn->error;
}
?>