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
                            Add Camp<br/>
                        </h1>
                        <br /><br />

                        <?php
                            if ($added !== null) {
                                if ($added == true) {
                                    echo "<div class='alert alert-success'>New Camp Added</div>";
                                }
                                else {
                                    echo "<div class='alert alert-danger'>Camp Addition failed</div>";
                                }
                            echo "<br />";
                            }
                        ?>
                        <form action="" method="POST">
                            <fieldset>
                                <div class="panel panel-primary">
                                    <div class="panel-heading" style="font-size: large; padding-bottom: 15px">
                                        <b>Camp Details</b>
                                        <div class="btn btn-info" id="show1" style="float: right">Hide</div>
                                    </div>
                                    <div class="panel-body" id="panelBody1">
				    <label class="sr-only" for="name">Name of Camp: </label>
				    <input class="form-control" placeholder="Enter Name of the Camp" id="name" name="name" required /><br>
				    <label class="sr-only" for="name2">Name of Organisation: </label>
				    <input class="form-control" placeholder="Enter Name of Organisation" id="name" name="organisation" required /><br>

                                        <label class="sr-only" for="head">Camp Head: </label>
                                        <input class="form-control" placeholder="Enter Name of Camp Head" id="camphead" name="camphead" required /><br>
                                        <label class="sr-only" for="population">Population: </label>
					<input class="form-control" placeholder="Enter Population" id="population" name="population" /><br>
					<label class="sr-only" for="name">Volunteers: </label>
					<input class="form-control" placeholder="Enter Number of Volunteers" id="volunteers" type="number" name="volunteers" required /><br>
<!--					<label class="sr-only" for="status">Status: </label>
					<textarea class="form-control" place
holder="Enter Status" id="status" name="status"></textarea><br>-->
				        <label class="sr-only" for="status">Status: </label>
					<textarea class="form-control" placeholder="Enter Status" id="status" name="status"></textarea><br>

                                        <label class="sr-only" for="email">Email: </label>
                                        <input class="form-control" placeholder="Enter Email" id="email" type="email" name="email" /><br>
                                        <label class="sr-only" for="mailing_list">Mailing list: </label>
                                        <input class="form-control" placeholder="Enter Mailing List" id="mailing_list" type="email" name="mailing_list"/><br>
			                 <label class="sr-only" for="phone">Phone: </label>
					 <input class="form-control" placeholder="Enter Phone number" id="phone" name="phone" type="number" min="1111111111" max="9999999999"/><br>
                                    </div>
                            </fieldset>
                            <div class="col-sm-8 col-md-4">
                            </div>
                            <div class="col-sm-8 col-md-4" style="padding-top: 12px;">
                                <input class="btn btn-success btn-block" type="submit" name="submit" value="Add camp" />
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
