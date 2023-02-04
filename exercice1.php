<!DOCTYPE html>
<html lang="en">
   <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ExerciceXP1</title>
    </head>
    <body>
    <h1>Display The Cars</h1>
  <!--Write a PHP script which will display the Cars in the following way using array-->    
    <?php
            $cars = array('Dastun', 'Honda', 'BMW');

            
            sort($cars);
            echo "<ul>";
            
            foreach ($cars as $carsList)
            {
                echo "<li>$carsList</li>";
            }
            echo "</ul>";
        ?>
    </body>
</html>