<?php

require_once '../../function/utils.php';
session_start();
if(isset($_SESSION['status']) && $_SESSION['status']=='connected'){
    $_SESSION=[];
    redirect('/admin');

}