<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statiskie jautājumi!</title>
</head>
<body>

    <ul>
        <li><a href="index.php">Sākums</a></li>
        <li><a href="portfolio.php">Portfolio</a></li>
        <li><a href="contact.php">Kontakti</a></li>
    </ul>

    <h1>Statiskie jautājumi!</h1>

    <?php

    $atsauksmes = [
        [
            "autors" => "Jānis",
            "epasts" => "janis@berzins.com",
            "tips" => "Atsauksme"
        ],
        [
            "autors" => "Anna",
            "epasts" => "anna@liepa.com",
            "tips" => "Ieteikums"
        ]
    ];

    echo "<ul>";
    foreach ($atsauksmes as $atsauksme) {
        echo "<li>Autors: {$atsauksme['autors']}, E-pasts: {$atsauksme['epasts']}, Tips: {$atsauksme['tips']}</li>";
    }
    echo "</ul>";


    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $vards = $_POST['vards'];
        $epasts = $_POST['epasts'];
        $tips = $_POST['tips'];
        $pasakumi = isset($_POST['pasakumi']) ? "Jā" : "Nē";
        $noteikumi = isset($_POST['noteikumi']) ? "Jā" : "Nē";
        echo "<h2>Saņemtie dati:</h2>";
        echo "<p>Vārds: $vards</p>";
        echo "<p>E-pasts: $epasts</p>";
        echo "<p>Ziņas tips: $tips</p>";
        echo "<p>Pasākumu informācija: $pasakumi</p>";
        echo "<p>Lietošanas noteikumi: $noteikumi</p>";
    }
    ?>
</body>
</html>
