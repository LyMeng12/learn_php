<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $fruits = array("Apple", "Banana","Mango", "Orange","Pineapple");
        function disPlay($ar){
            foreach($ar as $value){
                echo $value." ";
            }
        }
        disPlay($fruits);
        print("<br>");
        print($fruits[2]);
        echo "<br>";
        echo count($fruits);
    ?>
</body>
</html>