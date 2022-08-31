<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia
 più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare
  “Accesso riuscito”, altrimenti “Accesso negato”; -->

<?php

$has_name = false;
$has_mail = false;
$has_age = false;
  
$name = $_GET['name'] ?? "";
$mail = $_GET['mail'] ?? "";
$age = $_GET['age'] ?? "";


if ($name && $mail && $age) {
  if (mb_strlen($name) > 3) $has_name = true;
  if (strpos($mail, "@") && strpos($mail, ".")) $has_mail = true;
  if (is_numeric($age)) $has_age = true;
}

?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Password</title>
 </head>
 <body>
  <?php if(!isset($mail) || !isset($name) || !isset($age)) : ?>
  <?php else : ?>
    <?php if ($has_name && $has_mail && $has_age) { ?>
      <p>Accesso riuscito</p>
    <?php } else { ?>
      <p>Accesso negato</p>
    <?php } ?>
  <?php endif; ?>  
 </body>
 </html>