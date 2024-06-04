<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Atividade Formulário</title>
</head>
<body>
    <h1>Formulário (POST)</h1>
    <form action="processos_php.php" method="post">
        <label for="nome">Nome Completo:</label>
        <input type="text" id="nome" name="nome" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for = "idade"> Idade: </label> 
        <input type= "idade" id="idade" name="idade" required><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>