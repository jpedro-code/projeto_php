<?php
include("config.php");
$email = $_POST['email']; 
$assunto = $_POST['assunto']; 
$mensagem = $_POST['mensagem']; 


$sql = "INSERT INTO `mensagens` (`email`, `assunto`, `mensagem`) VALUES 
('{$email}', '{$assunto}', '{$mensagem}')";
$res = $conn->query($sql);
header("location: index.php");
