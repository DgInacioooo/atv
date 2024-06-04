<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário GET</title>
</head>
<body>
    <h1>Dados Pessoas</h1>
        
    <form action="processos4_post.php" method="post">
        <label for="nome">Nome Completo:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for = "email"> Email:</label>
        <input type = "email" id = "email" name = "email" required><br><br>

        <label for = "assunto"> Assunto: </label>
        <input type = "assunto" id = "assunto" name = "assunto" required><br><br>

        <label for = "mensagens"> Mensagens: </label>
        <input type = "text" id = "mensagens" name = "mensagens" required><br><br><br>
        
        <input type="submit" value="Pesquisar">
    </form>
</body>
</html>