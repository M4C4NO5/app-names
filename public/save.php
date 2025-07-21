<?php
require_once __DIR__ . '/../src/db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["nombre"])) {
    $name = trim($_POST["nombre"]);

    if ($name === '') {
        die("void name");
    }

    try {
        $stmt = $pdo->prepare("INSERT INTO nombres (name) VALUES (:name)");
        $stmt->execute(['name' => $name]);
        echo "Nombre guardado correctamente.<br><a href='index.php'>Volver</a>";
    } catch (PDOException $e) {
        die("Error al guardar: " . $e->getMessage());
    }
} else {
    header("Location: index.php");
    exit;
}
