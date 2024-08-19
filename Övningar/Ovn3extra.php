<!DOCTYPE html>
<html>
    <head>
        <title>Övning 1</title>
        <link rel="stylesheet" type="text/css" href="../Assets/button3.css">
    </head>
    <body>
        <form action="Ovn3extra.php" method="post">
            <input type="text" name="name" placeholder="Messages">
            <input type="submit" value="Skicka">
        </form>
        <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST["name"];
            $file = fopen("Ovn3extra.txt", "a") or die("Unable to open file!");
            fwrite($file, $name . "\n");
            fclose($file);
        }

        $file = fopen("Ovn3extra.txt", "r") or die("Unable to open file!");
        echo fread($file, filesize("Ovn3extra.txt"));
        fclose($file);
        ?>

        <form action="Ovn3extra.php" method="post">
            <select name="color">
                <option value="red">Red</option>
                <option value="blue">Blue</option>
                <option value="green">Green</option>
                <option value="gray">Gray</option>
                <option value="black">Black</option>
            <input type="submit" value="Ändra bakgrunds färg">
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $color = $_POST["color"];
            echo "<body style='background-color:$color'>";
        }
        ?>

        <form action="Ovn3extra.php" method="post">
            <input type="text" name="us" placeholder="Username">
            <input type="text" name="ps" placeholder="Password">
            <input type="submit" value="Submit">
        </form>

       <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $us = $_POST["us"];
            $ps = $_POST["ps"];
            if ($us == "admin" && $ps == "admin") {
                echo "Welcome admin!";
            } else {
                echo "Wrong username or password!";
            }
        }
        ?>

        <form action="Ovn3extra.php" method="get">
            <input type="text" name="num1" placeholder="Add to list">
            <input type="submit" value="Add">
        </form>
        
        <?php
         if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["num1"])) {
            $newVal = htmlspecialchars($_GET["num1"]);
            $file = fopen("list.txt", "a") or die("Unable to open file!");
            fwrite($file, $newVal . "\n");
            fclose($file);
        }

        if (file_exists("list.txt")) {
            $file = fopen("list.txt", "r") or die("Unable to open file!");
            echo "<ul>";
            while (($line = fgets($file)) !== false) {
                echo "<li>" . htmlspecialchars($line) . "</li>";
            }
            echo "</ul>";
            fclose($file);
        }
        ?>

        <form action="Ovn3extra.php" method="get">
            <button id="click" type="submit" name="add1">Add 1</button>
        </form>
        <?php
        session_start();
        if (!isset($_SESSION['val'])) {
            $_SESSION['val'] = 0;
        }

        if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["add1"])) {
            $_SESSION['val']++;
        }

        echo $_SESSION['val'];
        ?>
        <form action="Ovn3extra.php" method="post" enctype="multipart/form-data">
            <input type="file" name="file">
            <input type="submit" value="Upload virus!">
        </form>
        <?php
         if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["file"])) {
            $file = $_FILES["file"];
            $fileName = $file["name"];
            $fileTmpName = $file["tmp_name"];
            $fileSize = $file["size"];
            $fileError = $file["error"];
            $fileType = $file["type"];

            $fileExt = explode(".", $fileName);
            $fileActualExt = strtolower(end($fileExt));

            $allowed = array("jpg", "jpeg", "png", "pdf", "txt");

            if (in_array($fileActualExt, $allowed)) {
                if ($fileError === 0) {
                    if ($fileSize < 1000000) { // Limit file size to 1MB
                        $fileNameNew = uniqid("", true) . "." . $fileActualExt;
                        $fileDestination = "uploads/" . $fileNameNew;
                        if (!is_dir("uploads")) {
                            mkdir("uploads", 0777, true); // Create uploads directory if it doesn't exist
                        }
                        move_uploaded_file($fileTmpName, $fileDestination);
                        echo "File uploaded successfully!";
                    } else {
                        echo "File is too big!";
                    }
                } else {
                    echo "Error uploading file!";
                }
            } else {
                echo "You cannot upload files of this type!";
            }
        }
        ?>
    </body>
</html>