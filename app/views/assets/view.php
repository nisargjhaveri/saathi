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
                            Assets Available<br/>
                        </h1>
                        <br /><br />
                    </div>
                    <?php
                        session_start();
                        if ((isset($_SESSION['asset_delete'])) && ($_SESSION['asset_delete'] === true)) {
                            echo "<div class='alert alert-success'>Asset Successfully Deleted</div>";
                            echo "<br />";
                            unset($_SESSION['asset_delete']);
                        }

                        foreach ($assets_list as $assets) {
                    ?>
                    <div class='panel panel-primary'>
                        <div class='panel-heading' style='font-size: large; padding-bottom: 15px'>
                            <b>Asset Name: <?php echo $assets['name']; ?> </b>

                            <?php
                                echo "<button class='btn btn-danger' style='float: right;' data-toggle='modal' data-target='#myModal' onclick='send_request(\"".$assets['name']."\", ".$assets['id'].")'> Delete </button>";
                            ?>

                            <a href="update?id=<?php echo $assets['id'] ?>">

                                <div class='btn btn-success update' style='float: right;margin-right: 8px;'>Update</div>
                            </a>

                            <div class='btn btn-info show' style='float: right;margin-right: 8px;'>Show More</div>

                        </div>
                        <div class='panel-body' id='panelBody1' style='display: none;'>
                            <b>Description: </b> <?php echo $assets['description']; ?>
                        </div>
                    </div>
                    <?php
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
                    <h4 class="modal-title" id="myModalLabel">Asset Name</h4>
                </div>
                <div class="modal-body">
                    Are you Sure you Want to Delete this Asset?
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

    function send_request(asset_name, asset_id) {
        $('#modal_footer').html("");
        $('#myModalLabel').html("");
        $('#myModalLabel').html(asset_name);
        $('#modal_footer').html("<button type='button' class='btn btn-default' data-dismiss='modal'>Close</button><a href='<?php echo base_url()?>assets/delete/" + asset_id + "' class='btn btn-danger' style='float: right;'> Delete </a>");
    }
</script>

</body>
</html>