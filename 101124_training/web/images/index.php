<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="blog.php">Change Page</a>
    <h1>Piesakies webināram!</h1>
    
    <div>
        <form action="confirmination.php" method="POST"> 
            <label for="name">name: </label>
            <input type="text" name="name" id="name">
            <br>
            <label for="email">email: </label>
            <input type="email" name="emails" id="emails">
            <br>
            <label for="level">level: </label>

            <select name="level" id="level">
                <option value="beginner">Beginner</option>
                <option value="intermediant">Intermediant</option>
                <option value="advanced">Advanced</option>
            </select>
            <br>
            <label for="radioo">Vai vēlaties blblblb? </label>
            <br>
            <input type="radio" name="radiob" id="yes">
            <label for="radio">yes</label>
            <input type="radio" name="radiob" id="no">
            <label for="radio">no</label>
            <br>
            <input type="submit" value="Submit"  >
            
        </form>

        <h1>Jau reģistrējušies</h1>


        <?php


        $names =[
            ["name" => "Janis", "email" => "somemail@renars.lv", "level" => "Beginner"],
            ["name" => "Antra", "email" => "somemail@antra.lv", "level" => "Intermediate"],
            ["name" => "John", "email" => "somemail@john.lv", "level" => "Advanced", "some_info" => [1,2,3]],
        ];

        foreach($names as $name){
            echo "Vārds: "
                . $name["name"]
                . ", E-pasts: "
                . $name["email"]
                . ", Līmenis: "
                . $name["level"]
                . "<br>";
        }
    ?>

        <script src="app.js"></script>
    </div>
</body>
</html>