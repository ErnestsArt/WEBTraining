<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontakti</title>
</head>
<body>

    <ul>
        <li><a href="index.php">Sākums</a></li>
        <li><a href="portfolio.php">Portfolio</a></li>
        <li><a href="contact.php">Kontakti</a></li>
    </ul>

    <h1>Jautā man!</h1>

    <form action="index.php" method="post">
        <label for="vards">Vārds:</label>
        <input type="text" id="vards" name="vards" required>

        <label for="epasts">E-pasts:</label>
        <input type="email" id="epasts" name="epasts" required>

        <label for="tips">Ziņas tips:</label>
        <select id="tips" name="tips">
            <option value="Atsauksme">Atsauksme</option>
            <option value="Ieteikums">Ieteikums</option>
            <option value="Jautājums">Jautājums</option>
        </select>

        <label><input type="checkbox" name="pasakumi"> </label>
        <label><input type="checkbox" name="noteikumi" required> Vai piekrīti mūsu mājaslapas lietošanas noteikumiem?</label>

        <button type="submit">Sūtīt</button>
    </form>
</body>
</html>
