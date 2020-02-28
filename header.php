<?php
//192.168.5
if ((substr($_SERVER['REMOTE_ADDR'], 1, 9)) == "192.168.5") {
    $ip = "192.168.5.153:8090/mspace/";
} else {
    $ip = "124.43.17.130:8090/mspace/";
}

function get_title($url) {

    if ($url == "new_user") {
        return 'New User';
        exit();
    }
    if ($url == "user_p") {
        return 'Manage Permission';
        exit();
    }
    if ($url == "invoice") {
        return 'Create Invoice';
        exit();
    }
    if ($url == "sales_report") {
        return 'Sales Report';
        exit();
    }
    if ($url == "eng_sys_finalize") {
        return 'Engine System Finalize';
        exit();
    }
    if ($url == "test") {
        return 'Engine System Finalize';
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.1">
        <title><?php echo get_title($_GET['url']); ?></title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap_custom.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap-multiselect.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="dist/css/font-awesome-4.7.0/css/font-awesome.min.css">  

        <!-- Theme style -->
        <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
        <!-- Ionicons -->
        <!--<link rel="stylesheet" href="css/ionicons/css/ionicons.min.css">-->
        <!-- Morris chart -->
        <link rel="stylesheet" href="plugins/morris/morris.css">

        <!-- Date Picker -->
        <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
        <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
        <!--vender-->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">
        <link href="vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">
        <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js1/user.js" type="text/javascript"></script>

        <style>
            .form-group {
                margin-bottom: 8px;
            }
        </style>
    </head>

    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

            <header class="main-header">
                <!-- Logo -->
                <a style="font-size: 15px;" href="home.php" class="logo"> <!-- mini logo for sidebar mini 50x50 pixels --> <span class="logo-mini"><b></b></span> <!-- logo for regular state and mobile devices --> <span class="logo-lg"><b><?php echo $_SESSION['companyname'] ?></b></span><?php echo $_SESSION['companyname'] ?> </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top" role="navigation">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"> <span class="sr-only">Toggle navigation</span> </a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- Messages: style can be found in dropdown.less-->

                            <!-- Notifications: style can be found in dropdown.less -->

                            <!-- Tasks: style can be found in dropdown.less -->

                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown tasks-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <span class="hidden-xs"><marquee><b><?php echo $_SESSION['companyname'] . '-' . $_SESSION['company']; ?></b></marquee></span>
                                </a> 
                            </li>
                            <li class="dropdown user user-menu">

                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                                    <span class="hidden-xs"><?php echo $_SESSION['CURRENT_USER']; ?></span>
                                    <!--<a onclick="logout();" class="btn btn-success btn-file">Sign out</a>-->
                                </a>
                                <ul class="dropdown-menu"> 
                                    <li class="user-header">
                                        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                                        <p>
                                        </p>
                                    </li>  
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <?php
//                                            if ((substr($_SERVER['REMOTE_ADDR'], 1, 9)) == "192.168.5") {
//                                                echo "<a target='_blank' href=\"http:\\\\192.168.5.153:8090\mspace\" class='btn btn-primary btn-file'>Myspace</a>";
//                                            } else {
//                                                echo "<a target='_blank' href=\"http:\\\\124.43.17.130:8090\mspace\" class='btn btn-primary btn-file'>Myspace</a>";
//                                            }
                                            ?>
                                            <!--<a href="../index.php" class="btn btn-success btn-file" >View Web</a>--> 
                                        </div>
                                        <div class="pull-right">
                                            <a onclick="logout();" class="btn btn-success btn-file">Sign out</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <!-- Control Sidebar Toggle Button -->
                            <li>
                                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <!--<img src="" class="img-circle" alt="User Image">-->
                        </div>
                        <div class="pull-left info">
                            <p>
                                <?php
                                echo $_SESSION['UserName'];
                                ?>
                            </p>
                            <br>
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                                    <i class="fa fa-search"></i>
                                </button> </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="header">
                            MAIN MENU
                        </li>
                        <?php
                        if (isset($_GET['url'])) {
                            $murl = $_GET['url'];
                        } else {
                            $murl = "";
                        }

                        $mgroup = "";
                        include './connection_sql.php';
//                        $sql = "select * from view_menu where username ='" . $_SESSION["CURRENT_USER"] . "' and doc_view='1' and grp!='' order by grp,docid";
                        $sql = "select * from view_menu where username ='" . $_SESSION["CURRENT_USER"] . "'  and doc_view='1' order by grp,docid";
                        foreach ($conn->query($sql) as $row1) {
                            if ($mgroup != $row1['grp']) {
                                if ($mgroup != "") {
                                    echo "</ul>";
                                    echo "</li>";
                                }
                                echo "<li class='treeview'>
                                <a href='#'><i class='" . trim($row1['icon_class']) . "'></i> <span>" . $row1['grp'] . "</span> <i class='fa fa-angle-left pull-right'></i> </a>
                                <ul class='treeview-menu'>";
                            }

                            $mgroup = $row1['grp'];
                            if ($murl == $row1['name']) {
                                echo "<li class='active'>";
                            } else {
                                echo "<li>";
                            }
                            echo "<a href='home.php?url=" . trim($row1['name']) . "'><i class='fa fa-circle-o'></i>" . trim($row1['docname']) . "</a></li>";
                        }
                        echo "</ul>";
                        echo "</li>";
                        ?>



                </section>
                <!-- /.sidebar -->
            </aside>
            <!-- Control Sidebar -->
            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Create the tabs -->
                <ul class="nav nav-tabs nav-justified control-sidebar-tabs">

                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <!-- Home tab content -->
                    <div class="tab-pane" id="control-sidebar-home-tab">

                        <!-- /.control-sidebar-menu -->


                        <!-- /.control-sidebar-menu -->

                    </div>
                    <!-- /.tab-pane -->
                    <!-- Stats tab content -->
                    <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
                    <!-- /.tab-pane -->
                    <!-- Settings tab content -->
                    <div class="tab-pane" id="control-sidebar-settings-tab">

                    </div>
                    <!-- /.tab-pane -->
                </div>
            </aside>
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">