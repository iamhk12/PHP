<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basics-3</title>
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

    <h1>php Tutorial-3</h1>

    <?php

    //STRINGS IN PHP
    echo "<h2>Strings</h2>";

    $str = "This is a string";
    $str2 = " //Hello World (str2)//";

    $length = strlen($str); #length function for string
    echo "The length of the string is $length";
    echo "<br>";

    echo $str . $str2; //String concatenation operator;
    echo "<br>";

    echo "The number of words in the str is :  " . str_word_count($str); //Word count func
    echo "<br>";

    echo "The reverse of string is " . strrev($str); //string reverse function
    echo "<br>";

    echo "The position of 'is' in string is " . strpos($str, "is"); //string reverse function
    echo "<br>";
    echo "<br>";

    echo "The replaced of 'is' in the string from 'as' :: " . str_replace(' is ',' as ',$str);
    echo "<br>";

    ?>



    </body>

</html>