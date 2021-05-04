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

      // Passare come parametri GET name, mail e age e verificare
      // (cercando i metodi che non conosciamo nella documentazione)
      // che name sia più lungo di 3 caratteri,
      // che mail contenga un punto e una chiocciola e che age sia un numero.
      // Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato"

      $name = $_GET["name"];
      $mail = $_GET ["mail"];
      $age = $_GET["age"];

      // echo $name . "<br/>". $mail . "<br/>" . $age  ;
      //var_dump($age);

      //Controllo lunghezza str
      $strLen = strlen($name);
      //echo $strLen;

      // Controllo @ e .
      $hasAt = strpos($mail, '@');
      $hasPoint = strpos($mail, '.');
      //var_dump($hasAt . ' ' .$hasPoint);

      //Controllo numerico
      $isNum = is_numeric($age);
      //var_dump($isNum);

     if ( $strLen <  3 || $hasAt === false || $hasPoint === false || $isNum ===  false){
        echo "Accesso negato";
      }

      else{
        echo "Accesso consentito";
      }


    ?>
  </body>
</html>
