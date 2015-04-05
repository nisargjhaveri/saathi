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
    <div id="page-content-wrapper" style="background-color: #ffffff;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header">
                        <h1 style="text-align: center;">
                            Organisation List<br/>
                        </h1>
                    </div>
                        <?php
                            session_start();
                            if ((isset($_SESSION['org_delete'])) && ($_SESSION['org_delete'] === true)) {
                                echo "<div class='alert alert-success'>Organisation Successfully Deleted</div>";
                                echo "<br />";
                                unset($_SESSION['org_delete']);
                            }
                            foreach ($org_list as $list) {
                                echo "<div class='panel panel-primary'>
                                      <div class='panel-heading' style='font-size: large; padding-bottom: 15px'>
                                        <b>Organisation Name: " . $list['name'] . "</b>
                                        <button class='btn btn-danger' style='float: right;' data-toggle='modal' data-target='#myModal' onclick='send_request(\"" . $list['name'] . "\", " . $list['id'] . ")'> Delete </button>
                                        <div style='float: right;'>&nbsp;</div>
                                        <div class='btn btn-info show' style='float: right;'> Show More </div>

                                      </div>";
                                echo "<div class='panel-body' id='panelBody1' style='display: none;'>";
                                echo "<ul class='list-group'>";
                                echo "<li class='list-group-item'><b> Organisation Name: </b>" . $list['name'] . " </li><li class='list-group-item'><b>Home Country:  </b>" . $list['home_country'] . "</li><li class='list-group-item'><b>Contact Number: </b>" . $list['phone_no'] . "</li><li class='list-group-item'><b>Email:  </b>" . $list['email'] . "</li>";
                                echo "<li class='list-group-item'><b>Mailing List: </b>" . $list['mailing_list'] . "</li><li class='list-group-item'><b>Description: </b>" . $list['description'] . "</li><li class='list-group-item'><b>Year Founded: </b>" . $list['founded'] . "</li>";
                                echo "</div></div>";

                                if ($list['longitude'] != 0 || $list['latitude'] != 0) {
                            ?>
                                    <div class="panel panel-info">
                                        <div class="panel-heading" style="font-size: large; padding-bottom: 15px">
                                            <b>Location</b>

                                            <div class="btn btn-primary show" style="float: right">Hide</div>
                                        </div>
                                        <div class="panel-body">
                                            <center>
                                                <div class="map_canvas" style="width: 600px; height: 300px">
                                                    <div class="infotext">
                                                        <div class="my-address"
                                                             style="visibility:hidden;"><?php echo $list['mailing_address']; ?></div>
                                                        <div class="latitude"
                                                             style="display: none"><?php echo $list['latitude']; ?></div>
                                                        <div class="longitude"
                                                             style="display: none"><?php echo $list['longitude']; ?></div>
                                                    </div>
                                                </div>
                                            </center>
                                        </div>
                                    </div>
                                <?php
                                }
                            }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Confirmation Model -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Organisation Name</h4>
                </div>
                <div class="modal-body">
                    Are you Sure you Want to Delete this Organisation?
                </div>
                <div class="modal-footer" id="modal_footer">
                    Confirmation Buttons
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

    function send_request(org_name, org_id) {
        $('#modal_footer').html("");
        $('#myModalLabel').html("");
        $('#myModalLabel').html(org_name);
        $('#modal_footer').html("<button type='button' class='btn btn-default' data-dismiss='modal'>Close</button><a href='<?php echo base_url()?>organisations/delete/" + org_id + "' class='btn btn-danger' style='float: right;'> Delete </a>");
    }
</script>

</body>
</html>
