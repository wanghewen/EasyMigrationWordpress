<?php
// This file is used to change wordpress entry point by modifying wp_options table.
$mysqli = new mysqli('db:3306', 'wanghewen', 'wanghewen@wordpress', 'wordpress');
if (mysqli_connect_errno())
{
    echo 'fail - mysqli_connect_err';
    exit();
}
if (!$mysqli->ping())
{
    echo 'fail - ping';
    exit();
}
$WP_HOME = getenv("WP_HOME");
$WP_SITEURL = getenv("WP_SITEURL");
$result1 = mysqli_query($mysqli, 'UPDATE `wp_options` SET `option_value`=\''.$WP_HOME.'\' WHERE `option_id`=\'1\';');
$result2 = mysqli_query($mysqli, 'UPDATE `wp_options` SET `option_value`=\''.$WP_SITEURL.'\' WHERE `option_id`=\'2\';');

if($result1 && $result2)
    echo 'successful';
else
    echo 'fail - db query';
?>