<!DOCTYPE html>
<html>
    <head>
        <title>PHP Test</title>
    </head>
    <body>
        <?php //info();
        ini_set('display_errors', 1);
        $txt = "PHP";
        $version = phpversion();

        echo "I love $txt!" . "<br>" . "I love $version!" . "<br>";
        
        include 'ex1.php';
        include 'ex2.php';
        ?>
    </body>
</html>