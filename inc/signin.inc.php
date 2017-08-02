<?php
/**
 * Created by PhpStorm.
 * User: RTG
 * Date: 2/8/2017
 * Time: 8:37 PM
 */

$username = $_POST['username'];
$password = $_POST['password'];

if (empty($username)) {
    header ("Location: ../forbidden?nodatalogin");
} else {

    $file = new SQLite3("../database/saves.db");
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $res = $file->query($sql);
    if (!$res->fetchArray(1)) {
        header("Location: ../signup?nouser");
    } else {
        header("Location: ../login?success");
    }

}