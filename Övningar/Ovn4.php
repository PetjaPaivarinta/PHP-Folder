<!DOCTYPE html>
<html>
    <head>
        <title>Övning 4</title>
    </head>
    <body>
        <?php 
        $i = 0;
        while ($i < 7)
        {
            echo "Hej på dig<br>";
            $i++;
        }

        $value = "";

        $x = 0;
        while ($x < 10)
        {
            $x++;
            $value .= $x . " ";
        }

       echo $value . "<br>";

       for ($i = 0; $i < 7; $i++)
       {
              echo "Hej på dig<br>";
       }

       $capital = array("Finland" => "Helsingfors", "Sverige" => "Stockholm", "Japan" => "Tokyo", "Tyskland" => "Berlin");

       foreach ($capital as $country => $city)
         {
              echo $city . " är huvudstaden i " . $country . "<br>";
         }

         $bilar = "Audi, Jeep, Volkswagen, Ford, Opel";
          $bilArray = explode(", ", $bilar);

            foreach ($bilArray as $bil)
         {
              echo $bil . "<br>";
         }

         $rad = 4;
         if ($rad == 0) {
            echo "Värdet är noll<br>"; 
         } elseif ($rad == 1) {
            echo "Endast en rad<br>";
         } elseif ($rad > 2 && $rad < 10) {
            while ($rad > 2 && $rad < 10) {
            echo "Detta är rad " . $rad . " med while-slinga<br>";
            $rad++;
            }
         } else {
            echo "För mycket rader eller ogiltigt värde<br>";
         }

         $People = array("Paul" => "14.03.1992", "Lisa" => "22.08.1942", "Tom" => "27.04.1994", "Linda" => "17.11.1976");

         $peopleStr = implode(" ", $People);



         foreach ($People as $name => $age)
         {
           echo $name . " är född i " . $age . '<br>';
         }

         $bigCity = array ("Helsingfors" => "601 035", "Åbo" => "179 529", "Vanda" => "204 545", "Esbo" => "255 121", "Tammerfors" => "216 586");
         asort($bigCity);
         foreach ($bigCity as $city1 => $popU) {
            echo $city1 . ": " . $popU . '<br>';
         }
        ?>
    </body>
</html>