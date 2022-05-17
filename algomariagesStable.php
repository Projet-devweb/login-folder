<!DOCTYPE html>
<html >
	<head>
		<meta charset="UTF-8">
		<title>Mariages stables</title>
		<script type="text/javascript" src="mariagesstables.js"></script>
	</head>

	<body>
    <?php
/*
    function triABulle($tab,$num){
             $cpt=true;
             while ($cpt){
                   $cpt=false;
                   for ($i=0;$i<sizeof($tab)-1;$i++){
                       if ($tab[$i][4]> $tab[$i+1][4]){
                          $temp=$tab[$i+1][4];
                          $tab[$i+1][4]=$tab[$i][4];
                          $tab[$i][4]=$temp;
                          $cpt=true;
    		    }
                   }
             }
             return $tab;
    }*/
    $row = 1;
    $tab=array();
    if (($handle = fopen("choixEtudiantsParcours3.csv", "r")) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
          $tab[]=$data;
            $num = count($data);// $data contient les lignes
            //echo "<p> $num champs à la ligne $row: <br /></p>\n";
            $row++;//nb colonnes
            for ($c=0; $c < $num; $c++) {
                //echo $data[$c] . "<br />\n";
            }

        }
				unset($tab[0]);// on enleve la premiere ligne correspondant a l'entete
				$cpt=true;
				while ($cpt){
							$cpt=false;
							for ($i=0;$i<sizeof($tab)-1;$i++){
									if ((float)$tab[$i][4]> (float)$tab[$i+1][4]){
										 $temp=$tab[$i+1];
										 $tab[$i+1]=$tab[$i];
										 $tab[$i]=$temp;
										 $cpt=true;
			 }
							}
				}
				$tab=array_reverse($tab);

				//print_r($tab);
        for ($i=0; $i < $row; $i++) {
          for ($j=0; $j <$num; $j++) {
          echo $tab[$i][$j]." ";
          }
          echo "<br>";

        }
        fclose($handle);
    }

		function mariagesstables($tab,$row){//row doit etre le nb de colonnes du tab
			
		}


    ?>

	</body>
</html>
