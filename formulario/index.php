<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="post" autocomplete="off">
        <h2>Bienvenido</h2>

        <div class="input-group">
            <div class="input-container">
                <input type="text" name="name" placeholder="Nombre y Apellido" required>
            </div>

            <div class="input-container">
                <input type="text" name="tipologia" placeholder="Tipologia" list="tipologiaList" required>
                <datalist id="tipologiaList">
                    <option value="Clasica Dos Aguas">
                    <option value="Minimalista">
                </datalist>
            </div>

            <div class="input-container">
                <input type="text" name="dormitorio" placeholder="Dormitorios" list="Dormitorios" required>
                <datalist id="Dormitorios">
                    <option value="1 Dormitorio">
                    <option value="2 Dormitorio">
                    <option value="3 o Mas Dormitorio">  
                </datalist>
            </div>

            <div class="input-container">
                <input type="text" name="anexos" placeholder="Anexos" list="Anexos" required>
                <datalist id="Anexos">
                    <option value="Galeria">
                    <option value="Pergola">   
                </datalist>
            </div>

            <div class="input-container">
                <input type="text" name="provincia" placeholder="Provincia" list="Provincia" required>
                <datalist id="Provincia">
                <option value=" Buenos Aires">
                     <option value=" Catamarca">   
                     <option value="Chaco">
                     <option value="Chubut">
                     <option value="Córdoba">
                     <option value="Corrientes">
                     <option value="Entre Ríos">
                     <option value="Formosa">
                     <option value="Jujuy">
                     <option value="La Pampa">
                     <option value="La Rioja">
                     <option value="Mendoza">
                     <option value="Misiones">
                     <option value="Neuquen">
                     <option value="Río Negro">
                     <option value="Salta">
                     <option value="San Juan">
                     <option value="San Luís">
                     <option value="Santa Cruz">
                     <option value="Santa Fe">
                     <option value="Santiago del Estero">
                     <option value="Tierra del Fuego">
                     <option value="Tucumán">
                </datalist>
            </div>

            <div class="input-container">
                <input type="email" name="email" placeholder="Correo" required>
            </div>
            
            <div class="input-container">
                <input type="tel" name="phone" placeholder="Telefono" required>
            </div>
            <a class="term" href="#">Terminos y Condiciones</a>
            <input type="submit" name="send" class="btn" value="Enviar">
        </div>
    </form>

    <?php
    include("send.php");
    ?>
</body>
</html>
