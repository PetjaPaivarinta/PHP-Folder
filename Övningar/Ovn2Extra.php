<!DOCTYPE html>
<html>
    <head>
        <title>Övning 1</title>
    </head>
    <body>
        <?php 
        $text = "Tomosarts future c rypto site";

        echo strlen($text) . "<br>";

        $text = str_replace("future", "PAST", $text);

        echo $text . "<br>";

        $str1 = "Future";
        $str2 = "future";

        if ($str1 === $str2) {
            echo "Strängarna är lika";
        }
        else {
            echo "Strängarna är inte lika";
        }

        // $file = fopen("tomosarts.txt", "r") or die("Kunde inte öppna filen");
        // $line = fread($file,filesize("tomosarts.txt"));
        // echo $line . "<br>";
        // fclose($file);
        ?>
        <form action="Ovn2Extra.php" method="post">
            <input type="text" name="name">
            <input type="submit">
        </form>
        <?php
                if (isset($_POST["name"])) {
                    if ($_POST["name"] == "") {
                        echo "Please fill in your first name.<br>";
                    } else {
                        $name = $_POST["name"];
                        echo "Your first name is: " . $name. "!<br><br>";
                    }
                }
        ?>
        <?php
        $day = Date('D');

        switch ($day) {
            case "Monday":
                echo "Monday Funday!";
                break;
            case "Tuesday":
                echo "Tuesday Newsday!";
                break;
            case "Wednesday":
                echo "Wednesday Bestday!";
                break;
            case "Thursday":
                echo "Thursday Thirstday!";
                break;
            case "Friday":
                echo "Friday Friyay!";
                break;
            case "Saturday":
                echo "Saturday Saturyay!";
                break;
            case "Sunday":
                echo "Sunday Sundry!";
                break;
        }

        $numbers = array(4, 2, 8, 1, 9);
        sort($numbers);
        for ($i = 0; $i < count($numbers); $i++) {
            echo $numbers[$i] . " ";
        }
        ?>
         <form action="Ovn2Extra.php" method="post">
            <input type="text" name="name2">
            <input type="number" name="age">
            <input type="submit">
        </form>
        <?php
                if (isset($_POST["name2"]) && isset($_POST["age"])) {
                    if ($_POST["name2"] == "" || $_POST["age"] == "") {
                        echo "Please fill in both name and age.<br>";
                    } else {
                        $name2 = $_POST["name2"];
                        $age = $_POST["age"];
                        echo "Your name is " . $name2 . " and you are " . $age . " years old<br>";
                    }
                }
            ?>
            <form action="Ovn2Extra.php" method="post">
                <input type="number" name="number1">
                <input type="number" name="number2">
                <select name="operator">
                    <option value="add">+</option>
                    <option value="subtract">-</option>
                    <option value="multiply">*</option>
                    <option value="divide">/</option>
                </select>
                <input type="submit">
            </form>
            <?php
            $number1 = $_POST["number1"];
            $number2 = $_POST["number2"];
            $chosenOperator = $_POST["operator"];
        if(isset($_POST["operator"])) {
            switch ($chosenOperator) {
                case "add";
                    echo $number1 + $number2;
                    break;
                case "add";
                    echo $number1 + $number2;
                    break;
                case "add";
                    echo $number1 + $number2;
                    break;
                case "add";
                    echo $number1 + $number2;
                    break;
                default;
                echo "Hahahahahahahahaa";
                break;
            }
        }
            ?>
    </body>
</html>