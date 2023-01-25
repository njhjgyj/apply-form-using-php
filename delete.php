<?php

include "connection.php";

$delId = $_GET['id'];

$deleteTable = "delete from table1ofproject1 where id=$delId";

$selectQuery = mysqli_query($connection, $deleteTable);

if ($selectQuery) {
    ?>

    <script>
        alert("Delete successfuly");
    </script>
    <?php
} else {
    ?>
    <script>
        alert("Not delete properly");
    </script>
    <?php
}
header("location:display.php");     # header() aik function he jooke location ko batane ke liye use hoota he agar jub user delete pe click kare ga to woh display waale page pe chala jaye ga ye batane ke liye header() function use kia he

?>