<?php
include('conecta-bd.php');
// Primeiro validamos se as variáveis esperadas foram enviadas 
// usamos o comando "isset" que testa se uma variável foi recebida
if (isset($_POST['nome']) && isset($_POST['carga_horaria'])) {
    // se tudo ocorreu bem podemos seguir com a inserção do nosso novo registro
    $id_curso = $_POST['id_curso'];
    $nome = $_POST['nome'];
    $carga_horaria = $_POST['carga_horaria']; 
    // chamadas para o banco de dados
    // echo "update cursos set nome=$nome, carga_horaria=$carga_horaria where id_curso=$id_curso";
    $sql = $conexao->prepare("update cursos set nome='$nome', carga_horaria=$carga_horaria where id_curso=$id_curso");
    $sql->execute();
    echo 'passei';
}
header('location:listar-cursos.php');
?>