<?php

class Weather
{

  public static $tempConditions = ['cold', 'mild', 'warm'];

  public static function celsiusToFarenheit($c)
  {
    return $c * 9 / 5 + 32;
  }

  public static function determninTempCondition($f)
  {
    if ($f < 40) {
      return self::$tempConditions[0]; // cold;
    } else if ($f < 70) {
      return self::$tempConditions[1]; // mild;
    } else {
      return self::$tempConditions[0]; // warm;
    }
  }
}

print_r(Weather::$tempConditions);
echo "Celsius to Farenheit: " . Weather::celsiusToFarenheit(20), "\n";
echo "now is " . Weather::determninTempCondition(50), "\n";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP OOP Tutoral</title>
</head>

<body>

</body>

</html>