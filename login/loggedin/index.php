<?php
session_start();

if (!isset($_SESSION['username'])) {
    header ("Location: ../../forbidden?notauth");
}

?>

<!DOCTYPE html>

<!--
Copyright (C) 2017 RTG
This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.
This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.
You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
-->

<html>
<head>
    <meta charset="UTF-8">
    <title> SendAt.me | Logged In </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>

        input {
            text-align: center;
        }

    </style>
</head>
<body>

<nav class="navbar navbar-default">

    <div class="container-fluid">

        <div class="navbar-header">

            <a class="navbar-brand" href="#"> SendAt.me </a>

        </div>

        <ul class="nav navbar-nav navbar-left">

            <?php

                $username = $_SESSION['username'];
                $file = new SQLite3("../../database/saves.db");
                $sql = "SELECT * FROM users WHERE username = '$username'";
                $res = $file->query($sql);
                if ($res->fetchArray(1)) {
                    echo "<li class='active'> <a href='index.php'> $username </a> </li>";
                } else {
                    echo "<li> <a href=\"index.php\"> Not Logged in </a> </li>";
                }

            ?>

            <li> <a href="logout.php"> Logout </a> </li>

        </ul>

    </div>

</nav>

<center>

    <?php

        $url = "http://localhost".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
        if(strpos($url, 'welcome') != FALSE) {
            echo "You've successfully logged in! <br>";
        }

    ?>

    <br><br>

    <h3> Contents will be worked here! </h3>

</center>

</body>
