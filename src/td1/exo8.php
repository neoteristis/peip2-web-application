<?php

	# retourne un tableau à deux éléments [ C , N ] où :
	# - C est une chaîne de caractères de la forme
	#   "n1, n2, n3, n4, n5" où n1, n2,..., n5
	#   sont cinq nombres triés croissant tirés au hasard
	#   dans l'intervalle [1, 49]
	# - N un nombre tiré au hasard dans l'intervalle [1, 10]
	function loto() {
        $chance_number = rand(1, 10);

        $loto_numbers_list = array();
        for ($i = 0; $i < 5; $i++) {
            $loto_numbers_list[] = rand(1, 49);
        }
        sort($loto_numbers_list);
        $loto_numbers = implode(", ", $loto_numbers_list);

        $output = array($loto_numbers, $chance_number);

        return $output;
	}



?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>TP 1 - Exo 8</title>
		<meta name="author" content="Marc Gaetano">
		<meta name="viewport" content="width=device-width; initial-scale=1.0">
		<link rel="stylesheet" href="css/tp1.css">
	</head>

	<body>
		<h1>TP 1 - Exo 8</h1>
		<hr>
		<h2>Loto Flash</h2>
		<p>
			<?php
			    $results = loto();
			    echo "Les cinq numéros : {$results[0]} - ";
			    echo "Le numéro chance : {$results[1]}";
			?>
		</p>
		<p>
			<a class="bouton" href="exo8.php">Un autre Loto Flash</a>
		</p>
	</body>
</html>
