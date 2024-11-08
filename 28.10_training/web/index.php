<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Piesakies webināram!</title>
</head>
<body>
    <a href="blog.php">Blog page</a>
    <div id="form-container">
        <form action="confirmination.php" method="post">
            <label for="name">Ievadiet savu vārdu: </label>
            <input type="text" name="name" id="name" required> <br> <br> 

            <label for="e-mail">Ievadiet savu e-pastu: </label>
            <input type="text" name="e-mail" id="e-mail" required> <br> <br> 

            <select name="difficulty" id="difficulty" required>
                <option value="">--Izvēlaties kursa līmeni--</option>
                <option value="Beginner">Beginner</option>
                <option value="Intermediate">Intermediate</option>
                <option value="Advanced">Advanced</option>
            </select> <br> <br>

            <label for="info">Vai vēlies saņemt info par citiem mūsu organizētajiem pasākumiem?</label> <br>

            <label for="yes">Yes:</label>
            <input type="radio" name="info" id="yes">

            <label for="no">No:</label>
            <input type="radio" name="info" id="no">

            <br><br>

            <button type="submit">Submit</button>
        </form>
    </div>

    <?php
        $registered = [
            1 => ["name" => "Oļegs Rausīts", "e-mail" => "Olegs@rausits.com", "difficulty" => "Intermediate"],
            2 => ["name" => "Igors Akmens", "e-mail" => "igors@akmens.com", "difficulty" => "Beginner"],
            3 => ["name" => "Jānis Kociņš", "e-mail" => "janis@kocins.com", "difficulty" => "Advanced"],
        ];

        echo "<h2>Jau reģistrējušies</h2>";
        echo "<ul>";
        foreach($registered as $key => $value) {
            echo "<li>";
            echo "{$value['name']}, {$value['e-mail']}, {$value['difficulty']}";
            echo "</li>";
        }
        echo "</ul>";
    ?>

    <script src="js/app.js"></script>
</body>
</html>