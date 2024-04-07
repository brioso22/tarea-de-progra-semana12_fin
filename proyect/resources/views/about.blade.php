<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portada - Temática: Recursos Naturales</title>
    <link rel="stylesheet" href="/css/styles2.css">
</head>
<body>
    <div class="container">
        <img src="img/logo.png" alt="Logo de la Universidad" class="university-logo">
        <h1>Temática: Recursos Naturales</h1>
        <?php
        // Información de los estudiantes
        $students = array(
            array("Darlin Mariela Ramos Gutierrez", "SMSS172422"),
            array("Katherine Verenice Fuentes Rivera", "SMSS077422"),
            array("Marcela Nohemy Hernández Villatoro", "SMSS072922"),
            array("Marcos Isaí Brioso Benavides", "SMSS137422"),
            array("Anderson José Berrios Diaz", "SMSS100222"),
        );

        // Generar las tarjetas de los estudiantes
        foreach ($students as $student) {
            echo '<div>';
            echo '<strong>' . $student[0] . '</strong><br>';
            echo 'Carnet: ' . $student[1] . '<br>';
            echo '</div>';
        }
        ?>

        <div class="button-container">
            <a href="home"><button>Volver a la página principal</button></a>
        </div>
        
    </div>
</body>
</html>
