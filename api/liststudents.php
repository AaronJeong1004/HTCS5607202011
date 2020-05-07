<?php
session_start();
if (isset($_POST['admin'])){
    include_once "class/Administrator.php";
    $admin = new Administrator();
    $students = $admin->showStudent();
    $stds = json_encode($students);
    echo $stds;
}else{
    $msg = json_encode("you are not login");
    echo $msg;
}

