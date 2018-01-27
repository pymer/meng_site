<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>客友垂钓</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?php echo WEB_ADMIN_TPL; ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo WEB_ADMIN_TPL; ?>bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo WEB_ADMIN_TPL; ?>bower_components/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo WEB_ADMIN_TPL; ?>dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?php echo WEB_ADMIN_TPL; ?>dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="<?php echo WEB_ADMIN_TPL; ?>bower_components/morris.js/morris.css">
    <link rel="stylesheet" href="<?php echo WEB_ADMIN_TPL; ?>bower_components/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="<?php echo WEB_ADMIN_TPL; ?>bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="<?php echo WEB_ADMIN_TPL; ?>bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="<?php echo WEB_ADMIN_TPL; ?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <a href="index2.html" class="logo">
            <span class="logo-mini"><b>客友</b></span>
            <span class="logo-lg"><b>客友</b>垂钓</span>
        </a>
        <nav class="navbar navbar-static-top">
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <span class="label label-warning">1</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">一条测试通知！</li>
                            <li>
                                <ul class="menu">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-users text-aqua"></i> This a test Notice!
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer"><a href="#">View all</a></li>
                        </ul>
                    </li>
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="<?php echo WEB_ADMIN_TPL; ?>dist/img/user2-160x160.jpg" class="user-image"
                                 alt="User Image">
                            <span class="hidden-xs">admin</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="user-header">
                                <img src="<?php echo WEB_ADMIN_TPL; ?>dist/img/user2-160x160.jpg" class="img-circle"
                                     alt="User Image">

                                <p>
                                    超级管理员
                                    <small>last login Time: 2018-1-21</small>
                                </p>
                            </li>
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">设置</a>
                                </div>
                                <div class="pull-right">
                                    <a href="#" class="btn btn-default btn-flat">退出</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <aside class="main-sidebar">
        <section class="sidebar">
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="<?php echo WEB_ADMIN_TPL; ?>dist/img/user2-160x160.jpg" class="img-circle"
                         alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>admin</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> 127.0.0.1</a>
                </div>
            </div>
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">管理目录</li>
                <li class="treeview active">
                    <a href="#">
                        <i class="fa fa-dashboard"></i> <span>产品管理</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="active"><a href=""><i class="fa fa-circle-o"></i>产品列表</a></li>
                    </ul>
                </li>

            </ul>
        </section>
    </aside>


