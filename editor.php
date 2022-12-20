<?php
session_start();
$usersemail = $_SESSION["user"];
if ($usersemail) {
} else {
    header("Location: Sign-In.php");
}
?>
<?php 

include "./db.php";
if (isset($_GET["id"])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM `notes` WHERE `sl.no` = '$id' ";
    $result = mysqli_query($conn, $query) or die("Cannot fetch the data" . mysqli_error($conn));

    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        $titlet = $user['title'];
        // echo $titlet; 
        $description = $user['description'];
        
    } else {
    
    }
} else {
    
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="home.css">
    <style>
        .userImg {
            background-color: yellow;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="left" style="background-color: #2ec194;">

            <?php require 'nav.php'; ?>
        </div>
        <div class="right">
            
            <?php if(isset($_GET['id'])){ $action = "action.php?id=".$_GET['id'] ;} else {$action = "action.php";} ?>
            <form action="<?php echo htmlspecialchars($action); ?>" method="post">
                <div class="editor active" id="editorWrapper">
                    <input id="title" class="title" name='title' placeholder="Title" value="<?php if (isset($titlet)) {echo $titlet;}else{}?>" autocomplete="off"/>
                    <textarea id="editor" name='description'>
                        <?php if (isset($description)) echo $description;?>
                    </textarea>
                    <div class="button" style="<?php if (isset($_GET["id"])) {echo "justify-content:space-around;";}else{echo "justify-content:center;";}?>">
                        <button type="submit" name="<?php if (isset($_GET["id"])) {echo "update";}else{echo "submit";}?>" class="btn"><?php if (isset($_GET["id"])) {echo "Update";}else{echo "Submit";}?></button>
                        <?php if (isset($_GET["id"])) {?>
                        <button type="submit" name="delete" class="btn"> delete</button>
                            <?php
                            }else{}?>
                        
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="./ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('editor');
    </script>
    
</body>

</html>