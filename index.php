<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // $name = "World";
        // unset($name);
        // echo $name;
        // Type Casting
        // $price = "100";
        // convert string to integer
        // $price = (int)$price;
        // echo $price."<br>";

        // Operators
        // $a=0;
        // $b=2;
        // echo $a <=> $b; 

        // a>b=-1
        // a==b=0
        // a<b=1

        // Logical Operators
        // && = and
        // || = or
        // ! = not
        // XOR = if a=a and b=b then false else true

        // increment and decrement operators(post and pre)
        // $a=3;
        // echo $a++."<br>"; // post increment
        // echo ++$a."<br>"; // pre increment
        // echo $a--."<br>"; // post decrement
        // echo --$a."<br>"; // pre decrement

        // Assignment Operators
        //  +=, -=, *=, /=, %=, .=

        // if else statement
        // if(10 > 5){
        //     echo "10 is greater than 5";
        // } elseif (5==5) {
        //     echo "10 is not greater than 5";
        // }else

        // Switch faster than if else statement
        // switch (date("D")) {
        //     case "Mon":
        //         echo "Today is Monday";
        //         break;
        //     case "Tue":
        //         echo "Today is Tuesday";
        //         break;
        //     case "Wed":
        //         echo "Today is Wednesday";
        //         break;
        //     case "Thu":
        //         echo "Today is Thursday";
        //         break;
        //     case "Fri":
        //         echo "Today is Friday";
        //         break;
        //     case "Sat":
        //         echo "Today is Saturday";
        //         break;
        //     case "Sun":
        //         echo "Today is Sunday";
        //         break;
        //     default:
        //         echo "Invalid day";
        // }

        // Math functions
        // $status = 200;
        // $message = match($status){
        //     200 => "OK",
        //     404 => "Not Found",
        //     500 => "Internal Server Error",
        //     default => "Unknown Status"
        // };
        // echo $message;

        // Ternary Operator
        // $age = 20;
        // $status = ($age >= 18) ? "Adult" : "Minor";
        // echo $status;


        // null coalescing operator
        // if get has value , $name will be the value of get, otherwise it will be "Guest"
        // $b="meng";
        // $name = $b ?? "Guest";
        // echo "Hello, $name"; // Hello, meng

        // Loops
        // for , while , do while , foreach(used with arrays)
        // Ex foreach($array as $value){
        //     code to be executed
        // }
        
        for($i=1; $i<=10; $i++){
            for($j = 0 ; $j <=1 ;$j++){
                echo $j."<br>"; 
            }
        }
        

        
    ?>
</body>
</html>