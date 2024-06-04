<?php 

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['senha']);

    if($nome == "Diogo inacio" && $idade == "1234"){
        echo "<h1>Cadastro Realizado!!!</h1>";
        echo "<p>Seja bem vindo(a) $nome</p>";
    }else{
        echo "<p>Senha ou Usuario incorretos.</p>";
    }    

}else {

}





?>