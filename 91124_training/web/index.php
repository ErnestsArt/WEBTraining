<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Statiskie jautājumi!</h1>
    <br>
    <li><a href="portfolio.php">portfolio lapa</a></li>
    <li><a href="contact.php">contact lapa</a></li>
    <br>

    <?php
    $arrays = [
        [
            "autors" => "Jānis",
            "epasts" => "janis@berzins.com",
            "tips" => "Atsauksme"
        ],
        [
            "autors" => "Anna",
            "epasts" => "anna@ozolina.com",
            "tips" => "Atsauksme"
        ]
    ];
    ?>

    <h2>Atsauksmes</h2>

        <?php foreach ($arrays as $array): ?>
            <li>
                Autors: <?= htmlspecialchars($array["autors"]) ?>, 
                E-pasts: <?= htmlspecialchars($array["epasts"]) ?>, 
                Tips: <?= htmlspecialchars($array["tips"]) ?>
            </li>
        <?php endforeach; ?>

        <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $name = htmlspecialchars($_POST["name"]);
        $email = htmlspecialchars($_POST["email"]);
        $type = htmlspecialchars($_POST["type"]);


        echo "<p>Vārds: $name</p>";
        echo "<p>E-pasts: $email</p>";
        echo "<p>Ziņojums: $type</p>";
    } else {
        echo "<p>Nav iesniegtu datu.</p>";
    }
    ?>

            
</body>
</html>