<?php
// inclui o arquivo como se ele realmente estivesse sendo escrito aqui
include('conecta-bd.php');
$sql = $conexao->prepare('select * from cursos');
$sql->execute();
$resultado = $sql->fetchAll();
// O var_dump é usado para "debugar" 
// var_dump($resultado);
foreach ($resultado as $result) {
    echo "Curso: ". $result['nome'].' - '."Carga horária: ".$result['carga_horaria'].".";
    // echo $value[1];
    echo '<br>';

}
?>