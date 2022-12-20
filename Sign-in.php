<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
    <link rel="stylesheet" href="./style.css" />
</head>

<body>
    <div class="container" id="container">
        <div class="formContainer" id="formContainer">
            <div class="signUp" id="signUp" >
                <!-- style=<?php //if(isset($_GET["msg"])){ echo "display:flex;";}else{echo "diplay:none;";}?> -->
                <form action="<?php echo htmlspecialchars("action.php"); ?>" method="post">
                    <div class="inputBox">
                        <input type="text" name="username" required  autocomplete="off"/>
                        <span>Enter Name</span>
                    </div>
                    <div class="inputBox">
                        <input type="email" name="email" required  autocomplete="off"/>
                        <span>Enter email</span>
                    </div>
                    <div class="inputBox">
                        <input type="password" name="password" required  autocomplete="off"/>
                        <span>Enter password</span>
                    </div>
                    <div class="inputBox">
                        <input type="password" name="cpassword" required  autocomplete="off"/>
                        <span>Confirm password</span>
                    </div>
                    <button type="submit" name="signin" class="btn">sign up</button>
                </form>
            </div>

            <div class="logIn" id="logIn">
                <form action="<?php echo htmlspecialchars("action.php"); ?>" method="post">
                    <div class="inputBox">
                        <input type="email" name="email" required autocomplete="off"/>
                        <span>Enter email</span>
                    </div>
                    <div class="inputBox">
                        <input type="password" name="password" required autocomplete="off"/>
                        <span>Enter password</span>
                    </div>
                    <div class="inputBox ">
                        <button  type = "submit" name="login" class="btn">Log In</button>
                        <a href="./forgotPassword.php">Forgot password</a>
                    </div>

                </form>
                <span style=<?php if(isset($_GET["msg"])) echo "display:block;";else echo "display:none;";?> class="error">
                <?php if(isset($_GET["msg"])) echo $_GET["msg"]; ?>
                </span>
            </div>
        </div>

        <div class="panels-left animation" id="panels" style="animation-name:no-animation;">
            <div class="text" id="text">
                <h1 id="heading">NEW HERE</h1>
                <p id="text-content">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi
                    expedita autem, aliquid optio ab exercitationem suscipit. Vitae
                    accusamus,Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi
                </p>
                <button class="btn" id="btn">Sign Up</button>
            </div>
            <div class="image" id="image">
                <img src="./undraw_diary_re_4jpc.svg" alt="" />
            </div>

        </div>
    </div>
    <script type="application/javascript">
        function myFunction(x) {
            console.log("change");
        }
        var x = window.matchMedia("(max-width: 480px)");
        x.addEventListener("change", myFunction(x));
        console.log(x);
        myFunction(x);
        let btn = document.getElementById("btn");
        let logIn = document.getElementById("logIn");
        let signUp = document.getElementById("signUp");
        let panels = document.getElementById("panels");
        let text = document.getElementById("text");
        let image = document.getElementById("image");
        let container = document.getElementById("container");
        let formContainer = document.getElementById("formContainer");
        let heading = document.getElementById("heading");
        let textContent = document.getElementById("text-content");


        const handleClick = () => {
            if (btn.innerText == "Sign Up") {
                
                logIn.classList.remove("scale-in-center");
                logIn.style.display = "none";
                panels.classList.remove("panels-left");
                panels.classList.add("panels-right");
                if (x.matches) {
                    panels.style.animationName = "round-sm-right";
                    formContainer.style.transform = "translateX(50%)";
                    container.style.backgroundColor = "#20dbc2";
                    panels.style.backgroundColor = "#F1F03C";
                } else {
                    panels.style.animationName = "round-right";
                }

                signUp.style.display = "block";
                signUp.classList.add("scale-in-center");
                formContainer.style.left = "0%";
                text.style.order = 2;
                image.style.order = 1;
                image.innerHTML = " <img src='./undraw_add_notes_re_ln36.svg' alt=''>"
                heading.innerText = "Already having account";
                btn.innerText = "Log In";

            } else if (btn.innerText == "Log In") {

                signUp.classList.remove("scale-in-center");
                signUp.style.display = "none";
                logIn.classList.add("scale-in-center");
                logIn.style.display = "block";
                panels.classList.add("panels-left");

                panels.classList.remove("panels-right");
                if (x.matches) {
                    panels.style.animationName = "round-sm-left";
                    formContainer.style.transform = "translateX(-50%)";
                    container.style.backgroundColor = "#F1F03C";
                    panels.style.backgroundColor = "#20dbc2";
                } else {
                    panels.style.animationName = "round-left";
                }

                formContainer.style.left = "50%";
                image.style.order = 2;
                text.style.order = 1;
                image.innerHTML = "<img src='./undraw_diary_re_4jpc.svg' alt=''>";
                heading.innerText = "New Here";
                btn.innerText = "Sign Up";

            }


        }
        btn.addEventListener("click", handleClick);
    </script>
</body>
</html>