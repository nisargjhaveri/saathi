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
<?php
$this->load_fragment('navbar');
?>
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
                <a href="<?php echo base_url(); ?>camp/">
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
                           Camps List<br/>
                        </h1>
                        <br /><br />
                    </div>
                        <?php
                            session_start();
                            if ((isset($_SESSION['camp_delete'])) && ($_SESSION['camp_delete'] === true)) {
                                echo "<div class='alert alert-success'>Camp Successfully Deleted</div>";
                                echo "<br />";
                                unset($_SESSION['camp_delete']);
                            }

                            foreach ($camp_list as $list) {
                                echo "<div class='panel panel-primary'>
                                      <div class='panel-heading' style='font-size: large; padding-bottom: 15px'>
                                        <b>Camp Name: " . $list['name'] . "</b>
                                        <div class='btn btn-info show' style='float: right;'>Show More</div>
                                        <button class='btn btn-danger' style='float: right; margin-right: 4px' data-toggle='modal' data-target='#myModal' onclick='send_request(\"".$list['name']."\", ".$list['c_id'].")'> Delete </button>

                                      </div>
                                      ";
                                echo "<div class='panel-body' id='panelBody1' style='display: none;'>";
                                echo "<ul class='list-group'>";
                                echo "<li class='list-group-item'><b> Organisation Name: </b>" . $list['organisation_name'] . " </li><li class='list-group-item'><b>Camp_Head:  </b>".$list['fname']." ".$list['lname']."</li><li class='list-group-item'><b>Contact Number: </b>".$list['phone_no']."</li><li class='list-group-item'><b>Email:  </b>".$list['email']."</li>"."</li><li class='list-group-item'><b>Mailing List:  </b>".$list['mailing_list']."</li>"."</li>";
                                echo "<li class='list-group-item'><b>Population: </b>" . $list['population']."</li><li class='list-group-item'><b>Volunteers: </b>".$list['volunteers']."</li><li class='list-group-item'><b>Status: </b>".$list['status']."</li>";
                                echo "<hr></div></div>";
                                if ($list['longitude'] != 0 || $list['latitude'] != 0) {
                                    ?>
                                    <div class="panel panel-info">
                                        <div class="panel-heading" style="font-size: large; padding-bottom: 15px">
                                            <b>Camp Location</b>

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
                    <h4 class="modal-title" id="myModalLabel">Camp Name</h4>
                </div>
                <div class="modal-body">
                    Are you Sure you Want to Delete this Camp?
                </div>
                <div class="modal-footer" id="modal_footer">
                    Confirmation Buttons
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

    $(".show").click(function(e) {
        e.preventDefault();
        $(this).closest('.panel').find('.panel-body').toggle("display");
        $(this).text(($(this).text() == 'Hide') ? 'Show More' : 'Hide');
    });

    function send_request(camp_name, camp_id) {
        $('#modal_footer').html("");
        $('#myModalLabel').html("");
        $('#myModalLabel').html(camp_name);
        $('#modal_footer').html("<button type='button' class='btn btn-default' data-dismiss='modal'>Close</button><a href='<?php echo base_url()?>camp/delete/" + camp_id + "' class='btn btn-danger' style='float: right;'> Delete </a>");
    }
  
</script>

</body>
</html>