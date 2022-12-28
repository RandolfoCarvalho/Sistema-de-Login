<?php
	session_start();
	if(!isset($_SESSION['id_usuario']))
	{
		header("location: index.php");
		exit;
		
	}
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="styles.css" media="screen" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="CSS/areaprivada/estilo.css">
    <title>Home - Sistema de Estoque</title>
</head>
<body>
    
    <div class="head-container">
    <button id="contato">Contato</button>
    <button id="contato">Skills</button>
    </div>
    
   

    <div class="apresentacao">
    <h1 id="meeting">Olá, </h1> 

    <h1 id="meeting">  eu sou o Randolfo </h1>
    <h1 id="meeting"> Desenvolvedor Web</h1>
    <button class="botao">Entrar em contato &#9658;</button>
    </div>
</body>
</html>