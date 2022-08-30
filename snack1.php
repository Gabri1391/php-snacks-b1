<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa
 e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php

$giornata_1 = [

    ['casa' => 'Olimpia Milano', 'ospiti' => 'Cantù', 'punteggio-finale' => '55-60'],
    ['casa' => 'Dinamo Sassari', 'ospiti' => 'Varese', 'punteggio-finale' => '65-60'],
    ['casa' => 'Napoli', 'ospiti' => 'Scavolini Pesaro', 'punteggio-finale' => '86-82'],
    ['casa' => 'Virtus Bologna', 'ospiti' => 'Brescia', 'punteggio-finale' => '70-78'],
    ['casa' => 'Trento', 'ospiti' => 'Scafati', 'punteggio-finale' => '88-78'],
    ['casa' => 'Venezia', 'ospiti' => 'Treviso', 'punteggio-finale' => '64-62'],
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SERIE A BASKET ITALIA</title>
</head>
<body>
    <h2>CALENDARIO 1° GIORANATA</h2>
    <ul>
        <?php for ($i = 0; $i < count($giornata_1); $i++)  : ?>
        <li>
            <strong> <?= $giornata_1[$i]['casa'] ?> </strong> - <?= $giornata_1[$i]['ospiti'] ?> | <?= $giornata_1[$i]['punteggio-finale'] ?>
        </li>
        <?php endfor;?>
    </ul>
</body>
</html>