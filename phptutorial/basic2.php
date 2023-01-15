<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basics -2 </title>

</head>

<body>
    <style>
        * {
            background-color: #101316;
            color: #007aae;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            padding: 10px 30px;
        }

        h1 {
            color: #6cbea0;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        h2 {
            color: #399191;
        }
    </style>
    <h1 style="color:wheat; font-size : 39px;">Himanshu kothari</h1>

    <h1>php Tutorial-2</h1>

    <?php


    echo "<h1>Conditional statments</h1>";
    $age = 7;

    //The if-else ladder
    if ($age > 21) {
        echo "YOU CAN GO TO PARTY";
    } else if ($age == 7) {
        echo "YOU ARE SEVEN YEARS OLD";
    } else if ($age == 6) {
        echo "YOU ARE SIX YEARS OLD";
    } else if ($age == 1) {
        echo "YOU ARE ONE YEAR OLD";
    } else if ($age == 0) {
        echo "YOU ARE A NEWBORN BRUH !!!!!";
    } else {
        echo "YOU CANNOT GO TO PARTY";
    }

    //ARRAYS IN PHP
    echo "<h1>ARRAYS</h1>";

    $lang = array("CPP", "PYTHON", "JS", "PHP");

    // echo $lang; // ERROR
    echo $lang[0]; //CPP
    echo "<br>";
    echo $lang[2]; //JS
    echo "<br>";


    //LOOPS IN PHP
    echo "<h1>LOOPS</h1>";

    //while loop
    echo "<h2>WHILE LOOP</h2>";
    $a = 0;
    while ($a <= 10) {
        echo "The value of a is : ";
        echo $a;
        echo "<br>";
        $a++;
    }

    echo "<br>";
    echo "<br>";

    //while loop used in array
    echo "<h2>WHILE LOOP IN ARRAY</h2>";

    $a = 0;
    while ($a < 4) {
        echo "The value of language $a is : ";
        echo $lang[$a];
        echo "<br>";
        $a++;
    }

    echo "<br>";
    echo "<br>";

    //do-while loop

    $a = 20;
    echo "<h2>DO-WHILE LOOP</h2>";

    do {
        echo "IN DO :::: ";
        echo "The value of a is : ";
        echo $a;
        echo "<br>";
        $a++;
    } while ($a <= 10);

    echo "<br>";
    echo "<br>";


    //for loop

    echo "<h2>FOR LOOP</h2>";

    for ($x = 0; $x < 10; $x++) {
        # code...
        echo "FOR LOOP VALUE OF A IS : $x <br>";
    }

    echo "<br>";
    echo "<br>";


    //foreach loop
    echo "<h2>FOREACH LOOP</h2>";

    foreach ($lang as $val) {
        echo "The value is $val <br>";
    }

    echo "<br>";
    echo "<br>";


    //functions in php 
    echo "<h2>FUNCTIONS</h2>";

    //e.g: built-in func --> var_dump

    function printfive()
    {
        echo "FIVE";
        echo "<br>";
    }
    printfive();


    function printNum($num)
    {
        echo "YOUR NUMBER IS $num";
        echo "<br>";
    }
    printNum(213);



    ?>





</body>

</html>