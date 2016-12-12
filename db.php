<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 12.12.2016
 * Time: 23:39
 */
$db=mysqli_connect("localhost","root", "")
    or die("<p> error connect to mysql:".
    mysqli_error(). "</p>");
echo "mysql connection succes";
mysqli_select_db($db, "testgit")
    or die("<br><p> error connect to database:".
    mysqli_error(). "</p>");
echo "db connection succes";