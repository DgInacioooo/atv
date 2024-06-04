<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $termo = htmlspecialchars($_GET['termo']);
    
    echo "<h1>Esse foi o resultado da sua pesquisa: $termo </h1>";
} else {
    echo "<h1>Acesso Inválido</h1>";
    echo "<p>Tente Novamente, envie o formulário corretamente.</p>";
}
?>