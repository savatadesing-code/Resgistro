<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $clave = $_POST["clave"];

    // Aquí normalmente guardarías los datos en una base de datos
    // pero para este ejemplo solo mostramos un mensaje

    echo "<h2>Registro con éxito</h2>";
    echo "<p>Bienvenido, " . htmlspecialchars($nombre) . ".</p>";
    echo "<p>Tu correo registrado es: " . htmlspecialchars($correo) . "</p>";
}
?>

