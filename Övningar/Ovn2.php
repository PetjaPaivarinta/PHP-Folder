<!DOCTYPE html>
<html>
    <head>
        <title>Övning 2</title>
    </head>
    <body>
        <?php 
        $i = 5;
        $kalle = "kock";
        if ($i > 2) {
            echo $i .  " är störe än 2";
        } 
        if ($kalle == "kock") {
            echo "<br>Kalle är en " . $kalle;
        }
        elseif ($kalle == "Svetsare") {
            echo "<br>Kalle är inte en svetsare";
        }
        elseif ($kalle == "Kodare") {
            echo "<br>Kalle är inte en kodare";
        }
        else {
            echo "<p>Kalle är något annat</p>";
        }

        switch ($kalle) {
            case "kock":
                echo "<br>Kalle är en kock";
                break;
            case "Svetsare":
                echo "<br>Kalle är inte en svetsare";
                break;
            case "Kodare":
                echo "<br>Kalle är inte en kodare";
                break;
            default:
                echo "<p>Kalle är något annat</p>";
                break;
        }

        $x = 3;
        if ($x > 2 && $x < 10) {
            echo "<p>X är större än 2 och mindre än 10</p>";
        }

        // Vad dagen är idag
        echo Date('D');

        $today = Date('D');

        if ($today == "Fri") {
            echo "<p>Idag är det fredag</p>";
        }
        elseif ($today == "Sat") {
            echo "<p>Idag är det lördag</p>";
        }
        elseif ($today == "Sun") {
            echo "<p>Idag är det söndag</p>";
        }
        else {
            echo "<p>Ogiltigt Värde</p>";
        }
        ?>
    </body>
</html>