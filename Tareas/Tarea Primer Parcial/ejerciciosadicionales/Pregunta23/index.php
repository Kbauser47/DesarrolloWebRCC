<?php
$cookie_name = "visit_count";
$survey_displayed = false;

if (isset($_COOKIE[$cookie_name])) {

    $visit_count = $_COOKIE[$cookie_name] + 1;

    setcookie($cookie_name, $visit_count, time() + (86400 * 30)); 


    if ($visit_count > 5) {
        $survey_displayed = true;
    } else {
        echo "Gracias por ya ser un visitante frecuente. Usted ha visitado este sitio $visit_count veces.<br><br>";
    }
} else {

    $visit_count = 1;

    setcookie($cookie_name, $visit_count, time() + (86400 * 30)); 

    echo "Bienvenido por primera vez a nuestro sitio.<br><br>";
}

if ($survey_displayed) {
    echo "
    <h3>Encuesta: ¿Qué le gusta de este sitio?</h3>
    <form method='post' action=''>
        <label><input type='radio' name='feedback' value='buena_presentacion'> Buena presentación</label><br>
        <label><input type='radio' name='feedback' value='contenido_interesante'> Contenido interesante</label><br>
        <label><input type='radio' name='feedback' value='facil_navegacion'> Fácil navegación</label><br>
        <input type='submit' value='Enviar'>
    </form>
    ";
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["feedback"])) {
    $feedback = $_POST["feedback"];
    echo "<br>Gracias por su opinión: $feedback.";
}
?>
