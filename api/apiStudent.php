<?php
//session_start();
//if (isset($_SESSION['admin_id]'])) {
    include_once "../class/Administrator.php";
    $admin = new Administrator();
    $student = $admin->showStudents($_GET["id"]);
   //echo json_encode($student);
//}else{
//    echo json_encode("login please");
//}