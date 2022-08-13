<?php
require './php/config.php';
$sql = $pdo->query("SELECT * FROM tarefas");
$tarefas = $sql->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Todo List</title>
    <script src="https://unpkg.com/phosphor-icons"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Poppins:wght@400;600&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./styles/main.css" />
  </head>
  <body>
    <header>
      <div class="logo">
        <i class="ph-rocket"></i>
        <span>Todo</span>
      </div>
      <div class="moon-sun" onclick="toggleMode()"></div>
    </header>
    <main>
      <section class="form">
        <form action="./php/adicionar.php" method="post">
          <input
            type="text"
            name="tarefas"
            placeholder="Adicionar nova tarefa"
          />
          <button type="submit">
            <i class="ph-plus-circle"></i>
          </button>
        </form>
      </section>
      <section class="todo-list">
        <div class="result">
          <span
            >Criadas
            <span class="number">3</span>
          </span>
          <span>
            Concluidas
            <span class="number">0</span>
          </span>
        </div>
        <ul>
          <?php foreach ($tarefas as $lista) { ?>
          <li>
            <input type="checkbox" name="" id="" />
            <label for=""> <?= $lista['tarefas'] ?> </label>
            
              <a href="./php/delete.php?id=<?=$lista['id'];?>">
                <i class="ph-trash"></i>
              </a>
          </li>
          <?php } ?>

          
        </ul>
      </section>
      <footer></footer>
    </main>

    <script src="./js/mode.js"></script>
  </body>
</html>
