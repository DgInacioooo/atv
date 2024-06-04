<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Avaliação</title>
</head>
<body>
    <form action = "processo6.php" method = "post">
        <label for = "nome"> Nome: </label><br>
        <input type = "text" id = "nome" name = "nome" required minlenght = "3"
        maxlenght = "50" placeholder = "Digite seu nome "><br>

        <label for = "produto"> Produto: </label><br>
        <input type = "text" id = "produto" nome = "produto" required placeholder = "Digite o produto" ><br>
       
        <label dor = "avali"> Avaliação: </label><br> 
        <select id = "avali" name = "avali" required><br>
            <option value = ""> Coloque a sua avaliação: </option>
            <option value = "⭐"> 1 Estrela </option>
            <option value = "⭐⭐"> 2 Estrela </option>
            <option value = "⭐⭐⭐"> 3 Estrela </option>
            <option value = "⭐⭐⭐⭐"> 4 Estrela </option>
            <option value = "⭐⭐⭐⭐⭐"> 5 Estrela </option>
        </select><br>
        <label for = "mensagens"> Mensagens: </label><br>
        <input type = "text" id = "mensagens"  name = "mensagens" required placeholder = "Digite a mensagens"><br>

        <button type = "submit" value = "enviar"> Enviar: </button><br>     
    </form>    
</body>

</html>