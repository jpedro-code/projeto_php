 <?php
   switch($_REQUEST["acao"]){
    case 'cadastrar':
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        $sql = "INSERT INTO cadastros (nome, email, senha) VALUES ('{$nome}', '{$email}', '{$senha}')";
        
        
        $res = $conn->query($sql);
        break;
    
     }
?>