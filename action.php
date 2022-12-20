<?php
include "./db.php";
if (isset($_POST['signin'])) {
    // echo "Sign-in.php";
    $username = strip_tags(trim($_POST["username"]));
    $useremail = strip_tags(trim($_POST["email"]));
    $password = strip_tags($_POST["password"]);
    $cpassword = $_POST["cpassword"];
    // echo "Sign-in.php";
    $username_valid = $useremail_valid = $password_valid = false;
    $msg = "";
    if (!empty($username)) {
        
        if (strlen($username) > 2 && strlen($username) < 30) {
            if (!preg_match('/[^a-zA-Z\.\s]/', $username)) {
                $username_valid = true;
            } else {
                $mag .= "Name can contain only alphabate<br>";
            }
        } else {
            $mag .= "Length of the name is should be greater than 2 and less than 30<br>";
        }
    } else {
        $mag .= "Name can not be blank<br>";
    }
    if (!empty($useremail)) {
        if (filter_var($useremail, FILTER_VALIDATE_EMAIL)) {
            $query = "SELECT useremail FROM `users` WHERE useremail = '$useremail' ";
            $result = mysqli_query($conn, $query) or die("Can not get result" . mysqli_error($conn));
            if (mysqli_num_rows($result) > 0) {
                $msg .= "This email is already registered";
            } else {
                $useremail_valid = true;
            }
        } else {
            $mag .= "Enter a valid Email<br>";
        }
    } else {
        $mag .= "Email can not be blank<br>";
    }
    if (!empty($password)) {
        if (strlen($password) > 3 && strlen($password) < 15) {

            $password_valid = true;
        } else {
            $mag .= "Password should not be less than 8 or greater than 15";
        }
    } else {
        $mag .= "password can not be blank<br>";
    }


    if (($password === $cpassword) && $useremail_valid && $username_valid && $password_valid) {
        $password = password_hash(($_POST["password"]), PASSWORD_DEFAULT);
        // $password = $_POST["password"];
        $sql = "INSERT INTO `users` (`username`, `useremail`, `password`) VALUES ('$username', '$useremail', '$password')";
        $result = mysqli_query($conn, $sql);
        $msg .= "Your Registration is completed successfully";
        session_start();
        $_SESSION["user"] = $useremail;
        header("Location: home.php?msg" . $msg);
        // header("Location: /Notes/Sign-in.php?msg=" . $msg);

    } else {
        header("Location: Sign-in.php?msg=" . $msg);
    }
}
elseif(isset($_POST['login'])){
    $useremail = $_POST["email"];
    $password = strip_tags($_POST["password"]);
    $password = $_POST["password"];
    $msg = "";
    $query = "SELECT * FROM `users` WHERE `useremail` = '$useremail'";
    $result = mysqli_query($conn, $query);
    $count = mysqli_num_rows($result);
    if($count == 1){
        $row = mysqli_fetch_assoc($result);
        $hash_password = $row['password'];
        if(password_verify($password, $hash_password)){
            $msg .= "Login successful";
            session_start();
            $_SESSION["user"] = $useremail;
            $_SESSION["user-name"] = $row['username'];
            header("Location: home.php");
        }else{
            $msg .="Incorrect password";
        }
        
    }else{
        $msg .= "This email address is not resistered.";
        header("Location: Sign-in.php?msg=".$msg);
    }
}
elseif(isset($_POST['submit'])){
    session_start();
    $useremail = $_SESSION['user'];
    $title = strip_tags(trim($_POST["title"]));
    $description = $_POST['description'];
    
    $title_valid = false;
    $msg = '';
    if(!empty($title)){
        
        $query = "SELECT title FROM `notes` WHERE title = '$title' ";
        $result = mysqli_query($conn, $query) or die("Can not get result" . mysqli_error($conn));
            if (mysqli_num_rows($result) > 0) {
                $msg .= "This title is already present";
            } else {
                $title_valid = true;
            }
    }
    else{
        $msg .= 'Titles can not be empty';
    }
    if($title_valid){
        $query = "INSERT INTO `notes` (`useremail`, `title`, `description`) VALUES ('$useremail', '$title', '$description')";
        $result = mysqli_query($conn, $query) or die(mysqli_error(($conn)));
        $msg .= "successfully inserted";
        header('Location: home.php?msg='.$msg);
    }else{
        header('Location: home.php?msg='.$msg);
    }
}

elseif(isset($_POST['update'])){
    
    $updated_title = strip_tags(trim($_POST["title"]));
    $updated_description = $_POST['description'];
    $updated_title_valid = false;
    $id = $_GET['id'];
  
    $msg = '';
    if(!empty($updated_title)){
        // DELETE FROM `notes` WHERE `notes`.`sl.no` = 10
            $updated_title_valid = true;
     
    }
    else{
        $msg .= 'Titles can not be empty';
    }
    if($updated_title_valid){
        $query = "UPDATE `notes` SET `title` = '$updated_title', `description` = '$updated_description' WHERE `sl.no` ='$id' ";
        $result = mysqli_query($conn, $query) or die(mysqli_error(($conn)));
        $msg .= "successfully inserted";
        header('Location: home.php?msg='.$msg);
    }else{
        header('Location: home.php?msg='.$msg);
    }
}
elseif(isset($_POST['delete'])){
    $id = $_GET['id'];
    $query = "DELETE FROM `notes` WHERE `notes`.`sl.no` = '$id' ";
    $msg= '';
    $result = mysqli_query($conn, $query) or die('Can not delete now use after some time'.mysqli_error($conn));
    if($result){
        $msg .="Deleted successfully";
    }else{
        $msg .="Can not delete now try after some time";
    }
    header('Location: home.php?msg'.$msg);
    }

?>