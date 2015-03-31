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

            <a class="navbar-brand" href="<?php echo base_url(); ?>">Saathi</a>
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
                <a href="#">
                    Assets
                </a>
            </li>

            <li>
                <a href="#">
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
                            Create Organisation<br/>
                        </h1>
                        <br /><br />

                        <?php
                            if ($created !== null) {
                                if ($created == true) {
                                    echo "<div class='alert alert-success'>New Organisation Created</div>";
                                }
                                else {
                                    echo "<div class='alert alert-danger'>Organisation Creation failed</div>";
                                }
                            echo "<br />";
                            }
                        ?>
                        <form action="" method="POST">
                            <fieldset>
                                <div class="panel panel-primary">
                                    <div class="panel-heading" style="font-size: large; padding-bottom: 15px">
                                        <b>Organisation Details</b>
                                        <div class="btn btn-info" id="show1" style="float: right">Hide</div>
                                    </div>
                                    <div class="panel-body" id="panelBody1">
                                        <label class="sr-only" for="name">Name of Organisation: </label>
                                        <input class="form-control" placeholder="Enter Name of Organisation" id="name" name="org[name]" required /><br>
                                        <label class="sr-only" for="home">Home Country: </label>
                                        <input class="form-control" placeholder="Enter Home Country" id="home" name="org[home]" required /><br>
                                        <label class="sr-only" for="phone_no">Phone number: </label>
                                        <input class="form-control" placeholder="Enter Phone Number" id="phone_no" name="contact[phone_no]" /><br>
                                        <label class="sr-only" for="email">Email: </label>
                                        <input class="form-control" placeholder="Enter Email" id="email" type="email" name="contact[email]" /><br>
                                        <label class="sr-only" for="mailing_list">Mailing list: </label>
                                        <input class="form-control" placeholder="Enter Mailing List" id="mailing_list" type="email" name="contact[mailing_list]" /><br>
                                        <label class="sr-only" for="desc">Description: </label><br>
                                        <textarea class="form-control" placeholder="Enter Description" id="desc" name="org[desc]"></textarea><br>
                                        <label class="sr-only" for="founded">Founded: </label>
                                        <input class="form-control" placeholder="Enter Year Founded" id="founded" name="org[founded]" required /><br>
                                    </div>
                            </fieldset>
                            <div class="col-sm-8 col-md-4">
                            </div>
                            <div class="col-sm-8 col-md-4" style="padding-top: 12px;">
                                <input class="btn btn-success btn-block" type="submit" name="submit" value="Create Organisation" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Toggle Script -->
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });

    $("#show1").click(function(e) {
        e.preventDefault();
        $("#panelBody1").toggle("display");
        $(this).text(($(this).text() == 'Hide') ? 'Show More' : 'Hide');
    });
</script>

</body>
</html>
