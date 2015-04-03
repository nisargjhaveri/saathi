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
<body style="padding: 50px;">
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
                <a href="#">
                    Requests
                </a>
            </li>

        </ul>
    </div>

    <div id="page-content-wrapper" style="background-color: #ffffff; padding-left: 20%; padding-right: -10%">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-9">
                    <div class="page-header">
                        <h1 style="text-align: center;">
                            Report a Missing Person<br/>
                        </h1>
                        <br />
                        <?php
                        if ($reported !== null) {
                            if ($reported == true) {
                                echo "<div class='alert alert-success'> Reported Successfully </div>";
                            }
                            else {
                                echo "<div class='alert alert-danger'> Submission failed </div>";
                            }
                            echo "<br><br>";
                        }
                        ?>

                        <form action="" method="POST">
                            <fieldset>
                                <div class="panel panel-primary">
                                    <div class="panel-heading" style="font-size: large; padding-bottom: 15px">
                                        <b>Common details about the person</b>
                                        <div class="btn btn-info" id="show1" style="float: right">Hide</div>
                                    </div>
                                    <div class="panel-body" id="panelBody1">
                                        <label for="fname">First name </label>
                                        <input id="fname" type="text" class="form-control" name="person[fname]" placeholder="Enter First Name" required /><br>
                                        <label for="lname">Last name </label>
                                        <input type="text" class="form-control" placeholder="Enter Last Name" id="lname" name="person[lname]" required /><br>
                                        <label for="dob">Date of birth </label>
                                        <input type="date" placeholder="Enter your DOB (mm/dd/yyyy)" class="form-control" id="dob" type="date" name="person[dob]" pattern="\d{1,2}/\d{1,2}/\d{4}" /><br>
                                        <label class="sr-only" for="gender">Gender: </label>
                                        <div class="dropdown">
                                            <select class="dropdown-header" id="gender" name="person[gender]" required>
                                                <option class="dropdown-toggle" value="" disabled selected>Select gender</option>
                                                <option class="dropdown-header" value="F">Female</option>
                                                <option class="dropdown-header" value="M">Male</option>
                                                <option class="dropdown-header" value="O">Other</option>
                                            </select><br>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <div class="panel panel-primary">
                                    <div class="panel-heading" style="font-size: large; padding-bottom: 15px">
                                        <b>Contact details of missing person</b>
                                        <div class="btn btn-info" id="show2" style="float: right">Hide</div>
                                    </div>
                                    <div class="panel-body" id="panelBody2">
                                        <label for="phone_no">Phone number </label>
                                        <input placeholder="Enter Phone Number" class="form-control" id="phone_no" pattern="\d{10}" name="person_contact[phone_no]" /><br>
                                        <label for="email">Email: </label>
                                        <input class="form-control" type="email" placeholder="Enter your Email" id="email" type="email" name="person_contact[email]" /><br>
                                        <label for="mailing_list">Mailing list </label>
                                        <input class="form-control" placeholder="Enter mailing-list" id="mailing_list" type="email" name="person_contact[mailing_list]" /><br>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <div class="panel panel-primary">
                                    <div class="panel-heading" style="font-size: large; padding-bottom: 15px">
                                        <b>Additional information about missing person</b>
                                        <div class="btn btn-info" id="show3" style="float: right">Hide</div>
                                    </div>
                                    <div class="panel-body" id="panelBody3">
                                        <label for="body_marks">Body marks </label><br>
                                        <textarea id="body_marks" class="form-control" placeholder="Enter Body Marks" name="person_detail[body_marks]"></textarea><br>
                                        <label for="height">Height </label>
                                        <input id="height" placeholder="Enter Height (in cms)" class="form-control" name="person_detail[height]" type="number" step="0.01" /><br>
                                        <label for="weight">Weight </label>
                                        <input class="form-control" placeholder="Enter Weight" id="weight" name="person_detail[weight]" type="number" step="0.01" /><br>
                                        <label for="hair">Hair Style/Color </label>
                                        <input id="hair" placeholder="Enter Hair Style/Color" class="form-control" name="person_detail[hair]" /><br>
                                        <label for="eye_color">Eye color </label>
                                        <input id="eye_color" class="form-control" placeholder="Enter Eye color" name="person_detail[eye_color]" /><br>
                                        <label for="last_seen">Last seen (When, where, condition) </label><br>
                                        <textarea id="last_seen" placeholder="Enter Last Seen Location" class="form-control" name="person_detail[last_seen]"></textarea><br>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <div class="panel panel-primary">
                                    <div class="panel-heading" style="font-size: large; padding-bottom: 15px">
                                        <b>Whom to contact?</b>
                                        <div class="btn btn-info" id="show4" style="float: right">Hide</div>
                                    </div>
                                    <div class="panel-body" id="panelBody4">
                                        <label for="w_phone_no">Phone number </label>
                                        <input id="w_phone_no" class="form-control" placeholder="Enter Phone Number" name="contact_whom[phone_no]" pattern="\d{10}" required /><br>
                                        <label for="w_email">Email </label>
                                        <input id="w_email" placeholder="Enter Email" class="form-control" type="email" name="contact_whom[email]" required /><br>
                                        <label for="w_mailing_list">Mailing list </label>
                                        <input id="w_mailing_list" class="form-control" placeholder="Enter Mailing List" type="email" name="contact_whom[mailing_list]" /><br>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="col-xs-8 col-sm-4">
                            </div>
                            <div class="col-xs-8 col-sm-4" style="padding-top: 12px">
                                <input class="btn btn-lg btn-success btn-block" type="submit" name="report" value="Report missing" />
                            </div>
                        </form>
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

    $("#show1").click(function(e) {
        e.preventDefault();
        $("#panelBody1").toggle("display");
        $(this).text(($(this).text() == 'Hide') ? 'Show More' : 'Hide');
    });

    $("#show2").click(function(e) {
        e.preventDefault();
        $("#panelBody2").toggle("display");
        $(this).text(($(this).text() == 'Hide') ? 'Show More' : 'Hide');
    });

    $("#show3").click(function(e) {
        e.preventDefault();
        $("#panelBody3").toggle("display");
        $(this).text(($(this).text() == 'Hide') ? 'Show More' : 'Hide');
    });

    $("#show4").click(function(e) {
        e.preventDefault();
        $("#panelBody4").toggle("display");
        $(this).text(($(this).text() == 'Hide') ? 'Show More' : 'Hide');
    });

</script>

</body>
</html>
