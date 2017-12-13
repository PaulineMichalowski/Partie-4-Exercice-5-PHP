<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Exercice 5</title>
</head>
<body>
  <?php
  $age = 23;
  $string_age = 'ans';
  function concatStringInt($number, $text) {
    return $number . ' ' . $text;
  }
  echo concatStringInt($age, $string_age);
  ?>
</body>
</html>
