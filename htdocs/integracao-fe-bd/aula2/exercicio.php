<?php
$nota1 = 10;
$nota2 = 5;
$nota3 = 5;
$media = ($nota1 + $nota2 + $nota3)/3;

if ($media == 10) {
    echo "<h2> Parabéns! Você é um excelente aluno. </h2>";
}  else {
if ($media >= 7) {
    echo "<h2> Você foi aprovado </h2>";
} else {
    echo '<h2> Infelizmente você foi reprovado </h2>';
} }

//  

// <!-- versão inicial professor  -->
// <?php
// $nota1 = 10;
// $nota2 = 5;
// $nota3 = 10;
// $media = ($nota1 + $nota2 + $nota3)/3;
echo 'teste v2';

if ($media == 10) {
    echo "<h2> Parabéns! Você é um excelente aluno. </h2>";
}
if ($media <10 && $media >=7) {
    echo "<h2> Você foi aprovado </h2>";
}
if ($media < 7) {
    echo "<h2>Infelizmente você foi reprovado</h2";
}

echo 'teste v3';

if ($media >= 7) {
    if ($media == 10) {
      echo "<h2>PARABÉNS! VOCÊ É UM ALUNO EXCELENTE!</h2>";
    } else {
      echo "<h2>VOCÊ FOI APROVADO!</h2>";
    }
  } else {
    echo "<h2>INFELIZMENTE VOCÊ FOI REPROVADO!</h2>";  
  }


echo 'teste v4';

if ($media == 10) {
    echo "<h2>PARABÉNS! VOCÊ É UM ALUNO EXCELENTE!</h2>";
} elseif ($media >= 7) {
  echo "<h2>VOCÊ FOI APROVADO!</h2>";
} else {
  echo "<h2>INFELIZMENTE VOCÊ FOI REPROVADO!</h2>";  
}

?>