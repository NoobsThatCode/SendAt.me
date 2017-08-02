<?php
/**
 * Created by PhpStorm.
 * User: RTG
 * Date: 2/8/2017
 * Time: 9:36 PM
 */

session_start();
session_destroy();

header ("Location: ../../../");
