<?php

  $ranking = [
    "Matheus" => 200,
    "João" => 54,
    "Pedro" => 444,
    "Maria" => 239,
    "Joana" => 123,
    "Henrique" => 12
  ];

  arsort($ranking);

?>

<h1>Ranking:</h1>
<ul>
  <?php foreach($ranking as $nome => $pontuacao): ?>
    <li>Nome: <?php echo $nome ?> -> Pontuação: <?php echo $pontuacao ?></li>
  <?php endforeach; ?>
</ul>