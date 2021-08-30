<?php
include('conecta-bd.php');
$id_curso=$_GET['id_curso'];
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
    <h3>Editar curso</h3>  
        <?php     
        $sql = $conexao->prepare("select nome, carga_horaria from cursos where id_curso='$id_curso'");
        $sql->execute();
        $cursos = $sql-> fetchAll();
        var_dump($cursos);
        foreach ($cursos as $curso) {
            ?>         
            <tr>
                <td><input type="text" name="name" id="name" value="<?php echo $curso['nome']?>" disabled></td>
                <td><input type="number" name="carga_horaria" value="<?php echo$curso['carga_horaria']?>" disabled></td>                    
                <td class="text-right"></td>
            </tr>
            <?php
            }
            ?>
       
        <form action="alterar-curso.php" method="POST" class="form-inline">
            <input type="hidden" name="id_curso" value="<?php echo $id_curso?>" required class="form-control" maxlenght="50" >
            <input size="50" type="text" name="nome" value="<?php echo $curso['nome']?>" required class="form-control" maxlenght="50" >
            <input type="number" name="carga_horaria" value="<?php echo$curso['carga_horaria']?>" required class="form-control" maxlength="3">
            <button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-floppy-disk"></i>  SALVAR</button>
        </form>
    <a href="listar-cursos.php" class="btn btn-primary"><i class="glyphicon glyphicon-chevron-left"></i> Voltar</a>
</body>
</html>