<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pokécon</title>

    <link rel="stylesheet" href="pokecon.css">
</head>
<body>
   <h1>Pokécon</h1>
<div class="h2">
<h2>Le pokédex de la mort qui tue</h2>
</div>
   

<div class="taille">
		<div class="container">
			<div class="slider">
				<img src="1.png">
				<img src="2.png">
				<img src="3.png">
				<img src="4.png">
				<img src="5.png">
			</div>
		</div>
	</div>

   <div class="image">
        <img src="pokedex.png" alt="pokedex">
   </div>



   <div class="php">
   <?php

/**

 * Bienvenue dans ce module PHP

 * Nous allons travailler à la réalisation d'un pokedex

 */



// Pikachu

$pikachu = [

  'pv' => 25,

  'attaque' => 15,

  'defense' => 10

];



// Bulbizarre

$bulbizarre = [

  'pv' => 30,

  'attaque' => 8,

  'defense' => 20

];



$tour = 0;

echo "Date : " . date('d/m/Y : H:i:s');

// Boucle de combat

do {

  echo "<h2> Tour : " . ++$tour . " à " . date('H:i:s') . "</h2>";



  // pikachu attaque bulbizarre

  echo "<p class=\"titre\">Pikachu attaque bulbizarre</p>";

  if ($pikachu['attaque'] >= $bulbizarre['defense']) {

    // L'attaque est supérieure à la défense : pikachu touche

    $coup = $pikachu['attaque'] - $bulbizarre['defense'] + 1; // La valeur du coup est la différence entre l'attaque et la défense

    $bulbizarre['pv'] -= $coup;

    echo "<p>Bulbizarre perd $coup PV, il lui reste " . $bulbizarre['pv'] . " PV</p>";

  } else {

    // La défense est supérieure à l'attaque, pikachu prend la moitié du coup et la défense baisse un peu

    $coup = ($bulbizarre['defense'] - $pikachu['attaque']) / 2;

    $pikachu['pv'] -= $coup;

    $bulbizarre['defense'] -= 1;

    echo "<p>Bulbizarre perd 1 Points de défense, il lui reste " . $bulbizarre['defense'] . " Points de défense</p>";

    echo "<p>Pikachu râte son attaque ! Il perd $coup Points de vie, il lui reste " . $pikachu['pv'] . " Points de vie</p>";

  }



  if ($bulbizarre['pv'] <= 0) // S'il n'y a pas d'accolades après un if, seule la première instruction est filtrée par le if

    echo "<p>Bulbizarre est KO !</p>";

  if ($pikachu['pv'] <= 0)

    echo "<p>Pikachu est KO !</p>";



  // Et maintenant la contre-attaque : à vous de jouer !

  // bulbizarre attaque pikachu

  echo "<p>Bulbizarre attaque Pikachu</p>";

  if ($bulbizarre['attaque'] >= $pikachu['defense']) {

    // L'attaque est supérieure à la défense : bulbizarre touche

    $coup = $bulbizarre['attaque'] - $pikachu['defense'] + 1; // La valeur du coup est la différence entre l'attaque et la défense

    $pikachu['pv'] -= $coup;

    echo "<p>Pikachu perd $coup PV, il lui reste " . $pikachu['pv'] . " PV</p>";

  } else {

    // La défense est supérieure à l'attaque, bulbizarre prend la moitié du coup et la défense baisse un peu

    $coup = ($pikachu['defense'] - $bulbizarre['attaque']) / 2;

    $bulbizarre['pv'] -= $coup;

    $pikachu['defense'] -= 1;

    echo "<p>Pikachu perd 1 Points de défense, il lui reste " . $pikachu['defense'] . " Points de défense</p>";

    echo "<p>Bulbizarre râte son attaque ! Il perd $coup Points de vie, il lui reste " . $bulbizarre['pv'] . " Points de vie</p>";

  }



  if ($bulbizarre['pv'] <= 0) // S'il n'y a pas d'accolades après un if, seule la première instruction est filtrée par le if

    echo "<p>Bulbizarre est KO !</p>";

  if ($pikachu['pv'] <= 0)

    echo "<p>Pikachu est KO !</p>";



  sleep(0.25);

} while ($pikachu['pv'] > 0 && $bulbizarre['pv'] > 0); // === !($pikachu['pv'] <= 0 || $bulbizarre['pv'] <= 0)







// Ajoutons quelques baies pour restaurer des Points de Vies

$pv_baie_rouge = 50;

$pv_baie_noire = 30;



// Bulbizarre mange une baie rouge

// Pikachu mange une baie noire



?>
   </div>

</body>
</html>