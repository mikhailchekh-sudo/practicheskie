<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Геометрическая прогрессия</title>
</head>
<body>
    <h1> Практическая 3 задание циклы <h1>
    <h2>Геометрическая прогрессия</h2>

    <?php
   
    $startNumber = 2;
    $multiplier = 3;
    $quantity = 5;  
    $current = $startNumber;

    echo "<p>Геометрическая прогрессия: ";

    for ($i = 0; $i < $quantity; $i++) {
        echo $current;
        
        if ($i < $quantity - 1) {
            echo ", ";
        }


        $current *= $multiplier;
    }

    echo "</p>";
    ?>
    <h2> Вычесление от 1 до n <h2>
    
    <?php

    $lastnumber = 
    $sum = 

</body>
</html>