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
    <script src="<?php echo base_url(); ?>static/js/vendor/typeahead.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>static/js/autocomplete.js"></script>
    <link href="<?php echo base_url(); ?>static/css/vendor/typeaheadjs.css" rel="stylesheet" media="screen">

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
    <div id="page-content-wrapper" style="background-color: #ffffff;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header">
                        <h1 style="text-align: center;">
                            Register Camp<br/>
                        </h1>
                        <br /><br />

                        <?php
                        if ($is_success !== null) {
                            if ($is_success == true) {
                                echo "<div class='alert alert-success'>Camp registered</div>";
                            }
                            else {
                                echo "<div class='alert alert-danger'>Camp not registered</div>";
                            }
                            echo "<br />";
                        }
                        ?>

                        <form action='' method='POST'>
                            <fieldset>
                                <div class="panel panel-primary">
                                    <div class="panel-heading" style="font-size: large; padding-bottom: 15px">
                                        <b>Camp Details</b>
                                        <div class="btn btn-info" id="show" style="float: right">Hide</div>
                                    </div>

                                    <div class="panel-body" id="panelBody">
                                        <label for="name">Camp Name </label>
                                        <input class="form-control" placeholder="Enter Camp Name" name='name' required/><br>
                                        <label for="organisation_id">Organisation </label>
                                        <input class="hidden" name='organisation_id' id='organisation_id' required/><br>
                                        <input class="form-control" placeholder="Select Organisation" name='organisation' id='organisation'/><br><br>
                                        <label for="population">Population: </label>
                                        <input class="form-control" placeholder="Enter population" type="text" name="population" required/><br>
                                        <label for="volunteers">Volunteers: </label>
                                        <input class="form-control" type="text" placeholder="Enter volunteers" name="volunteers" required/><br>
                                        <label for="status">Status: </label>
                                        <input class="form-control" type="text" placeholder="Enter status" name="status" required/><br>
                                    </div>
                                </div>
                            </fieldset>
                            <!--  Will fetch from login -->
                            <fieldset>
                                <div class="panel panel-primary">
                                    <div class="panel-heading" style="font-size: large; padding-bottom: 15px">
                                        <b>Camp Head Details</b>
                                        <div class="btn btn-info" id="show1" style="float: right">Hide</div>
                                    </div>
                                    <div class="panel-body" id="panelBody1">
                                        <label for="fname">First name </label>
                                        <input id="fname" type="text" class="form-control" name="fname" placeholder="Enter First Name" required /><br>
                                        <label for="lname">Last name </label>
                                        <input type="text" class="form-control" placeholder="Enter Last Name" id="lname" name="lname" required /><br>
                                        <label for="dob">Date of birth </label>
                                        <input type="date" placeholder="Enter your DOB" class="form-control" id="dob" type="date" name="dob" /><br>
                                        <label class="sr-only" for="gender">Gender: </label>
                                        <div class="dropdown">
                                            <select class="dropdown-header" id="gender" name="gender" required>
                                                <option class="dropdown-toggle" value="" disabled selected>Select gender</option>
                                                <option class="dropdown-header" value="F">Female</option>
                                                <option class="dropdown-header" value="M">Male</option>
                                                <option class="dropdown-header" value="O">Other</option>
                                            </select><br>
                                        </div>
                                        <label for="ch_phone_no">Phone number </label>
                                        <input id="ch_phone_no" class="form-control" placeholder="Enter Phone Number" name="ch_phone_no" required /><br>
                                        <label for="ch_email">Email </label>
                                        <input id="ch_email" placeholder="Enter Email" class="form-control" type="email" name="ch_email" required /><br>
                                        <label for="ch_mailing_list">Mailing list </label>
                                        <input id="ch_mailing_list" class="form-control" placeholder="Enter Mailing List" type="email" name="ch_mailing_list" /><br>
                                        <label for="ch_mailing_address">Mailing address </label>
                                        <input id="ch_mailing_address" class="form-control" placeholder="Enter Mailing Address" type="email" name="ch_mailing_address" /><br>
                                        <label for="ch_gis_url">GIS URL </label>
                                        <input id="ch_gis_url" class="form-control" placeholder="Enter GIS URL - iframe tag" name="ch_gis_url" /><br>    
                                    </div>
                                </div>
                            <fieldset>
                                <div class="panel panel-primary">
                                    <div class="panel-heading" style="font-size: large; padding-bottom: 15px">
                                        <b>Contact Details for Camp</b>
                                        <div class="btn btn-info" id="show4" style="float: right">Hide</div>
                                    </div>
                                    <div class="panel-body" id="panelBody4">
                                        <label for="phone_no">Phone number </label>
                                        <input id="phone_no" class="form-control" placeholder="Enter Phone Number" name="phone_no" required /><br>
                                        <label for="email">Email </label>
                                        <input id="email" placeholder="Enter Email" class="form-control" type="email" name="email" required /><br>
                                        <label for="mailing_list">Mailing list </label>
                                        <input id="mailing_list" class="form-control" placeholder="Enter Mailing List" type="email" name="mailing_list" /><br>
                                        <label for="mailing_address">Mailing address </label>
                                        <input id="mailing_address" class="form-control" placeholder="Enter Mailing Address" type="email" name="mailing_address" /><br>
                                        <label for="gis_url">GIS URL </label>
                                        <input id="gis_url" class="form-control" placeholder="Enter GIS URL - iframe tag" name="gis_url" /><br>
                                    </div>
                                </div>
                            </fieldset>
                            
                            <div class="col-sm-8 col-md-4">
                            </div>
                            <div class="col-sm-8 col-md-4" style="padding-top: 12px;">
                                <input class="btn btn-success btn-block" type="submit" name="submit" value="Add Camp" />
                            </div>
                        </form>
                        <br>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Toggle Script -->
<script>
    $('#organisation').autocomplete(
        '<?php echo base_url(); ?>organisations/list_json',
        'name',
        $('#organisation_id'),
        'id'
    );

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