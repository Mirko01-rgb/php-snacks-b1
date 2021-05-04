<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Php</title>
  </head>

  <style media="screen">
    body{
      background-color: lightcoral;
    }4
  </style>

  <body>
    <?php
      // Creiamo un array contenente le partite di basket di
      // un'ipotetica tappa del calendario. Ogni array avrà una squadra di casa
      // e una squadra ospite, punti fatti dalla squadra di
      // casa e punti fatti dalla squadra ospite. Stampiamo a
      // schermo tutte le partite con questo schema.
      //Olimpia Milano - Cantù | 55-60

      $matches = [
        [
          'home' => 'Bucks',
          'guest' => 'Chicago Bulls',
          'homepoints' => '55',
          'guestpoints' => '25'
        ],
        [
          'home' => 'Tigers',
          'guest' => 'Lakers',
          'homepoints' => '57',
          'guestpoints' => '39'
        ],
        [
          'home' => 'Nuggets',
          'guest' => 'Virtus',
          'homepoints' => '48',
          'guestpoints' => '75'
        ],
        [
          'home' => 'Boston',
          'guest' => 'Fortitudo',
          'homepoints' => '29',
          'guestpoints' => '63'
        ]
      ];

      for ($i=0; $i < count($matches) ; $i++) {
        $match = $matches[$i];
        //var_dump($match);
        $home = $match['home'];
        //var_dump($home);
        $guest = $match['guest'];
        $homepoints = $match['homepoints'];
        $guestpoints = $match['guestpoints'];

        echo '<div>'
         . $home . ' - ' . $guest . '  ' . ' || ' . $homepoints . ' - '. $guestpoints .
        '</div>';
      }
    ?>
  </body>
</html>
