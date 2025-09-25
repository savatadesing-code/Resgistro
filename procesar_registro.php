<?php
// Forzar la codificación en UTF-8
header("Content-Type: text/html; charset=UTF-8");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $clave = $_POST["clave"];

    echo "<h2>Registro con éxito</h2>";
    echo "<p>Bienvenido, " . htmlspecialchars($nombre) . ".</p>";
    echo "<p>Tu correo registrado es: " . htmlspecialchars($correo) . "</p>";
}
?>
