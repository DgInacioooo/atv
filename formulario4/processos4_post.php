<?php 
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $assunto = htmlspecialchars($_POST['assunto']);
    $mensagens = htmlspecialchars($_POST['mensagens']);
    
    echo "Mensagens enviada do Email: $email <br>";
    echo "No nome de: $nome <br>";
    echo "Assunto da Mensagen: $assunto<br>";
    echo "<p>Mensagens: $mensagens</p>";
}else{

}





?>