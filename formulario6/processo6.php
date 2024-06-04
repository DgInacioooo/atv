<?php 
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome = htmlspecialchars($_POST["nome"]);
        $produto = htmlspecialchars($_POST["produto"]);
        $avali = $_POST ["avali"];
        $mensagens = htmlspecialchars($_POST["mensagens"]);


        echo "<h3>Nome do usuario: </h3>$nome <br>";
        echo "<h3>Produto: </h3>$produto<br>";
        echo "<h3>Avaliação: </h3>$avali<br>";
        echo "<h3>Mensagens: </h3> $mensagens<br>";

    }
?>