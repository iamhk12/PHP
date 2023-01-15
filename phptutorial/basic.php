<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basics</title>
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
    </style>
</head>

<body>
    <h1 style="color:wheat; font-size : 39px;">Himanshu kothari</h1>

    <h1>php Tutorial-1</h1>


    <!--Using php for the first time in html-->

    <?php

    //php is not case sensitive
    //Semi-colon is necessary in php code;

    //single line comment in php
    /*
Multiline comments in php
 */


    echo "Hello world , First php"; //Printing in php
    echo "Hello world ,again";  //Printing in php

    // use <br> (html tag) for new line 
    echo "<br>";


    //Declaring variable in php - always put $ before variable name

    $var1 = 3;
    $var2 = 5;


    echo $var1;
    echo "<br>";
    echo $var2;

    echo "<br>";

    echo "var1 + var2 is ";
    echo $var1 + $var2;

    //Operators in php
    echo "<br>";



    // Arithmetic Operators 
    echo "<h1>Arithmetic Operators</h1>";

    echo "<br>";
    echo "The value of var1 + var2 is ";
    echo $var1 + $var2;
    echo "<br>";
    echo "The value of var1 - var2 is ";
    echo $var1 - $var2;
    echo "<br>";
    echo "The value of var1 * var2 is ";
    echo $var1 * $var2;
    echo "<br>";
    echo "The value of var1 / var2 is ";
    echo $var1 / $var2;
    echo "<br>";



    //Assignment operator
    echo "<h1>Assignment Operators</h1>";

    //=
    $newvar = $var1; //newvar = 3
    echo $newvar;
    echo "<br>";

    echo "The value of newvar is : ";
    echo $newvar;
    echo "<br>";

    //+=
    echo "NEWVAR += 1 is : ";
    echo $newvar += 1; //x = x + 1
    echo "<br>";


    //-=
    echo "NEWVAR -= 1 is : ";
    echo $newvar -= 1; //x = x - 1
    echo "<br>";

    //*=
    echo "NEWVAR *= 1 is : ";
    echo $newvar *= 6; //x = x * 6
    echo "<br>";

    ///=
    echo "NEWVAR /= 2 is : ";
    echo $newvar /= 2; //x = x * 6
    echo "<br>";



    // Comparison Operators
    echo "<h1>Comparison Operators</h1>";

    //use var_dump() to print
    echo "The value of 1==4 is ";
    echo var_dump(1 == 4);
    echo "<br>";

    echo "The value of 1!=4 is ";
    echo var_dump(1 != 4);
    echo "<br>";

    echo "The value of 1>=4 is ";
    echo var_dump(1 >= 4);
    echo "<br>";

    echo "The value of 1<=4 is ";
    echo var_dump(1 <= 4);
    echo "<br>";



    // Inc/Dec Operators
    echo "<h1>Inc/Dec Operators</h1>";

    //    Increment/Decrement Operators 
    // echo --$newvar;
    // echo $newvar++;
    // echo $newvar--;
    // echo ++$newvar;
    echo "--newvar is :";
    echo $var2;
    echo "<br>";



    //Logical Operators
    echo "<h1>Logical Operators</h1>";

    //and (&&)
    // or (||)
    //xor
    // ! ----> not


    $myVar = (true and true);
    // $myVar = (false and true);
    // $myVar = (false and false);
    // $myVar = (true and false);
    // $myVar = (true or false);

    // $myVar = (true xor true);
    // $myVar = (false xor true);
    // $myVar = (false xor false);
    // $myVar = (true and false);
    // echo "<br>";
    echo var_dump($myVar);
    echo "<br>";
    ?>


    <?php
    //DATATYPES IN PHP
    echo "<h1>DATATYPES IN PHP</h1> ";

    echo "
    Data type is the classification of data into a category.
    <br>
    Alphanumeric characters are classified as strings.
    <br>
    Whole numbers are classified as integers.
    <br>
    Numbers with decimal points are classified as floating points.
    <br>
    True or false values are classified as Boolean.
    <br>
    Collection of similar types of elements are called Array.
    <br>
    An object is a specific instance of a class that serves as templates for objects.
    <br>
     ";


    define('PI', 3.14); // Constants in php
    echo PI;
    echo "<br>";
    ?>




</body>

</html>