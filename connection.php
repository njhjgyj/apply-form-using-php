<?php
// session_start();

$server = "localhost";      # server ka name localhost he
$userName = "root";      # user root he
$password = "";     # password null he
$dataBase = "project1";     # yhan pe humne aik variable banai he jisska name rajha he $database and ussmen jo humne database men aik project1 name ka dabase banaya wah he woh yhan pe likh diya he

$connection = mysqli_connect($server, $userName, $password, $dataBase);      # mysqli_connect() aik function hoota he jooke database se connection ko banane ke liye use hoota he and jo upper variables banai he woh yhan pe pass kardi hen subse pehle server ke baare men batana hoota he phir username phir password and phir database

if ($connection) {    # yhan pe hum check karwa rahe hen ke database se connection hoogya ya nahi agar ho jaye ga to if waali condition chal jaye gi and agar nahi hoo ga to else waali chal jaye gi

?>

    <script>
        alert("Connection Succesful");
    </script>

<?php

} else {
    die("Connection lost" . mysqli_connect_error());       # mysqli_connect_error() aik function he jo ke jub database se connection nahi ban paye ya connection database se nahi ho paye to error show karwane ke liye use hoota he
};

?>