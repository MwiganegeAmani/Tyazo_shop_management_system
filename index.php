<?php
session_start();

//if(!isset($_SESSION['admin_name']) && !isset($_SESSION['password'])) {
//    header("Location:views/admin/dashboard.php");
//}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="icon/png" href="resource/images/logo.jpeg">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tyazo Mdodo Investment Co Ltd</title>

    <!-- Bootstrap -->
    <link href="resource/css/bootstrap.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="resource/css/font-awesome.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="resource/css/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="resource/css/animate.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="resource/css/custom.css" rel="stylesheet">
</head>

<body class="login">
<div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
        <div class="animate form login_form" style = "border:3px solid #09aaff; padding-right: 5vh; padding-left: 5vh;">
            <section class="login_content">
                <h2 style="color: #09aaff; font-size: 5vh;">Tyazo Mdodo</h2><h5 style="color: #09aaff; margin-top: -7px; letter-spacing: 1px;">Investment Co Ltd</h5>
                <form action="src/store/Login.php" method="post">
                    <h1 style="color: #09aaff;">Log in</h1>
                    <h5>
                        <?php
                        if(!empty($_GET['msg'])) {
                            $var=$_GET['msg'];
                            echo "<div class=\"alert alert-danger fade in alert-dismissable\">
                                    <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\" title=\"close\">×</a>
                                    $var
                                    </div>";
                        }
                        ?>
                    </h5>
                    <div>
                        <input type="text" id="userName" name="userName" class="form-control" placeholder="Username" required="" />
                    </div>
                    <div>
                        <input type="password" id="password" name="password" class="form-control" placeholder="Password" required="" />
                    </div>
                    <div>
                        <button type="submit" name="login" class="btn btn-default submit">Log in</button>
                        <a class="reset_pass" href="#signup">Lost your password ?</a>
                    </div>

                    <div class="clearfix"></div>

                    <div class="separator">
<!--                        <p class="change_link">New to site?-->
<!--                            <a href="#signup" class="to_register"> Create Account </a>-->
<!--                        </p>-->
<!---->
                        <div class="clearfix"></div>
                        <br />

                        <div>
                            <p>©2022 All Rights Reserved.</p>
                        </div>
                    </div>
                </form>
            </section>
        </div>

        <div id="register" class="animate form registration_form" style = "border:3px solid #09aaff; padding-right: 5vh; padding-left: 5vh;">
            <section class="login_content" >
                  <h2 style="color: #09aaff; font-size: 5vh;">Tyazo Mdodo</h2><h5 style="color: #09aaff; margin-top: -7px; letter-spacing: 1px;">Investment Co Ltd</h5>
                <form method="post" action="">
                  <h1 style="color: #09aaff;">Recover Password</h1>
                    <?php include 'src/store/forgotpassword.php'; ?>
                      <div>
                        <input type="text" class="form-control" placeholder="Your Full Name" required="" name="Email" />
                    </div>
                    <div>
                        <input type="text" class="form-control" placeholder="Your Username" required="" name="Username" />
                    </div>
                  
                    <div>
                        <input type="password" class="form-control" placeholder="New Password" required="" name="Password" />
                    </div>
                    <div>
                        <button class="btn btn-default submit" name="btn" type="submit">Submit</button>
                    </div>

                    <div class="clearfix"></div>

                    <div class="separator" >
                        <p class="change_link">Already a member ?
                            <a href="#signin" class="to_register"> Log in </a>
                        </p>

                        <div class="clearfix"></div>
                        <br />

                        <div>
                            <p>©2022 All Rights Reserved.</p>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>
</div>
</body>
</html>

