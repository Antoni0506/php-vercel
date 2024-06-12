Index.php

<!DOCTYPE html>

<html lang="es">

<head>

<meta charset="UTF-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initialscale=1.0">

<title>Deploy php en docker</title>

</head>

<body>

<header>

<h1>Bienvenido</h1>

</header>

</body>

</html>

<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Alquileres de moto</title>

</head>

<style>

body {

font-family: 'Arial', sans-serif;

background-color: #f4f4f4;

margin: 0;

padding: 20px;

}

h1, h2 {

color: #333;

}

form {

background-color: #fff;  max-width: 300px;

margin: 20px auto;

padding: 20px;

border: 1px solid #ddd;

border-radius: 5px;

box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);

}

label {

display: block;

margin-bottom: 10px;

}

input[type="number"],

input[type="submit"] {

width: 100%;

padding: 10px;

margin-bottom: 20px;

border: 1px solid #ddd;

border-radius: 5px;

box-sizing: border-box; /* Asegura que el padding no afecte el ancho total */

}

input[type="submit"] {

background-color: #5cb85c;

color: white;

cursor: pointer;

}

input[type="submit"]:hover {

background-color: #4cae4c;

}

/* Estilo para el mensaje de resultado */

.resultado {

background-color: #e2e2e2;

color: #333;

padding: 10px;

margin: 20px auto;

border: 1px solid #ccc;

border-radius: 5px;

max-width: 300px;

text-align: center; 
}

</style>

<body>

<h1>

Una agencia de alquieres de motos acuaticas quiere saber cuanto cobrar a sus clientes con base a los siguiente:

<h2>

<ol>De la hora 1 a las 3 cobrar $8.00 c/u </ol>

<ol>Las siguientes 4 horas a $6.00 c/u </ol>

<ol>Si son mas de 7 pero menor o igual a 10 valen $4.00 c/u</ol>

<ol>Si son más de 10 cuestan $2.00 c/u</ol>

</h2>

</h1>

<form action="" method="post">

<h1>Este es un mensaje nuevos</h1>

<label for="horas">Horas de alquiler:</label>

<input type="number" id="horas" name="horas" min="1" required>

<input type="submit" value="Calcular costo">

</form>

</body>

</html>

<hr><br>

<?php

if (isset($_POST["horas"])) {

$horas_alquiler = $_POST["horas"];

// ... (tu código de cálculo de costos aquí)

switch (true) {

case ($horas_alquiler >= 1 && $horas_alquiler <= 3):

$costo = $horas_alquiler * 8;

break;

case ($horas_alquiler > 3 && $horas_alquiler <= 7):

$costo = 3 * 8 + ($horas_alquiler - 3) * 6;

break;

case ($horas_alquiler > 7 && $horas_alquiler <= 10):

$costo = 3 * 8 + 4 * 6 + ($horas_alquiler - 7) * 4;

break;

default:

$costo = 3 * 8 + 4 * 6 + 3 * 4 + ($horas_alquiler - 10) * 2;

}

echo "<div class='resultado'>El costo por $horas_alquiler horas de alquiler de motos acuáticas es: $$costo</div>";

} 
?> 