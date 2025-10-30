<?php
include('coonexion.php');

// Obtener materias de la DB para mostrarlo en el formulario.
$materiasV = mysqli_query($conn, "SELECT CodMateria, NombreM FROM materia");

// Obtener estudiantes de la DB para mostrarlo en el formulario.
$estudiantesV = mysqli_query($conn, "SELECT NIE, NombreE, ApellidoE FROM Estudiante");
?>

<!DOCTYPE html>
<html lang="en">
