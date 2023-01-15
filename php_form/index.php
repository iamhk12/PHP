<?php
$mess = "";
if (isset($_POST['name'])) {

    $server = "localhost";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($server, $username, $password);

    if (!$conn) {
        die("connection to this database failed <br> ERR :: " . mysqli_connect_error());
    }


    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone  = $_POST['phone'];
    $work = $_POST['work'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];

    $sql = "INSERT INTO `reg_form`.`user`(`name`, `email`, `phone`, `work`, `pass`, `cpass`) VALUES ('$name','$email','$phone','$work','$pass','$cpass')";

    // echo $sql;

    if ($conn->query($sql) == true) {
        $insert = true;
        echo "<script>console.log(`Successfully Inserted`)</script>";
        $mess  = `<p class="submitmessage"> Thank you, you can login in now.</p>`;
    } else {
        echo `<script>console.log("error::  $conn->error")</script>`;
    }

    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRATION FORM - php</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Baloo+Bhai+2&family=Montserrat&family=Poppins&display=swap');
    </style>
    <style>
        body {
            margin: 0px;
            padding: 0px;
        }

        .reg {
            z-index: 10;
            display: flex;
            font-family: 'Montserrat', cursive;
            width: 100%;
            height: 100vh;
            /* background-color: red;*/
            justify-content: center;
            background-color: #e0e0e0;
            background: url('https://images.unsplash.com/photo-1469474968028-56623f02e42e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1174&q=80') center center no-repeat;
            background-size: cover;
        }

        .regform {
            position: relative;
            top: 50px;
            padding: 20px;
            padding-left: 150px;
            padding-right: 150px;
            display: flex;
            flex-direction: column;
            /* backdrop-filter: brightness(10%); */
            border-radius: 33px;
            background-color: #ffffff83;
            backdrop-filter: blur(10px) brightness(150%);
            box-shadow: #00000070 0px 0px 20px;

            /* box-shadow: 20px 20px 60px #bebebe,
                -20px -20px 60px #ffffff; */
            height: 80%;
            justify-content: center;
            align-items: center;
        }

        .regform h1 {
            text-align: center;
            margin-bottom: 40px;
        }

        .detailsreg {
            display: flex;
            flex-direction: column;
            align-items: center;

        }

        .detailsreg input {
            border: none;
            outline: none;
            margin: 15px;
            padding: 10px 30px;
            padding-left: 20px;
            border-bottom: 2px solid black;
            background-color: #00000000;
            font-size: 16px;
        }

        .detailsreg input::placeholder {
            color: #204764;
        }

        .detailsreg input:-webkit-autofill,
        .detailsreg input:-webkit-autofill:hover,
        .detailsreg input:-webkit-autofill:focus,
        .detailsreg input:-webkit-autofill:active {
            transition: background-color 5000s ease-in-out 0s;
        }

        .detailsreg .btn {
            margin: 20px;
            width: 150px;
            padding: 10px;
        }

        .detailsreg input:focus {
            border-bottom: 2px solid rgb(53, 154, 255);

        }

        /*BUTTON*/
        .detailsreg .btn {
            /* background-image: linear-gradient(92.88deg, #455EB5 9.16%, #5643CC 43.89%, #673FD7 64.72%); */
            background-color: rgb(9, 132, 255);
            border-radius: 8px;
            border-style: none;
            box-sizing: border-box;
            color: #FFFFFF;
            cursor: pointer;
            flex-shrink: 0;
            font-family: "Inter UI", "SF Pro Display", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
            font-size: 18px;
            font-weight: 500;
            height: 4rem;
            padding: 0 2.6rem;
            text-align: center;
            text-shadow: rgba(0, 0, 0, 0.25) 0 3px 8px;
            transition: all .5s;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
        }

        .detailsreg .btn:hover {
            /* box-shadow: rgba(0, 98, 255, 0.8) 0 1px 30px; */
            background-color: rgb(47, 132, 218);
            border: 1px solid white;

            /* background-image: linear-gradient(92.88deg, #384c93 9.16%, #4939ae 43.89%, #5a36bd 64.72%); */

            transition-duration: .1s;
        }

        @media (max-width: 768px) {
            .detailsreg .btn {
                padding: 0 1.6rem;
            }

            .regform {
                position: relative;
                top: 0px;
                padding: 20px;
                padding-left: 30px;
                padding-right: 30px;
                box-shadow: none;
                background: #00000000;
            }

            .detailsreg input {
                font-size: 14px;
                /* padding: 10px 30px; */
            }
        }

        .submitmessage {
            color: rgb(0, 0, 0);
            box-shadow: #204764 0px 0px 10px;
            text-align: center;
            font-size: 17px;
            font-family: Arial, Helvetica, sans-serif;
            border-radius: 20px;
            padding: 10px;
        }
    </style>
</head>

<body>
    <div class="reg">
        <div class="regform">
            <div class="filterregform">
                <div class="leftreg">
                    <h1>REG. FORM USING PHP</h1>
                    <?php
                    echo $mess;
                    ?>

                    <form method="post">
                        <div class="detailsreg">
                            <input type="text" name="name" class="form-input" placeholder="Enter your name" />

                            <input type="text" name="email" placeholder="Enter your email" class="form-input" />

                            <input type="text" name="phone" placeholder="Enter your Phone number" class="form-input" />

                            <input type="text" name="work" class="form-input" placeholder="Enter your work" />

                            <input type="text" name="pass" placeholder="Enter your password" class="form-input" />

                            <input type="text" name="cpass" placeholder="Confirm password" class="form-input" />

                            <button class="btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>