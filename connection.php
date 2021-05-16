<?php

$dbhost="sql206.epizy.com";
$dbuser="epiz_28630821";
$dbpass="nfgJwjp3IGhz9";
$dbname="epiz_28630821_demodatabase";


if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
    die("failed to connect!");
}