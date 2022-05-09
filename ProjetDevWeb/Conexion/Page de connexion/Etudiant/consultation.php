<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Consultation</title>
    </head>
    <body>
		<?php
				if (($handle = fopen("annex1.csv", "r")) !== FALSE) {
					while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
						if($_POST["login"] == $data[2]){
						        echo "Votre moyenne générale est de : $data[4]";
                    echo "Votre score ECTS est : $data[3]";
                    echo "Vos choix d'option sont : $data[5] , $data[6] , $data[7] , $data[8] , $data[9] , $data[10], $data[11] , $data[12], $data[13]";
						}
					}
					fclose($handle);
				}
		?>

    <?php

    

    $newCsvData = array();
    if (($handle = fopen("test.csv", "r")) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $data[] = 'New Column';
            $newCsvData[] = $data;
        }
        fclose($handle);
    }

    $handle = fopen('test.csv', 'w');

    foreach ($newCsvData as $line) {
       fputcsv($handle, $line);
    }

    fclose($handle);

    ?>

	</body>
</html>