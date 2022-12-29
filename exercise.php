<?php
  $module = $_GET['mod'];
  $title = $_GET['title'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercise Screen</title>

  <link rel="stylesheet" href="./resources/main.css">
</head>
<body class="exercise">
  <header>
    <h1>Curso PHP</h1>
    <h2>Exercise Visualization</h2>
  </header>

  <nav class="nav-exercise">
    <span class="breadcrumb">You're in: <span class="path"><?= "{$module} > {$title}" ?></span></span>

    <div class="actions">
      <a no-format title="Show the PHP source code" href=<?= "./views{$_GET['dir']}/{$_GET['file']}.php"?> >No format</a>
      <a href="./" title="Back to exercises showpage">Go Back</a>
    </div>
  </nav>

  <main exercise>
    <div class="content">

      <h1 class="ex-title"><?= $title?></h1>

      <?php include "./views{$_GET['dir']}/{$_GET['file']}.php"; ?>
      
    </div>
  </main>

  <footer>Lucas Vidal - <?= date('Y'); ?></footer>
</body>
</html>