<?php
if (isset($_POST['username'])){
    $username = $_POST['username'];
    $pwd = $_POST['password'];
    $admin = new Administrator();
    $admin->login($username, $pwd);
    if (!is_null($admin->id)){
        session_start();
        $_SESSION['admin_id'] = $admin->id;
        $links = array();
        array_push($links, ['List students', 'liststudents.php']);
        array_push($links, ['List students', 'liststudents.php']);
        echo "<p><a href='liststudents.php'>List students</a></p>";
    }
}