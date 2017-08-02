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
}

    $file = new SQLite3("../database/saves.db");
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    $res = $file->query($sql);
    // header ("Location: ../login?signupsuc");

    copy_directory("../copy", "../$username", $username);

    function copy_directory($src,$dst, $user)
    {
        $dir = opendir($src);
        @mkdir($dst);
        while (false !== ($file = readdir($dir))) {
            if (($file != '.') && ($file != '..')) {
                if (is_dir($src . '/' . $file)) {
                    recurse_copy($src . '/' . $file, $dst . '/' . $file);
                } else {
                    copy($src . '/' . $file, $dst . '/' . $file);
                }
            }
        }
        closedir($dir);

        header ("Location: ../signup?success");

    }