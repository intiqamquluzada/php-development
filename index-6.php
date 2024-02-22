<?php


session_start();
ob_start();


$_SESSION['name'] = 'INTIGAM';


echo $_SESSION['name'];