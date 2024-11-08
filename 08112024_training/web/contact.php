<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Jautā man!</h1>
    <form action="index.php" method="POST">
        <label for="name">Vārds: </label>
        <input type="text" name="name" id="name">
        <br>
        <label for="email">E-pasts: </label>
        <input type="email" name="email" id="email">
        <br>
        <label for="type">Ziņas tips: </label>
        <select name="type" id="type">
            <option value="1">Atsauksme</option>
            <option value="2">Ieteikums</option>
            <option value="3">Jautājums</option>
        </select>
        <br>
        <label for="check1">Vai vēlies saņemt info par citiem mūsu organizētajiem pasākumiem?</label>
        <input type="checkbox" name="yes" id="yes">
        <br>
        <label for="check2">Vai piekrīti mūsu mājaslapas lietošanas noteikumiem?</label>
        <input type="checkbox" name="yes" id="yes">
        <br>
        <input type="submit" value="Saglabāt">
    </form>
    <br>
    <li><a href="index.php">index lapa</a></li>
    <li><a href="portfolio.php">portfolio lapa</a></li>
</body>
</html>