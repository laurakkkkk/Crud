<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit;
}

$user_email = $_SESSION['user_email'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienestar360 - Bienvenida</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Bienestar360</h1>
        <p>Bienvenido(a), <?= htmlspecialchars($user_email); ?>.</p>
        <a href="logout.php" class="logout-btn">Cerrar Sesión</a>
    </header>

    <main>
        <!-- Sección de Bienvenida -->
        <section class="welcome-section">
            <h2>Bienvenido a Bienestar360</h2>
            <p>En Bienestar360, nos enfocamos en tu bienestar emocional. Aquí encontrarás recursos y herramientas para ayudarte a llevar una vida equilibrada y saludable.</p>
        </section>

        <!-- Frases Motivacionales -->
        <section class="motivation-section">
            <h3>Reflexiones para tu bienestar</h3>
            <ul>
                <li>"Cuida de ti mismo. Es importante dar a los demás, pero no te olvides de ti."</li>
                <li>"La paz mental comienza en el momento en que decides no permitir que otra persona o evento controle tus emociones."</li>
                <li>"Eres suficiente. Cada paso que das hacia adelante es valioso."</li>
            </ul>
        </section>

        <!-- Recursos de Autocuidado -->
        <section class="resources-section">
            <h3>Recursos para el Autocuidado</h3>
            <ul>
                <li>Practica la respiración consciente durante 5 minutos al día.</li>
                <li>Toma un descanso cada hora para relajarte y estirarte.</li>
                <li>Establece una rutina de sueño saludable.</li>
            </ul>
        </section>

        <!-- Formulario de Autocuidado -->
        <section class="self-care-form-section">
            <h3>Formulario de Reflexión sobre el Autocuidado</h3>
            <form action="self_care.php" method="POST">
                <label for="sleep">¿Cuántas horas duermes en promedio cada noche?</label>
                <input type="number" id="sleep" name="sleep" required>

                <label for="exercise">¿Realizas alguna actividad física semanalmente? ¿Cuál?</label>
                <input type="text" id="exercise" name="exercise" required>

                <label for="mood">Describe tu estado de ánimo en los últimos días:</label>
                <textarea id="mood" name="mood" rows="4" required></textarea>

                <label for="goals">¿Tienes alguna meta personal de autocuidado para esta semana?</label>
                <textarea id="goals" name="goals" rows="4"></textarea>

                <button type="submit">Enviar Reflexión</button>
            </form>
        </section>
    </main>
</body>
</html>
