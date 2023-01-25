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

                <form action="" method="post" id="form2">

                    <?php

                    include "connection.php";

                    $ids = $_GET['id'];
                    $selectIds = "select * from table1ofproject1 where id = $ids";

                    $showData = mysqli_query($connection, $selectIds);

                    $storeInArray = mysqli_fetch_array($showData);

                    if (isset($_POST['submit2'])) {
                        $name = $_POST['name1'];
                        $quali = $_POST['qualification1'];
                        $number = $_POST['number1'];
                        $email = $_POST['email1'];
                        $refere = $_POST['references1'];
                        $jobPost = $_POST['webDeveloper1'];

                        $editUserData = "update table1ofproject1 set id=$ids, name='$name', degree='$quali', mobile='$number', email='$email', refer='$refere', jobPost='$jobPost' where id = $ids";

                        $result = mysqli_query($connection, $editUserData);      # mysqli_query() aik function he jooke querry select karne ke liye use hoota he ye 3 parameters accept karta he jinn men se start ke 2 laazmi dene hoote hen teesra wala optional hoota he and iss function ko use karna zarori hoota he

                        if ($result) {
                    ?>

                            <script>
                                alert("Data updated properly");
                            </script>



                        <?php
                        } else {
                        ?>

                            <script>
                                alert("Data not updated");
                            </script>


                    <?php
                        }
                    }

                    ?>

                    <input type="text" name="name1" id="nameinp1inEdit" placeholder="Your name" required value=" <?php echo $storeInArray['name'] ?> ">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" name="qualification1" id="qualificationinp2inEdit" placeholder="Your qualification" required value=" <?php echo $storeInArray['degree'] ?> "><br><br>

                    <input type="tel" name="number1" id="numberinp3inEdit" placeholder="Your mobile number" required value=" <?php echo $storeInArray['mobile'] ?> ">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="email" name="email1" id="emailinp4inEdit" placeholder="Your email id" required value=" <?php echo $storeInArray['email'] ?> "><br><br>

                    <input type="text" name="references1" id="referencesinp5inEdit" placeholder="Any references" required value=" <?php echo $storeInArray['refer'] ?> ">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" name="webDeveloper1" id="weDeveloperinp6inEdit" value=" <?php echo $storeInArray['jobPost'] ?> "><br><br>

                    <span>

                        <input type="submit" name="submit2" id="submitBtn1" value="Update">

                    </span>

                </form>

            </span>

        </div>

    </div>

</body>

<script src="app.js"></script>

</html>