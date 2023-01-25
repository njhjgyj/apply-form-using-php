<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project 1</title>

    <link rel="stylesheet" href="styles.css">

</head>

<body>

    <div id="mainDiv">

        <span>

            <h3>Welcome</h3><br>

            <p>Please fill all the details carefuly. this form can change your life

            </p>

            <a href="display.php" target="_blank">Check form</a>

        </span>

        <div id="div1">

            <span>

                <h3>Apply for Web Developer post</h3><br><br>

                <form action="" method="post">

                    <input type="text" name="name1" id="nameinp1" placeholder="Your name" required>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" name="qualification1" id="qualificationinp2" placeholder="Your qualification" required><br><br>

                    <input type="tel" name="number1" id="numberinp3" placeholder="Your mobile number" required>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="email" name="email1" id="emailinp4" placeholder="Your email id" required><br><br>

                    <input type="text" name="references1" id="referencesinp5" placeholder="Any references" required>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" name="webDeveloper1" id="weDeveloperinp6" value="Web Developer"><br><br>

                    <span>

                        <input type="submit" name="submit1" id="submitBtn1" value="Register">

                    </span>

                </form>

            </span>

        </div>

    </div>

</body>

<script src="app.js"></script>

</html>


<?php

include "connection.php";

if (isset($_POST['submit1'])) {
    $name = $_POST['name1'];
    $quali = $_POST['qualification1'];
    $number = $_POST['number1'];
    $email = $_POST['email1'];
    $refere = $_POST['references1'];
    $jobPost = $_POST['webDeveloper1'];

    $insertUserData = "insert into table1ofproject1 (name, degree, mobile, email, refer, jobPost) values ('$name', '$quali', '$number', '$email', '$refere', '$jobPost')";

    $result = mysqli_query($connection, $insertUserData);      # mysqli_query() aik function he jooke querry select karne ke liye use hoota he ye 3 parameters accept karta he jinn men se start ke 2 laazmi dene hoote hen teesra wala optional hoota he and iss function ko use karna zarori hoota he

    if ($result) {
?>

        <script>
            alert("Data inseted succesfuly");
        </script>



    <?php
    } else {
    ?>

        <script>
            alert("Data not inserted");
        </script>


<?php
    }
}

?>