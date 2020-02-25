<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercici formularis</title>
    <style>
      table, th, td {
        border: 1px solid black
      }
    </style>
</head>
<body>
<?php
if (isset($_GET["nombre"])){
  echo "<p>Tu nombre es ".$_GET["nombre"]."</p>";
}
if (isset($_GET["hm"])){
echo "<p>Eres ".$_GET["hm"]."</p>";
}
if (isset($_GET["nacido"])){
echo "<p>Naciste en ".$_GET["nacido"]."</p>";
}
if (isset($_GET["usuario"]) and isset($_GET["password"])){
  if ($_GET["password"]=="123456"){
  echo "<p>Bienvenido <strong>".$_GET["usuario"]."</strong></p>";
  } else {
    echo '<p>PASSWORD INCORRECTO, MADARFACAR! <a href="testformularis.php">SIGUE INTENTÁNDOLO</a></p>';
  }
} else {


?>
<form action="testformularis.php" method="get">
  <p>Nombre: <input type="text" name="nombre" size="40" minlength="6" required placeholder="Escriba su nombre y sus dos apellidos."></p>
  <p>Año de nacimiento: <input type="number" name="nacido" min="1900" max="2002"></p>
  <p>Sexo:
    <input type="radio" name="hm" value="hombre"> Hombre
    <input type="radio" name="hm" value="mujer"> Mujer
  </p>
  <p>Usuario: <input type="text" name="usuario" minlength="6"></p>
  <p>Contraseña: <input type="password" name="password" minlength="6"></p>
  <p>Dirección de email del Reverso Tenebroso de la Fuerza <input type="email" name="correo" size="40"></p>
  <p>Teléfono móvil del Reverso Tenebroso de la Fuerza <input type="tel" name="Teléfono" size="40"></p>
  <p><input type="color" name="colorElegido"></p>
  <p><input type="range" name="rango"></p>
  <fieldset>
  <textarea name="texto" rows="4" cols="40" placeholder="Type something here!"></textarea>
  <p>Escoge una opción, MADARFACAR. 
  <select name="menu">
  <option value="1">La Luz</option>
  <option value="2" selected>El reverso Tenebroso de la Fuerza.</option>
  <option value="3">Soy Mandaloriano, no creo en la fuerza ni en el lado oscuro!</option>
</select>
</fieldset>
  </p>
  
  <p>
    <input type="submit" value="Enviar">
    <button type="button">
    <img src="vader.png" alt="caca" width="64" height="64" style="vertical-align: middle">
  Su carencia de fe... ¡Resulta molesta!
</button>
  </p>
</form>
<?php
}
?>


</body>
</html>