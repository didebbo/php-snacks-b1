<?php
$partite = [
    [
        "casa" => "Squadra Rossa",
        "ospite" => "Squadra Blu",
        "punteggio" => "30-50"
    ],
    [
        "casa" => "Squadra Orange",
        "ospite" => "Squadra Purple",
        "punteggio" => "60-30"
    ],
    [
        "casa" => "Squadra Bianca",
        "ospite" => "Squadra Nera",
        "punteggio" => "25-48"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basket</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            padding: 1em;
            display: flex;
            flex-direction: column;
        }

        ul {
            display: flex;
            list-style: none;
        }

        ul:not(:first-child) li {
            border-top: 0.5em;
        }

        ul.header {
            background-color: black;
            color: white;
            font-weight: bold;
        }

        li {
            width: calc(100% / 3);
            padding: 1em;
            text-align: center;
            border: 0.2em solid gray;
        }

        li:not(:first-child) {
            border-left: 0.5em;
        }
    </style>
</head>

<body>
    <?php if (count($partite) > 0) : ?>
        <ul class="header">
            <li>Casa</li>
            <li>Ospite</li>
            <li>Punteggio</li>
        </ul>
        <?php foreach ($partite as $partita) { ?>
            <ul>
                <li>
                    <?= $partita["casa"] ?>
                </li>
                <li>
                    <?= $partita["ospite"] ?>
                </li>
                <li>
                    <?= $partita["punteggio"] ?>
                </li>
            </ul>
        <?php } ?>
    <?php endif ?>
</body>

</html>