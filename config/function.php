<?php

/**
 * LangsariSoftware - A Delicious PHP Component
 *
 * @package  LangsariEngine
 * @author   Kholed Langsari <langsaree@gmail.com>
 */


function name($getFirstName, $getLastName, $getPhoneNumber)
{
    $firstName = $getFirstName;
    $lastName = $getLastName;
    $getPhoneNumber = $getPhoneNumber;
    echo "My name is" . $firstName . $lastName . "My phone number is" . $getPhoneNumber;
}

//name("Kholed", "Langsari", 12345);

function connection()
{
    //define connection elements
    global $connection;

    $dbHost = "localhost:8889";
    $dbDatabase = "ors_ycc_refactoring";
    $dbUsername = "root";
    $dbPassword = "root";

    //connect to Database
    $connection = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbDatabase)
    or die("Fail to connect database"
        . mysqli_error($connection));

    //set unicode character
    mysqli_set_charset($connection, "utf8");

}

function login()
{

}

function logout()
{

}