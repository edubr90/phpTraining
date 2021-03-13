<?php

$formSubmitted = isset($_POST["userpassword"]);

if($formSubmitted)
{
    $userpassword = $_POST["userpassword"];
    $isValid = $userpassword == "1234";
    $msg = $isValid ? "ACESSO PERMITIDO" : "ACESSO NEGADO";
}

?>

<html>
<head>
	<title>Exercise 3</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>

    <h2>Exercise 3</h2>

    <p>

    3. Escreva um programa que verifique a validade de uma senha fornecida pelo usuário. A senha válida é o número 1234. Devem ser impressas as seguintes mensagens: ACESSO PERMITIDO caso a senha seja válida. ACESSO NEGADO caso a senha seja inválida.

    </p>

    <p><?php

        if($formSubmitted)
        {
            echo $msg;
        }
    
    ?></p>

    <form action="exercise3.php" method="POST"> Digite a senha:

        <input type="password" name="userpassword"> <br>

        <input type="submit" value="Submit">

    </form>
</body>
</html>