<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		
		<?php
				
			echo "<h1>"."Exo 1"."</h1>";

				$age = 33;

				if ($age >= 18){
					echo "<p>"."Vous êtes majeur."."</p>";
				} else {
					echo "<p>"."Vous êtes mineur."."</p>";
				}



			echo "<h1>"."Exo 2"."</h1>";

				$monAge;
				$genre = array('homme', 'femme');

				if ($monAge >= 18){
					echo "<p>"."Vous êtes un ".$genre[0]." et vous êtes majeur."."</p>";
					echo "<p>"."Vous êtes une ".$genre[1]." et vous êtes majeure."."</p>";

				} else {
					echo "<p>"."Vous êtes un ".$genre[0]." et vous êtes mineur."."</p>";
					echo "<p>"."Vous êtes une ".$genre[1]." et vous êtes mineure."."</p>";
				}
					


			echo "<h1>"."Exo 3"."</h1>";
			
				$maVariable = 'homme';

				if ($maVariable != $genre[0]){
					echo "<p>"."C'est une développeuse !!!"."</p>";
				} else {
					echo "<p>"."C'est un développeur !!!"."</p>";
				}


			echo "<h1>"."Exo 4"."</h1>";

				$age = 33;

				if ($age >= 18){
					echo "<p>"."Tu es majeur."."</p>";
				} else {
					echo "<p>"."Tu nes pas majeur."."</p>";
				}

			echo "<h1>"."Exo 5"."</h1>";

				$maVariable = "";
				if ($maVariable == false) {
					echo "<p>"."c'est pas bon !!!"."</p>";
				} else {
					echo "<p>"."c'est ok !!"."</p>";
				}


			echo "<h1>"."Exo 6"."</h1>";

				if ($maVariable) {
					echo "c'est ok !!";
				} else {
					echo "c'est pas bon!!!";
				}


		?>


	</body>
</html>