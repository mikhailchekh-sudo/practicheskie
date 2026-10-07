<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Геометрическая прогрессия</title>
</head>
<body>
    <h1>Геометрическая прогрессия</h1>

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

</body>
</html>