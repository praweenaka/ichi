<?php
include './CheckCookie.php';
$cookie_name = "user";
// if (isset($_COOKIE[$cookie_name])) {
//     $mo = chk_cookie($_COOKIE[$cookie_name]);
//     if ($mo == "ok") {
//         header('Location: ' . "home.php");
//         exit();
//     }
// }
?> 
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.1">
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link  href="css/login.css" rel="stylesheet">    

        <link rel="stylesheet" href="css/ionicons/css/ionicons.min.css">
        <link rel="icon" type="image/png" sizes="16x16" href="andpic.png">

        <script src="js/vuepkg.js" type="text/javascript"></script>

        <script src="js1/user.js"></script>

        <style>

            /*body{*/
            /*    background-color: #3f484f;*/
            /*}*/
            /*#login-form{*/
            /*    background-color: #e7535f;*/
            /*    border: 0px;*/
            /*}*/
            /*#topic{*/
            /*    color: white;*/
            /*}*/
            /*#lab{*/
            /*    color: white;*/
            /*}*/
            /*#txterror{*/
            /*    color: white;*/
            /*}*/
        </style>

    </head>
    <body>




        <div class="container">
            <div  class="form-signin form-group mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2" >
                <div>
                    <!--<img style="align-content: center" class="img-responsive" src="img/Mas_Holdings_Logo.png">-->
                    <div class="form-group">
                        <h1 style="color: #3c8dbc" id="topic"><center>ICHIRO</center></h1>
                    </div>
                </div>
                <!--<h3><center>MAS HOLDINGS</center></h3>-->
                <div class="form-group"></div>

                <strong id="lab">Username:</strong>

                <input class="form-control"  name="UserName" type="text" id="txtUserName" onkeypress="keyset('txtPassword', event)"  />



                <strong id="lab">Password:</strong>

                <input class="form-control" name="Password" type="password" id="txtPassword" onkeypress="keyset('lbtn', event)"/>
                <div id="txterror" class="login_error">

                </div>


                <button class="btn btn-primary" id="lbtn"  name="lbtn" onclick="IsValiedData();">Sign in</button>

            </div>
        </div>


    </body>    
</html>     


<script>
    var elem = document.getElementById("txtPassword");
    elem.onkeyup = function (e) {
        if (e.keyCode == 13) {
            IsValiedData();
        }
    }


</script>


<script src="js/jquery-2.1.0.js"></script>
<script src="js/bootstrap.min.js"></script>