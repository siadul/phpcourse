<?php
ini_set("display_errors", '1'); // ustawienia php
error_reporting(E_ALL); // poziom logowanych błędów

// include vs require

include('page1000.php');
include('page12.php');
include('page12.php');

//require('page1000.php'); // fatal error!
//include('page12.php');

// include_once vs require_once
include_once('text1.txt');
include_once('text1.txt');

// analogicznie z require_once