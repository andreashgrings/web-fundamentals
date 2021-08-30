<?php
include('conecta-bd.php');
$sql = $conexao-> prepare("select * from cursos order by nome");
$sql->execute();
$cursos = $sql-> fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <div class="container">
        <h3>Listagem de cursos</h3>
        <hr>
        <a href="cadastrar-curso.php" class="btn btn-default"><i class="glyphicon glyphicon-plus"></i> Cadastrar</a>
        <hr>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Carga horária</th>
                    <th class="text-right">Ações</th>
                </tr>
            </thead>
            <tbody>
            <?php
            foreach ($cursos as $curso) {
            ?>         
            <tr>
                <td><?php echo $curso['nome']?></td>
                <td><?php echo$curso['carga_horaria']?> hr</td>                    
                <td class="text-right">
                    <a href="editar-curso.php?id_curso=<?php echo $curso['id_curso']?>&nome=<?php echo $curso['nome']?>&carga_horaria=<?php echo$curso['carga_horaria'];?>" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-pencil"></i></a>
                    <a onclick="return confirm('Excluir curso?')" href="excluir-curso.php?id_curso=<?php echo $curso['id_curso'];?>" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i></a>
                </td>
            </tr>
            <?php
            }
             ?>
        </tbody>
        </table>
        <hr>
        <a href="index.php" class="btn btn-primary"><i class="glyphicon glyphicon-chevron-left"></i> Voltar</a>
    </div>    
</body>
</html>