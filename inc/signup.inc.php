<?php
/**
 * Created by PhpStorm.
 * User: RTG
 * Date: 2/8/2017
 * Time: 8:32 PM
 */

$username = $_POST['username'];
$password = $_POST['password'];

if (empty($username)) {
    header ("Location: ../forbidden/?nodatasignup");
} else {

    $file = new SQLite3("../database/saves.db");
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    $res = $file->query($sql);
    header ("Location: ../login?signupsuc");

}