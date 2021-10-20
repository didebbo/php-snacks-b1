<?php
$person = [
    "name" => isset($_POST["name"]) && trim($_POST["name"]) != "" ? $_POST["name"] : null,
    "email" => isset($_POST["email"]) && trim($_POST["email"]) != "" ? $_POST["email"] : null,
    "age" => isset($_POST["age"]) && trim($_POST["age"]) != "" ? $_POST["age"] : null,
];

// var_dump($person);

$response = true;
if (
    strlen($person["name"]) <= 3 ||
    !strpos($person["email"], "@") ||
    !strpos($person["email"], ".") ||
    !is_numeric($person["age"])
) $response = false;

// if ($person["name"] && $person["email"] && $person["age"]) var_dump($response);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: monospace;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 200px;
            height: 100vh;
            padding: 2em;
        }

        form {
            max-height: 400px;
            min-width: 400px;
            max-width: 600px;
            display: inline-block;
            border: 0.1em solid rgba(0, 0, 0, 0.1);
            border-radius: 1em;
            box-shadow: 0 0 0.5em rgba(0, 0, 0, 0.2);
            padding: 2em;
        }

        form div {
            display: flex;
            align-items: center;
            justify-content: space-between;
            /* border: 0.2em solid; */
            padding: 0.5em 0;
        }

        form div:last-child {
            justify-content: center;
        }

        form div label>* {
            margin: 1em;
            padding: 0.5em;
        }

        form div button {
            margin: 1em;
            padding: 0.5em;
        }
    </style>
</head>

<body>
    <form method="POST">
        <div>
            <label for="name">
                <input type="text" name="name" id="name" require placeholder="Nome...">
            </label>
            <label for="age">
                <input type="number" name="age" id="age" require placeholder="Età...">
            </label>
        </div>
        <div>
            <label for="email">
                <input type="email" name="email" id="email" require placeholder="Email...">
            </label>
            <button type="submit">Accedi</button>
        </div>
        <div>
            <?php if ($person["name"] && $person["email"] && $person["age"]) : ?>
                <p>
                    <?php
                    if ($response) echo 'Accesso effettuato con successo!';
                    else echo 'Accesso negato!';
                    ?>
                </p>
            <?php endif ?>
        </div>
    </form>
</body>

</html>