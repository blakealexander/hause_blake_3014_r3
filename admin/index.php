<?php
require_once 'scripts/config.php';
confirm_logged_in();


// if (!isset($_COOKIE['firsttime']))
// {
//     setcookie("firsttime", "no");
//     header('Location: admin_edituser.php');
//     exit();
// }
// else
// {
//     redirect_to('Location: index.php');
//     // exit();
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to your admin panel</title>
</head>
<body>
    <h1>Admin Dashboard</h1>
    <h3>Welcome <?php echo $_SESSION['user_name']; ?></h3>
    <p>This is your admin dashboard.</p>

    <nav>
        <ul>
            <li><a href="admin_createuser.php">Create User</a></li>
            <li><a href="admin_edituser.php">Edit User</a></li>
            <li><a href="#">Delete User</a></li>
            <li><a href="scripts/caller.php?caller_id=logout">Sign Out</a></li>
        </ul>
    </nav>


<?php
echo 'Last Log In: ';
$timezone = -5;

$cookie = ($_COOKIE['user_date'] + $timezone);
$cookie_value = "SELECT * FROM tbl_users WHERE user_date = " . $cookie;
setcookie($cookie_value, time());

if (!isset($_COOKIE[$cookie_value])) {
    echo gmdate("Y/m/j H:i", time() + 3600 * $cookie);
}
?>

<p><?php
$hour = date('H');
$dayTime = ($hour > 17) ? "Evening" : ($hour > 12) ? "Afternoon" : "Morning"; 
echo "Good " . $dayTime;
?></p>
</body>
</html>