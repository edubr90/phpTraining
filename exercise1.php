<?php

$formSubmitted = isset($_POST["firstvalue"]) && isset($_POST["secondvalue"]);

if($formSubmitted)
{
    $valor1 = $_POST["firstvalue"];
    $valor2 = $_POST["secondvalue"];

    $msg = $valor1 > $valor2 ? $valor1 : $valor2;
    $msg .= " é o maior valor";
}

?>

<html>
<head>
	<title>Exercise 1</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>

    <h2>Exercise 1</h2>

    <p>

    1. Escreva um programa para ler 2 valores (considere que não serão informados valores iguais) e escrever o maior deles. 

    </p>

    <p><?php
    
        if($formSubmitted)
        {
            echo $msg;
        }
    
    ?></p>

    <form action="exercise1.php" method="POST"> Primeiro valor:

        <input type="number" name="firstvalue"> <br> Segundo valor:

        <input type="number" name="secondvalue"> 

        <input type="submit" value="Submit">

    </form>
</body>
</html>