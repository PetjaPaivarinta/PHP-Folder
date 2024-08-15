<!DOCTYPE html>
<html>
    <head>
        <title>Övning 1</title>
    </head>
    <body>
        <?php 
        $code = array("Java", "Rust", "Ruby", "JS");
        for ($i = 0; $i < 4; $i++)
        {
            echo $code[$i] . "<br>";
        }
        $pastries = array (
            array("Bulla", 1.50, 10),
            array("Kaka", 5.00, 4),
            array("Pirog", 2.50, 12),
        );
        foreach ($pastries as $pastry) {
            echo $pastry[0] . " " . $pastry[1] . " " . $pastry[2] . "<br>";
        }
        echo $pastries[0] [1] . "<br>";
        echo $pastries [2] [2] . "<br>";
        
        
        $totalPastries = 0;
        for ($i = 0; $i < count($pastries); $i++) {
            $totalPastries += $pastries[$i][2];
        }
        echo "Total amount of pastries: " . $totalPastries;
        ?>
    </body>
</html>