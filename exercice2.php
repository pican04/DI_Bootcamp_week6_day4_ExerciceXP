<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ExerciceXP2</title>
    </head>
    <body>
    <h1>Remove Specific Element</h1>
  <!--Take an array with list of month names.
Take a variable with the name of value to be deleted.
You can use PHP array functions or foreach loop.-->    
    <?php
        $deleteMonth = 'feb';
        
        $month = array('jan', 'feb', 'march', 'april', 'may', 'june'); 
    
        foreach (array_keys($month, $deleteMonth) as $key) 
        {
           
            unset($month[$key]);
        }

        var_dump($month);
        ?>
    </body>
</html>