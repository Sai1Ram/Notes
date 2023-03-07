<?php
session_start();
$usersemail = $_SESSION["user"];
if ($usersemail) {
} else {
    header("Location: Sign-In.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
    <style>
        .userImg {
            background-color: #2ec194;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="left">
            <?php require 'nav.php'; ?>
        </div>
        <div class="right">
            <div class="index" id="index">
                <span style=<?php if (isset($_GET["msg"])) echo "display:block;";
                            else echo "display:none;"; ?> class="error">
                    <?php if (isset($_GET["msg"])) echo $_GET["msg"]; ?>
                </span>
                <div class="search">
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="search" method="post">
                        <input type="text" placeholder="Search" class="searchInput" name="searchInput" autocomplete="off">
                        <button type="submit" name="search" class="btn">Search</button>
                    </form>

                    <select name="sort" id="sorting" onchange="selected()">
                        <option  value="A-Z">--</option>
                        <option id="sortByAlphabate" value="A-Z">A-Z</option>
                        <option id="sortByDate" value="date">DATE</option>
                    </select>
                    

                </div>
                <div class="content-wrapper">
                    <?php
                    include "./db.php";

                    $toogle = false;
                    $msg = '';
                    $sortType = '';

                    if (isset($_POST['search'])) {
                        $searchItem = mysqli_real_escape_string($conn, trim($_POST['searchInput']));
                        if (!empty($searchItem)) {
                            $query = "SELECT * FROM `notes` WHERE (title LIKE '%$searchItem%' or description LIKE '%$searchItem%') && useremail = '$usersemail'  ORDER BY `time` DESC";
                            $result = mysqli_query($conn, $query);
                            if (mysqli_num_rows($result) > 0) {
                                $toggle = true;
                            } else {
                                $toggle = false;
                            }
                        } else {
                            $msg .= "Search item cannot be empty";
                        }
                    } else {
                        if (isset($_GET['sort']) && ($_GET['sort'] == 'DATE')) {
                            $query = "SELECT * FROM `notes` WHERE useremail = '$usersemail' ORDER BY `time` DESC";
                        } else {
                            $query = "SELECT * FROM `notes` WHERE useremail = '$usersemail' ORDER BY title";
                        }
                        $result = mysqli_query($conn, $query) or die("Cannot fetch the data" . mysqli_error($conn));
                        if (mysqli_num_rows($result) > 0) {
                            $toggle = true;
                        } else {
                            $toggle = false;
                            $msg = "Add notes";
                        }
                    }
                    if ($toggle) {

                        while ($user = mysqli_fetch_assoc($result)) {
                            $title = $user['title'];
                            $data = $user['description'];
                            $id = $user['sl.no'];
                            $date = $user['time'];
                    ?>

                            <div class='card' id="card<?php echo $id ?>">
                                <h3 class='card-title'><?php echo $title ?></h3>
                                <div class='card-body'>
                                    <?php echo $data ?>
                                </div>
                            </div>

                    <?php
                        }
                    } else {
                        echo $msg;
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <script>
        let card = document.querySelectorAll(".card");
        // let cardArray = Array.from(card);
        const handleclick = (i) => {
            console.log(card[i])
        }

        function selected() {
            let select = document.getElementById("sorting");
            let selected = select.options[select.selectedIndex].text;
            window.location = `./index.php?sort=${selected}`;
        }
        for (let i = 0; i < card.length; i++) {
            card[i].addEventListener("click", function() {
                let cardId = card[i].id;
                let temp = cardId.slice(4, card.length);
                window.location = `./editor.php?id=${temp}`;
            });

        }
    </script>
</body>

</html>