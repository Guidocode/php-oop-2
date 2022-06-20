<!-- 
Oggi pomeriggio provate ad immaginare quali sono le classi 
necessarie per creare uno shop online con le seguenti caratteristiche.
L’e-commerce vende prodotti per gli animali.

I prodotti saranno oltre al cibo, anche giochi, cucce, etc.

L’utente potrà sia comprare i prodotti senza registrarsi, oppure 
iscriversi e ricevere il 20% di sconto su tutti i prodotti.

Il pagamento avviene con la carta di credito, che non deve essere scaduta.

BONUS:
Alcuni prodotti (es. antipulci) avranno la caratteristica che saranno disponibili solo in un periodo particolare (es. da maggio ad agosto).
-->

<?php

  // Products
  require_once __DIR__ . '/class/Food.php';
  require_once __DIR__ . '/class/Game.php';

  // Food 
  $foods = [
    new Food(
      'cibo per cani',
      'prezzo',
      'produttore',
      'numero lotto',
      'quantità'
    ),
    new Food(
      'cibo per gatti',
      'prezzo',
      'produttore',
      'numero lotto',
      'quantità'
    )
  ];

  // Games
  $games = [
    new Game(
      'gioco per cani',
      'prezzo',
      'produttore',
      'tipo',
      'dimensione'
    ),
    new Game(
      'gioco per gatti',
      'prezzo',
      'produttore',
      'tipo',
      'dimensione'
    )
  ];

  // var_dump($foods);
  // var_dump($games);
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

  <title>oop 2</title>
</head>
<body>
  <h1 class="mb-5 text-center">E-comerce animali</h1>

  <!-- Products -->
  <h2 class="mb-5 text-center">Prodotti</h2>

  <!-- Card Foods -->
  <div class="content d-flex justify-content-center">
    <?php foreach ($foods as $food) : ?>
    <div class="card m-5" style="width: 18rem;">
      
      <div class="card-body">
        <h5 class="card-title"> Cibo: </h5>
        <p class="card-text"> <?php echo $food->getName() ?> </p>
        <p class="card-text"> <?php echo $food->price ?> </p>
        <p class="card-text"> <?php echo $food->manufacturer ?> </p>
        <p class="card-text"> <?php echo $food->getBatch() ?> </p>
        <span> <?php echo $food->quantity ?> </span>
      </div>
      
    </div>
    <?php endforeach; ?>
  </div>
  <!-- /Card Foods -->

  <!-- Card Games -->
  <div class="content d-flex justify-content-center">
    <?php foreach ($games as $game) : ?>
    <div class="card m-5" style="width: 18rem;">
      
      <div class="card-body">
        <h5 class="card-title"> Giochi: </h5>
        <p class="card-text"> <?php echo $game->getName() ?> </p>
        <p class="card-text"> <?php echo $game->price ?> </p>
        <p class="card-text"> <?php echo $game->manufacturer ?> </p>
        <p class="card-text"> <?php echo $game->getType() ?> </p>
        <span> <?php echo $game->size ?> </span>
      </div>
      
    </div>
    <?php endforeach; ?>
  </div>
  <!-- /Card Games -->


  <!-- /Products -->
  
</body>
</html>