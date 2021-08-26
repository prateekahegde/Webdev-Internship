<?php 

    // include 'config.php';
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_DATABASE', 'internship');
    $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

    $email = $_POST["email"];
    $password = $_POST["password"];

    $query = mysqli_query($conn, "select * from users where email='$email' AND password='$password'");
    $rows = mysqli_fetch_assoc($query);
    $num = mysqli_num_rows($query);
    if($num == 1) {
        echo ("<script LANGUAGE='JavaScript'>window.alert('Logged In!');window.location.href='dashboard.html';</script>");
    }
    else {
        echo ("<script LANGUAGE='JavaScript'>window.alert('Error!');window.location.href='index.html';</script>");
    }
    mysqli_close($conn);

?>