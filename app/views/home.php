<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?php echo base_url(); ?>static/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="<?php echo base_url(); ?>static/css/sidebar.css" rel="stylesheet" media="screen">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>static/js/bootstrap.js"></script>

</head>
<nav class="navbar navbar-inverse navbar-fixed-top" id="navbar" role="navigation" style="visibility: visible">
    <div class="container-fluid">

        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="#">Saathi</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <!--li><a href="#">Link</a></li-->
                <li>
                    <a href="#">
                        <i class="glyphicon glyphicon-edit"></i>
                        Sign Up
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="glyphicon glyphicon-log-in"></i>
                        Sign In
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="glyphicon glyphicon-info-sign"></i>
                        Help
                    </a>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-left">
                <li>
                    <a href="#menu-toggle" id="menu-toggle">
                        Modules
                    </a>
                </li>
            </ul>

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<body style="padding: 50px">
<div id="wrapper" class="toggled">
    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">

            <li>
                <a href="<?php echo base_url(); ?>missing/">
                    Missing People
                </a>
            </li>

            <li>
                <a href="<?php echo base_url(); ?>organisations/">
                    Organisations
                </a>
            </li>

            <li>
                <a href="#">
                    Camps
                </a>
            </li>

            <li>
                <a href="<?php echo base_url(); ?>assets/">
                    Assets
                </a>
            </li>

            <li>
                <a href="<?php echo base_url(); ?>requests/">
                    Requests
                </a>
            </li>

        </ul>
    </div>

    <div id="page-content-wrapper" style="background-color: #ffffff;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header">
                        <h1 style="text-align: center;">
                            Saathi <br/>
                            <small> A Simple Disaster Management System</small>
                        </h1>
                    </div>
                    <br />
                    <div class="panel panel-success" id="saathiWhat">
                        <div class="panel-heading" style="font-size: large; padding-bottom: 15px">
                            <b>What is Saathi?</b>
                            <button class="btn btn-success" id="hideWhat" style="float: right;">Hide</button>
                        </div>

                        <div class="panel-body" id="panelBody1" style="visibility: visible">
                            It is a software/tool for the registry of missing persons, relief organizations,
                            civil society groups, relief camps and take requests on disaster management.
                        </div>
                    </div>

                    <div class="panel panel-success" id="saathiWhy">
                        <div class="panel-heading" style="font-size: large; padding-bottom: 15px">
                            <b>Why Saathi?</b>
                            <button class="btn btn-success" id="hideWhy" style="float: right;">Hide</button>
                        </div>

                        <div class="panel-body" id="panelBody2" style="visibility: visible">
                            The  most  difficult  period  of  a  disaster  is  the  immediate  aftermath.
                            This  period  calls  for  prompt action, within an exceptionally short period of time.
                            In the aftermath of any disaster, a significant number of  individuals will  be
                            injured and/or displaced. Many of them  might still  be  living with
                            the trauma they have encountered, including loss of loved ones. Affected individuals might also
                            be  without  food or other  essential  items.  They  might  be  waiting  in  temporary  shelters,
                            with  no idea  of  what  to  do  next.  Some  might  need  immediate  medical  attention,  while  the  disaster
                            aftermath  environment  also  creates  ideal  breeding  grounds  for  possible  epidemics.
                            This is the reason why we need organisations like <b>Saathi</b>.
                        </div>
                    </div>

                    <div class="btn-group btn-group-justified" role="group" style="padding: 20px; border: 10px">
                        <div class="btn-group" role="group">
                            <a href="<?php echo base_url(); ?>missing/">
                                <button type="button" class="btn btn-primary">Missing People</button>
                            </a>
                        </div>
                        <div class="btn-group" role="group">
                            <a href="<?php echo base_url(); ?>organisations/">
                                <button type="button" class="btn btn-primary">Organisations</button>
                            </a>
                        </div>
                        <div class="btn-group" role="group">
                            <a href="#">
                                <button type="button" class="btn btn-primary">Camps</button>
                            </a>
                        </div>
                        <div class="btn-group" role="group">
                            <a href="<?php echo base_url(); ?>assets/">
                                <button type="button" class="btn btn-primary">Assets</button>
                            </a>
                        </div>
                        <div class="btn-group" role="group">
                            <a href="#">
                                <button type="button" class="btn btn-primary">Requests</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="text-muted" style="text-align: center">
            Developed By Team Saathi <br/>
            Powered By <a href="https://github.com/nisargjhaveri/saathi">Saathi</a>
        </p>
    </div>
</footer>

<!-- Toggle Script -->
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });

    $("#hideWhat").click(function(e) {
        e.preventDefault();
        $("#hideWhat").toggleClass("btn-danger");
        $("#panelBody1").toggle("visibility");
        $(this).text(($(this).text() == 'Hide') ? 'Show' : 'Hide');
        $("#saathiWhat").toggleClass("panel-danger");
    });

    $("#hideWhy").click(function(e) {
        e.preventDefault();
        $("#hideWhy").toggleClass("btn-danger");
        $("#panelBody2").toggle("visibility");
        $(this).text(($(this).text() == 'Hide') ? 'Show' : 'Hide');
        $("#saathiWhy").toggleClass("panel-danger");
    });

</script>
</body>
</html>
