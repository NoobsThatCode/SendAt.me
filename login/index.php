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
    <title> Welcome to SendAt.me </title>
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

            <li> <a href="../index.php"> Home </a> </li>
            <li> <a href="../signup"> Sign Up </a> </li>
            <li class="active"> <a href="../login"> Login </a> </li>

        </ul>

    </div>

</nav>

<center>

    <?php

        $url = "http://localhost".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
        if(strpos($url, 'success') != FALSE) {
            echo "You've successfully logged in! <br>";
        } elseif (strpos($url, 'nodata')) {
            echo "Please check if you have the correct credentials when logging in! Please try again <br>";
        } elseif (strpos($url, 'nouser')) {
            echo "There's no such username! <br>";
        } elseif (strpos($url, 'signupsuc')) {
            echo "You have signed up! Please login <br>";
        }

    ?>

    <br><br>

    <form method="POST" action="../inc/signin.inc.php">

        <input type="text" name="username" class="input-lg" placeholder="Your Username"><br><br>
        <input type="password" name="password" class="input-lg" placeholder="Your Password"><br><br>
        <button type="submit" class="btn-default"> Sign in </button>

    </form>

</center>

</body>
