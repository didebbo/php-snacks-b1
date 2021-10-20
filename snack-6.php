<?php
// Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.

$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        ul {
            list-style: none;
            padding: 1em;
            margin: 0;
        }

        .container {
            display: flex;
            padding: 2em;
            color: white;
        }

        .container .grey {
            background-color: grey;
        }

        .container .green {
            background-color: green;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="grey">
            <ul>
                <?php foreach ($db["teachers"] as $teacher) : ?>

                    <?php foreach ($teacher as $value) : ?>
                        <li>
                            <?= $value ?>
                        </li>
                    <? endforeach ?>
                <? endforeach ?>
            </ul>
        </div>
        <div class="green">
            <ul>
                <?php foreach ($db["teachers"] as $teacher) : ?>

                    <?php foreach ($teacher as $value) : ?>
                        <li>
                            <?= $value ?>
                        </li>
                    <? endforeach ?>
                <? endforeach ?>
            </ul>
        </div>
    </div>
</body>

</html>