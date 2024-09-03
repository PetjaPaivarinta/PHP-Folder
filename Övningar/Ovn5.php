<!DOCTYPE html>
<html>
    <head>
        <title>Övning 5</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>

    <form method="post">
        <input type="text" name="num1" placeholder="Tal 1">
        <input type="text" name="num2" placeholder="Tal 2">
        <input type="submit" name="submit1" value="Skicka" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
    </form>
    <style>
  .btn {
    @apply font-bold py-2 px-4 rounded;
  }
  .btn-blue {
    @apply bg-blue-500 text-white;
  }
  .btn-blue:hover {
    @apply bg-blue-700;
  }
</style>
        <?php 
        if (isset($_POST["submit1"])) {
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $sum = round($num1 * $num2);
            echo "Arean är " . $sum . 'cm²';
        } else {
            echo "Fyll i fälten ovan";
        }

        $tal = '3, 24, 5, 6, 7, 8, 9, 10, 11, 12';
        $tal = explode(', ', $tal);
        $sumTal = 0;
        $antalTal = count($tal);
        for ($i = 0; $i < count($tal); $i++) {
            $sumTal += $tal[$i];
        }
        $medel = $sumTal / $antalTal;
        echo "<br>Medelvärdet är: " . $medel;


        function Add($num1, $num2) {
            $sum2 = $num1 + $num2;
            echo "<br>Summan är: " . $sum2;
        }

        Add(4, 3);
        ?>
        <form method="post">
            <input type="text" name="num3" placeholder="Tal 1">
            <input type="text" name="num4" placeholder="Tal 2">
            <input type="submit" name="submit2" value="Skicka" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            <select name="operator">
                <option value="add">Addera</option>
                <option value="sub">Subtrahera</option>
                <option value="mul">Multiplicera</option>
                <option value="div">Dividera</option>
            </select>
        </form>
        <?php
        if (isset($_POST["submit2"])) {
            $num3 = $_POST["num3"];
            $num4 = $_POST["num4"];
            $operator = $_POST["operator"];
            
            switch ($operator) {
                case 'add':
                    $sum3 = $num3 + $num4;
                    echo "Summan är: " . $sum3;
                    break;
                case 'sub':
                    $sum3 = $num3 - $num4;
                    echo "Differensen är: " . $sum3;
                    break;
                case 'mul':
                    $sum3 = $num3 * $num4;
                    echo "Produkten är: " . $sum3;
                    break;
                case 'div':
                    $sum3 = $num3 / $num4;
                    echo "Kvoten är: " . $sum3;
                    break;
                default:
                    echo "Välj en operator";
                    break;
            } 
        } else {
            echo "Fyll i fälten ovan";
        }
        ?>
    </body>
</html>