<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cálculadora Online</title>
</head>
<body>
<form action = "processos5_post.php" method = "post">
    <label for ="numero"> Digite o 1° número: </label><br>
    <input type = "number" id = "numero" name = "numero" required placeholder = "Digite o número"><br>
    
    <label for = "op"> Operação: </label><br>
    <select id = "op" name = "op" required><br>
        <option value = ""> Selecio uma das opções</option>
        <option value = "+"> Adição</option>
        <option value = "-"> Subtraçao</option>
        <option value = "x"> Multiplicação</option>
        <option value = "/"> DiVisão</option>
    </select><br>

    <label for = "numero2"> Digite o 2° número: </label><br>
    <input type = "number" id = "numero2" name = "numero2" required placeholder = "Digite o número"><br>

    <button type = "submit" value = "enviar"> Enviar </button>

</form>




</body>
</html>








