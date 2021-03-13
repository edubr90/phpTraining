<?php

$formSubmitted = isset($_POST["birthYear"]);
$age = 0;

if($formSubmitted)
{
    $birthYear = $_POST["birthYear"];
    $currentYear = date("Y");
    $limitAge = 16;

    $age = $currentYear - $birthYear;

    $msg = "Você tem " . $age . " anos.";
    $msg .= " Sua votação " . ($age < $limitAge ? "nao é permitida" : "é permitida");
}

?>

<html>
<head>
	<title>Exercise 2</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>

    <h2>Exercise 2</h2>

    <p>

    2. Escreva um programa para ler o ano de nascimento de uma pessoa e escrever uma mensagem que diga se ela poderá ou não votar este ano (não é necessário considerar o mês em que ela nasceu). 

    </p>

    <p><?php

        $invalidAge = $age < 0 || $age > 130;

        if($invalidAge)
        {
            echo "O ano de nascimento é inválido";
        }
    
        if($formSubmitted && !$invalidAge)
        {
            echo $msg;
        }
    
    ?></p>

    <form action="exercise2.php" method="POST"> Ano de nascimento:

        <input type="number" name="birthYear"> <br>

        <input type="submit" value="Submit">

    </form>
</body>
</html>