<?php

session_start();

if(isset($_SESSION['username'])){

header("Location: profile_main.php");

}else{

header("Location: index1.php");

}
