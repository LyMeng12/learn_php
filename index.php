<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <div>
            <label for="Username">Your-Name:</label>
            <input type="text" name="name" id="name" placeholder="Enter Your Name...">
        </div>
        <div>
            <label for="age">Your-Age:</label>
            <input type="Number" name="age" id="age" placeholder="Enter Your Age...">
        </div>
        <div>
            <label for="price">Price:</label>
            <input type="Number" name="price" id="price" placeholder="Enter Your Price...">
        </div>
        <div>
            <label for="vat">VAT:</label>
            <select name="vat" id="vat">
                <option>VAT</option>
                <option value="10">10%</option>
                <option value="20">20%</option>
            </select>
        </div>
        <input type="submit" name="submit" id="" value="Submit">
        
    </form>
    <?php
        if(isset($_POST['submit'])){
            $name = htmlspecialchars($_POST['name']);
            $age = (int)$_POST['age'];
            $price = (float)$_POST['price'];
            $vat = (float)$_POST['vat'];

            echo "<h2>WelCome {$name}</h2>";

            echo "Your Name: ".$name."<br>";
            echo "Your Age: ".$age."<br>";
            echo "Your Price: ".$price."<br>";
            echo "VAT: ".$vat."<br>";
            echo "<hr>";
            echo "Total Price: ".(($price*$vat)/100);
            
        }
    ?>

        
</body>
</html>