<?php

session_start();

if(!isset($_SESSION['userName']) && !isset($_SESSION['password'])) {
    header("Location:../../index.php");
}

//include '../../src/common/DBConnection.php';
//
//$conn=new DBConnection();
//
//print_r($conn->getAll("SELECT * FROM `notices`"));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Kagera Sugar company Limited</title>

    <!-- Bootstrap -->
    <link href="../../resource/css/bootstrap.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../../resource/css/font-awesome.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../../resource/css/nprogress.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="../../resource/css/custom.css" rel="stylesheet">
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">

        <!-- side and top bar include -->
        <?php include '../partPage/sideAndTopBarMenu.php' ?>
        <!-- /side and top bar include -->

        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h5>
                            <?php
                            if(!empty($_GET['message'])) {
                                if($_GET['message']=="success") {
                                    echo "<div class=\"alert alert-success fade in alert-dismissable\">
                                    <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\" title=\"close\">×</a>
                                    Notice Successfully updated To Notice Board
                                    </div>";
                                } else if($_GET['message']=="failed") {
                                    echo "<div class=\"alert alert-danger fade in alert-dismissable\">
                                    <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\" title=\"close\">×</a>
                                    Notice updated To Notice Board Unfortunately Failed, Please Try Again Later
                                    </div>";
                                }
                            }
                            ?>
                        </h5>
                        <?php 
                        if (isset($_GET['id'])) {
     $id = $_GET['id'];

    include '../../src/common/conn.php';
   ?>
                        <h3>update Notice to Notice Board</h3>
                    </div>
                </div>
                <div class="clearfix"></div>

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Put your employee notice <small>correctly</small></h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                              
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">

                                <form action="../../src/store/updateNoticeStore.php" method="post" class="form-horizontal form-label-left" novalidate>
<?php 

$query = "select * from notices where id = $id";
$run = mysqli_query($con,$query);
$row = mysqli_fetch_array($run);
   
                                    ?>
                                    <span class="section">Create a Notice</span>
<input type="hidden" name="id" value="<?php echo $id; ?>">
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="noticeSubject">Notice Subject <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="noticeSubject" class="form-control col-md-7 col-xs-12" data-validate-minmax="10,20" name="noticeSubject" value="<?php echo $row['subject']; ?>" required="required" type="text">
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="noticeDate">Notice Date <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="noticeDate" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="noticeDate" required="required" type="date">
                                            <span class="text text-success">Previously: <?php echo $row['notice_date']; ?></span>
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="noticeTime">Notice Time <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="time" id="noticeTime" name="noticeTime" required="required"  class="form-control col-md-7 col-xs-12" value="<?php echo $row['notice_time']; ?>">
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="noticeDesc">Notice Description<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <textarea rows="5" id="noticeDesc" name="noticeDesc" required="required" placeholder="Notice Description" class="form-control col-md-7 col-xs-12"><?php echo $row['description']; ?></textarea>
                                        </div>
                                    </div>

                                    <div class="ln_solid"></div>

                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-3">
                                            <button type="reset" class="btn btn-primary">Reset</button>
                                            <button name="btn-notice" id="btn-notice" type="submit" class="btn btn-success">Update</button>
                                        </div>
                                    </div>
                                <?php } ?>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->

        <!-- footer content include -->
        <?php include '../partPage/footer.html' ?>
        <!-- /footer content include -->
    </div>
</div>

<!-- jQuery -->
<script src="../../resource/js/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../../resource/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../../resource/js/fastclick.js"></script>
<!-- NProgress -->
<script src="../../resource/js/nprogress.js"></script>
<!-- validator -->
<script src="../../resource/js/validator.js"></script>
<!-- Custom Theme Scripts -->
<script src="../../resource/js/custom.min.js"></script>
</body>
</html>
