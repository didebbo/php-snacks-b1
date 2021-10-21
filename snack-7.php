<?php
// Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.

$db = [
    "studenti" => [
        [
            "nome" => "Mario",
            "cognome" => "Rossi",
            "voti" => [1, 2, 3, 4, 5, 6,]
        ],
        [
            "nome" => "Luigi",
            "cognome" => "Verdi",
            "voti" => [2, 3, 4, 5, 6, 7,]
        ],
        [
            "nome" => "Luisa",
            "cognome" => "Rosa",
            "voti" => [3, 4, 5, 6, 7, 8,]
        ]
    ]
];

foreach ($db["studenti"] as $studente) {
    $media = 0;
    $divisore = 0;
    foreach ($studente["voti"] as $voto) {
        $media += $voto;
        $divisore++;
    }
    $media /= $divisore;
    echo $studente["nome"] . " " . $studente["cognome"] . " : " . $media . "<br>";
}
