<?php
// process.php
include 'dbcon.php';

if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = $_POST['password'];
    
    // Query using username instead of email
    $query = "SELECT * FROM admins WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($con, $query);
    
    if (mysqli_num_rows($result) == 1) {
        session_start();
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        $_SESSION['admin_id'] = $row['id'];
        
        // Redirect to dashboard
        header("Location: home.php");
        exit();
    } else {
        // Invalid login
        header("Location: #");
        exit();
    }
}
?>