<?php
require_once('scripts/config.php');

confirm_logged_in();

if(isset($_POST['submit'])){

    $fname = trim($_POST['fname']);
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $email = trim($_POST['email']);

    $chars = 'abcefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $password = sha1(substr(str_shuffle($chars), 0, 7)); // generates and shuffles the password string using the characters listed above in $char.


    if(empty($username) || empty($email)){
        $message = 'Please fill the required fields.';
    }else{
        $result = createUser($fname, $username, $password, $email);
        $message = 'Data seems valid.';
        sendEmail(); // sends email once a user has been created.
    }

    function sendEmail() {
        $to = $_POST['email'];
        $subject = 'Your new password for pans class files.';
        $username_ = 'Username: '.$_POST['username'];
        $password_ = 'Password: '.$_POST['password']; // the generated password is attached inside the email that has been sent out.
        $body_ = 'URL: http://localhost:8888/hause_blake_3014_r2/admin/adminlogin.php';
        $headers = 'Message From Blake.';
        mail($to, $subject, $username_, $password_, $body_, $headers);
        header('Location: ./index.php'); 
    }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create User</title>
</head>
<body>
    <?php if(!empty($message)):?>
        <p><?php echo $message;?></p>
    <?php endif;?>

    <h2>Create User</h2>
    <form action="admin_createuser.php" method="POST">
        <label for="first_name">First Name</label>
        <input type="text" name="fname" id="first_name"> <br><br>

        <label for="user_name">User Name</label>
        <input type="text" name="username" id="user_name"> <br><br>

        <label for="email">Email</label>
        <input type="email" name="email" id="email"> <br><br>

        <button type="submit" name="submit">Create User</button>
        
    </form>
</body>
</html>