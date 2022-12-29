<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curso PHP - Conceitos Avançados</title>

  <link rel="stylesheet" href="./resources/main.css">
</head>

<body class="home">
  <header>
    <h1>Curso PHP</h1>
    <h2>Home</h2>
  </header>

  <nav>
    <span class="breadcrumb">You're in: <span class="path">Home</span></span>
  </nav>

  <main>
    <div class="content">
      <div class="modules">
        <div class="node" c__pri>
          <h3>Basic Operations</h3>
          <ul class="links">
            <li>
              <a href="exercise.php?dir=/basics&file=operations&mod=Basic%20Operations&title=The%20Basics"">Basic Operations</a>
            </li>
            <li>
              <a href="exercise.php?dir=/basics&file=strings&mod=Basic%20of%20Strings&title=The%20Basics%20of%20%20Strings"">String Manipulations</a>
            </li>
          </ul>
        </div>

        <div class="node" c__sec>
          <h3>Functions</h3>
          <ul class="links">
            <li><a href="exercise.php?dir=/functions&file=basics&mod=Functions&title=The%20Basics">Basic about functions</a></li>
          </ul>
        </div>

        <div class="node" c__black>
          <h3>OOP PHP</h3>
          <ul class="links">
            <li><a href="exercise.php?dir=/classes&file=class&mod=OOP%20PHP&title=Understanding%20Classes">Testing Classes</a></li>
            <li><a href="exercise.php?dir=/classes&file=const_destr&mod=OOP%20PHP&title=__construct%20and%20__destruct%20methods">__construct && __destruct</a></li>
          </ul>
        </div>

      </div>

    </div>
  </main>

  <footer>Lucas Vidal - <?= date('Y'); ?></footer>
</body>

</html>