<!DOCTYPE html>
<html>
   <head>
      <!--link rel="stylesheet" type="text/css" href="moncss.css" media="screen" /-->
      <meta charset="UTF-8">
      <title>Exercice 1 - PHP</title>
   </head>

   <body>
	<?php

		for ($i=1; $i<11; $i++){
			echo "\t <div> \n";
			echo "\t <h2> Table de $i </h2> \n";
			for ($j=1; $j<11; $j++){

				echo "\t \t $i * $j = ". $i*$j ."<br/>\n"; 

			}
			echo "\t </div>\n";
		}
	?>

</body>
</html>
