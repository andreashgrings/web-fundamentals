<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário em PHP</title>
</head>
<body>
    <h1>Contato</h1>
    <form action="processa.php" method="POST">
        <!-- O atributo "name" é obrigatório pois é lido pelo PHP como uma variável -->
        <input type="text" name="nome" placeholder="Digite o nome">
        <br>
        <input type="text" name="idade" placeholder="Digite sua idade">
        <br>
        <input type="text" name="veiculo" placeholder="Digite seu veículo preferido">
        <br>
        <button type="submit">ENVIAR</button>    
    </form>
    
</body>
</html>