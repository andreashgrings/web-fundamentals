<?php
include('conecta-bd.php');
// Primeiro validamos se as variáveis esperadas foram enviadas 
// usamos o comando "isset" que testa se uma variável foi recebida
if (isset($_POST['nome']) && isset($_POST['carga_horaria'])) {
    // se tudo ocorreu bem podemos seguir com a inserção do nosso novo registro
    $nome = $_POST['nome'];
    $carga_horaria = $_POST['carga_horaria']; 
    // chamadas para o banco de dados
    $sql = $conexao->prepare("insert into cursos(nome, carga_horaria) values('$nome', '$carga_horaria')");
    $sql->execute();
}
// agora iremos redirecionar o usuário para a tela de listagem
header('location:listar-cursos.php');
?>