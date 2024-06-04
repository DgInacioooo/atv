<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Eventos</title>
</head>
<body>
    <form action = "processo7.php" method = "post">
        <label for = "nome">Nome do Participante: </label><br>
        <input type = "text" id = "nome" nome = "nome" required minlenght = "3" maxlenght = "50" placeholder = "Nome do Participante"><br>

        <label for = "email"> E-mail do Participante: </label><br>
        <input type = "email" id = "email" name = "email" required placeholder = "Digite o e-mail"><br>

        <label for = "evento"> Evento de Interesse: </label><br>
        <input type = "text" id = "evento" name = "evento" required placeholder = "Evento de interesse"><br>

        <button type = "Submit" value = "enviar">Enviar: </button>
    </form>



</body>
</hmtl>