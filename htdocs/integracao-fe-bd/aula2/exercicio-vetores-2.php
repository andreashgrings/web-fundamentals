<?php

/*
 Sobre o vetor abaixo liste os nomes dos clientes e cidades dentro de uma tabela
*/

$clientes = array(
  array('Nome' => 'Lojas Renner', 'Cidade' => 'Porto Alegre', 'Gerente' => 'Andreas'),
  array('Nome' => 'Lojas C&A', 'Cidade' => 'Canoas', 'Gerente' => 'Felipe'),
  array('Nome' => 'Riachuelo', 'Cidade' => 'Porto Alegre'),
  array('Nome' => 'Atacadão', 'Cidade' => 'Sapucaia'),
  array('Nome' => 'Big', 'Cidade' => 'Cachoeirinha'),
  array('Nome' => 'Americanas', 'Cidade' => 'São Paulo')
);
echo 'Exemplo 1:';
echo '<br>';
foreach($clientes as $cliente) {
  $virgula = '';
  foreach ($cliente as $key => $value) {
    echo $virgula.$key.' - '.$value;
    $virgula =  ', ';
  }
  echo '.';
  echo '<br>';
}
echo '<br>';
echo '<br>';
echo 'Exemplo 2:';
echo '<br>';
foreach($clientes as $cliente) {
  $var = array();
  foreach ($cliente as $key => $value) {
    $var[] = $key.' - '.$value;
  }
  echo join(", ", $var);
  echo '<br>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <table border="2"> 
    <thead>
      <tr>
        <th>Nome</th>
        <th>Cidade</th>
      </tr>
    </thead>
    <tbody>
          <?php
        foreach($clientes as $cliente) {
          ?>
          <tr>
            <td><?php echo $cliente['Nome']; ?></td>
            <td><?php echo $cliente['Cidade']; ?></td>
          </tr>
        <?php
        }
        ?>

    </tbody>
  </table>
  
</body>
</html>