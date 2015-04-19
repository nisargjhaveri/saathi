<!DOCTYPE html>
<html>
<?php
session_start();
?>
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
                            Request List<br/>
                        </h1>
                    </div>
                        <?php
                            if ((isset($_SESSION['request_delete'])) && ($_SESSION['request_delete'] === true)) {
                                echo "<div class='alert alert-success'>Request Successfully Deleted</div>";
                                echo "<br />";
                                unset($_SESSION['request_delete']);
                            }
                            foreach ($request_list as $list) {
                                if($list['supplier_id']==NULL)
                                {
                                    echo "<div class='panel panel-primary'>
                                          <div class='panel-heading' style='font-size: large; padding-bottom: 15px'>
                                            <b>Organisation Name: " . $list['org'] . "</b>
                                            <button class='btn btn-danger' style='float: right;' data-toggle='modal' data-target='#myModal' onclick='send_request(\"".$list['org']."\", ". "\"".$list['asset']."\", ".$list['id'].")'> Delete </button>
                                            <div style='float: right;'>&nbsp;</div>
                                            <div class='btn btn-info show' style='float: right;'>Show More</div>
					    <div class='btn btn-success ' style='float: right; margin-right:4px' data-toggle='modal' data-target='#supply_Modal' onclick='send_supply_request(".$list['id'].")'>Supply</div></div>";
                                    echo "<div class='panel-body' style='display: none;'>";
                                    echo "<ul class='list-group'>";
                                    echo "<li class='list-group-item'><b> Organisation Name: </b>" . $list['org'] . " </li><li class='list-group-item'><b>Asset Name:  </b>".$list['asset']."</li><li class='list-group-item'><b>Priority: </b>".$list['priority']."</li><li class='list-group-item'><b>Request Date:  </b>".$list['request_date']."</li>";
                                    echo "</div></div>";
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
                    <h4 class="modal-title" id="myModalLabel">Request Name</h4>
                </div>
                <div class="modal-body">
                    Are you Sure you Want to Delete this Request?
                </div>
                <div class="modal-footer" id="modal_footer">
                    Confirmation Buttons
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="supply_Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Request Name</h4>
                </div>
                <div class="modal-body">
                    <form action="<?php echo base_url(); ?>requests/supply" method="POST">
                        <input name="supply_details[request_id]" class="hide" id="supply_request" />
                        <fieldset>
                            <div class="panel-body">
                            <label for="organisation"><b>Organisation Name </b></label>
                                    <input class="hidden" id="supplier_id" name="supply_details[supplier_id]" required />
                                    <input class="form-control" placeholder="Enter Organisation Name" id="supplier" name="organisation" required />
                            </div>
                        </fieldset>
                        <div class="col-sm-8 col-md-4">
                        </div>
                        <div class="col-sm-8 col-md-4" style="padding-top: 25px">
                            <input class="btn btn-block btn-success" type="submit" name="supply" value="Supply the Request" />
                        </div>
                    </form>
                </div>
                <div class="modal-footer"></div>
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
    $('#supplier').autocomplete(
        '<?php echo base_url(); ?>organisations/list_json',
        'name',
        $('#supplier_id'),
        'id'
    );

    function send_supply_request(request_id){
        $('#supply_request').val(request_id);
    }
    function send_request(org_name, asset_name, request_id) {
        $('#modal_footer').html("");
        $('#myModalLabel').html("");
        $('#myModalLabel').html(asset_name + " for " + org_name);
        $('#modal_footer').html("<button type='button' class='btn btn-default' data-dismiss='modal'>Close</button><a href='<?php echo base_url()?>requests/delete/" + request_id + "' class='btn btn-danger' style='float: right;'> Delete </a>");
    }
</script>

</body>
</html>
