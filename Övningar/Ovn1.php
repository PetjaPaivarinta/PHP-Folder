<!DOCTYPE html>
<html>
    <head>
        <title>Övning 1</title>
    </head>
    <body>
        <?php 
        $myschool = "Prakticum";
        $integer = 4;
        $decimal = 2.5;
        $url = "http://www.prakticum.fi";
        echo '<p>' . $myschool . '<p>';
        echo $integer * $decimal . '<br>';
        echo '<a href="' . $url . '">Prakticum</a>';
        ?>
    </body>
</html>