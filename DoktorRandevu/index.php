<?php

session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

use DoktorRandevu\controller\Home;
use DoktorRandevu\controller\Loginuser;
use DoktorRandevu\model\Usermodel;
use DoktorRandevu\controller\Register;
use DoktorRandevu\controller\user;



require "controller/Home.php";
require "config/Baglanti.php";
require "controller/User.php";
require "model/Usermodel.php";
require "controller/Loginuser.php";
require "controller/Registeruser.php";

error_reporting(E_ALL);

@$route=$_GET['route'];
$route=explode('@',$route);

$class  = isset($route[0]) && $route[0] !== '' ? "DoktorRandevu\\controller\\" . ucfirst($route[0]) : "DoktorRandevu\\controller\\Home";
$method = isset($route[1]) && $route[1] !== '' ? $route[1] : "index";   

$run=new $class();
$run->$method();



?>