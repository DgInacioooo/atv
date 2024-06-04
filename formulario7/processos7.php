<?php 
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome = htmlspecialchars($_POST["nome"]);
        $email = htmlspecialchars($_POST["email"]);
        $evento = htmlspecialchars($_POST["evento"]);

        echo "<h3>Nome do Participante: </h3>$nome<br>";
        echo "<h3>E-mail do partipante: </h3><br>$email";
        echo "<h3>Evento de interesse do Participante</h3>$evento<br>";




    }




?>