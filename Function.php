<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        // Call a Function
        function getname(){
            echo "Hello World";
        }
        getname();

        // PHP Function Parameters
        function name($name){
            echo "<br> Hello ".$name;
        }
        name("Alice");
        name("Bob");
        name("Charlie");

        // Function with two parameters

        function add($a, $b){
            $sum = $a + $b;
            echo "<br> Sum is: ".$sum;
        }
        add(5, 10);
        add(20, 30);

        // Default Parameter Value

        function greet($message = "Welcome to PHP"){
            echo "<br>".$message;
        }
        greet();
        greet("Hello User!");

        // PHP Functions - Returning values
        function multiply($x, $y){
            return $x * $y;
        }
        echo "<br> Multiplication: ".multiply(5, 4);
        echo "<br> Multiplication: ".multiply(7, 6);
        echo "<br> Multiplication: ".multiply(9, 8);

        // Passing Arguments by Reference {&}
        function increment(&$number){
            $number++;
        }
        $number = 5;
        increment($number);
        echo "<br> Incremented Number: ".$number;

        // Variable Number of Parameters

        // this Number of Parameters
        function sum(...$numbers){
            $total = 0;
            foreach($numbers as $num){
                $total += $num;
            }
            return $total;
        }
        $a = sum(1, 2, 3);
        echo "<br> Sum of 1, 2, 3:".$a;

        // This String of Parameters

        function concatenate($prefix, ...$strings){
            $txt = $prefix." ";
            $len = count($strings);
            for($i=0; $i<$len; $i++){
                 $txt .= "Hi, $strings[$i] $prefix.<br>";
            }       
            return $txt;
        }
        $a = concatenate("Hello", "World", "from", "PHP");
        echo "<br>".$a;



    ?>

</body>
</html>