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
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places"></script>
    <script src="<?php echo base_url(); ?>static/js/locate.js"></script>

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
                <a href="<?php echo base_url(); ?>requests/">
                    Requests
                </a>
            </li>

        </ul>
    </div>
    <div class="page-content-wrapper" style="background-color: #ffffff;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header">
                        <h1 style="text-align: center;">
                            Search Results<br/>
                        </h1>
                        <br />
                    </div>

                    <?php
                    if ( $results === false ) {
                        echo "<div class='alert alert-danger'>Some error occured.</div>";
                    }
                    else if ( count($results) == 0 ) {
                        echo "<div class='alert alert-warning'>No matches found. Please try again with refined parameters.</div>";
                    }
                    else {
                        foreach ($results as $person) {
                            echo "<div class='panel panel-primary'>
                                    <div class='panel-heading' style='font-size: large; padding-bottom: 15px'>
                                        <b>Name: " . $person['fname'] . " " . $person['lname'] . "</b>
                                        <div class='btn btn-info show' style='float: right;'>Show More</div>
                                    </div>";
                            echo "<div class='panel-body' style='display: none'>";
                            echo "<ul class='list-group'>";
                            echo "<li class='list-group-item'><b> First Name: </b> " . $person['fname'] . "</li>";
                            echo "<li class='list-group-item'><b> Last Name: </b>" . $person['lname'] . "</li>";
                            echo "<li class='list-group-item'><b> Gender: </b>" . $person['gender'] . '</li>';
                            echo "<li class='list-group-item'><b> Date of Birth: </b>" . $person['dob'] . '</li>';
                            echo "<li class='list-group-item'><b> Phone Number: </b>" . $person['phone_no'] . '</li>';
                            echo "<li class='list-group-item'><b> Email: </b>" . $person['email'] . '</li>';
                            echo "<li class='list-group-item'><b> Mailing List: </b>" . $person['mailing_list'] . '</li>';
                            echo "<li class='list-group-item'><b> Body Marks: </b>" . $person['body_marks'] . '</li>';
                            echo "<li class='list-group-item'><b> Height: </b>" . $person['height'] . '</li>';
                            echo "<li class='list-group-item'><b> Weight: </b>" . $person['weight'] . '</li>';
                            echo "<li class='list-group-item'><b> Hair Color/Style: </b>" . $person['hair'] . '</li>';
                            echo "<li class='list-group-item'><b> Eye-Color: </b>" . $person['eye_color'] . '</li>';
                            echo "<li class='list-group-item'><b> Last Seen Location: </b>" . $person['last_seen'] . '</li>';
                            echo "<li class='list-group-item'><b> Status: </b>" . $person['status'] . '</li>';
                            echo "</ul></div></div>";

                            if ($person['longitude'] != 0 || $person['latitude'] != 0) {
                                ?>
                                <div class="panel panel-info">
                                    <div class="panel-heading" style="font-size: large; padding-bottom: 15px">
                                        <b>Last Seen Location(Nearest Landmark)</b>

                                        <div class="btn btn-primary show" style="float: right">Hide</div>
                                    </div>
                                    <div class="panel-body">
                                        <center>
                                            <div class="map_canvas" style="width: 600px; height: 300px">
                                                <div class="infotext">
                                                    <div class="my-address"
                                                         style="visibility:hidden;"><?php echo $person['mailing_address']; ?></div>
                                                    <div class="latitude"
                                                         style="display: none"><?php echo $person['latitude']; ?></div>
                                                    <div class="longitude"
                                                         style="display: none"><?php echo $person['longitude']; ?></div>
                                                </div>
                                            </div>
                                        </center>
                                    </div>
                                </div>
                            <?php
                            }
                        }
                    }
                    ?>
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

    $(".show").click(function(e) {
        e.preventDefault();
        $(this).closest('.panel').find('.panel-body').toggle("display");
        $(this).text(($(this).text() == 'Hide') ? 'Show More' : 'Hide');
    });
</script>
</body>
</html>
