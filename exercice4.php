<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ExerciceXP4</title>
    </head>
    <body>
    <h1>Subset Of Another</h1>
 <!--Let us suppose that there are two arrays.

- First array is large which have 6 values.
- Second array is small which have 2 values

Find if second array is subset of first which means that all values of second array should exists in first array.
You can use Decision Making Statemen-->    
  <?php
        
        $arrayOne = array('n','1','2','3','4','5');
        $arrayTwo = array('n','3');
      
        if (array_intersect($arrayTwo,  $arrayOne) === $arrayTwo)
        {
            echo "It is a subset";
        } else {
            echo "Not a subset";
        }
    ?>
    </body>
</html>