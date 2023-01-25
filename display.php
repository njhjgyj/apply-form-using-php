<?php

include "connection.php";

$selectQuery = "select * from table1ofproject1";
$query = mysqli_query($connection, $selectQuery);
$count = mysqli_num_rows($query);      # mysqli_num_rown() aik function he jooke jo appke database men appka data hoota he usskin length batata he and isi men aik aur function hoota he jisska name he mysqli_num_fields() isska kaam fields batane ka hoota he fields matlab id name password and ayse jo fileds hooti hen woh fields batata he ke kitni fields hen and ye jo mysqli_num_rows() he ye ye jo ields men data hoota he jese ke id men 1 he ya2 name men boost he ya harry password men 123 he ya kuch ye batane ke liye use hota he and number ki suurat men batata he jese ke agar 1 aya to matlab 1 data he appke table men and field field waale function men bhi number men batata he

// while ($result = mysqli_fetch_array($query)) {      # mysqli_fetch_row() aik function he jooke data ko mangwane ke liye use hoota he and fetch ka matlab lana hoota he
//     echo $result['name'] . '<br> <br>';
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users Data</title>
</head>

<body>

    <div id="mainDiv">

        <div id="div1">

            <span>

                <table>

                    <thead>
                        <tr>

                            <th>ID</th>
                            <th>NAME</th>
                            <th>DEGREE</th>
                            <th>MOBILE</th>
                            <th>EMAIL</th>
                            <th>REFER</th>
                            <th>POST</th>
                            <th>OPERATION</th>

                        </tr>
                    </thead>

                    <tbody>


                        <?php
                        while ($result = mysqli_fetch_array($query)) {

                        ?>

                            <tr>

                                <td> <?php echo $result['id'] ?> </td>
                                <td> <?php echo $result['name'] ?> </td>
                                <td> <?php echo $result['degree'] ?> </td>
                                <td> <?php echo $result['mobile'] ?> </td>
                                <td> <?php echo $result['email'] ?> </td>
                                <td> <?php echo $result['refer'] ?> </td>
                                <td> <?php echo $result['jobPost'] ?> </td>
                                <td> <a href="edit.php?id=<?php echo $result['id']; # ye jo ?id= karke echo men $result['id'] karwai he isska matlab he ke jiss bhi edit button pe user apna cursor leke jaye ga usski id hamen show karwadega 
                                                            ?>" title="Edit"> Edit </a> &nbsp;&nbsp;
                                    <a href="delete.php?id=<?php echo $result['id'];
                                                            ?>" title="Delete"> Delete </a>
                                </td>

                            </tr>
                        <?php
                        };
                        ?>
                    </tbody>

                </table>

            </span>

        </div>

    </div>

</body>

</html>