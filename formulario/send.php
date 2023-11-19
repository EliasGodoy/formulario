<?php
include("conexion.php");

if (isset($_POST['send'])) {
    $requiredFields = ['name', 'tipologia', 'dormitorio', 'anexos', 'provincia', 'email', 'phone'];

    // Verificar si todos los campos requeridos están presentes
    if (areFieldsSet($requiredFields)) {
        // Limpiar y obtener los valores de los campos
        $name = cleanInput($_POST['name']);
        $tipologia = cleanInput($_POST['tipologia']);
        $dormitorio = cleanInput($_POST['dormitorio']);
        $anexos = cleanInput($_POST['anexos']);
        $provincia = cleanInput($_POST['provincia']);
        $email = cleanInput($_POST['email']);
        $phone = cleanInput($_POST['phone']);
        $fecha = date("Y-m-d");

        // Preparar la consulta SQL con parámetros seguros para evitar inyección SQL
        $consulta = "INSERT INTO datos(nombre,tipologia,dormitorio,anexos,provincia,email,phone,fecha)
                     VALUES ('$name','$tipologia','$dormitorio','$anexos','$provincia','$email','$phone','$fecha')";

        // Ejecutar la consulta
        $resultado = mysqli_query($conex, $consulta);

        if ($resultado) {
            ?>
            <h3 id="success">Tu registro se ha completado</h3>
            <?php
        } else {
            ?>
            <h3 id="success">Ocurrió un error en la consulta SQL</h3>
            <?php
        }
    } else {
        ?>
        <h3 id="success">Llena todos los campos</h3>
        <?php
    }
}

function areFieldsSet($fields)
{
    foreach ($fields as $field) {
        if (!isset($_POST[$field]) || empty(trim($_POST[$field]))) {
            return false;
        }
    }
    return true;
}

function cleanInput($input)
{
    global $conex;
    return mysqli_real_escape_string($conex, trim($input));
}
?>
