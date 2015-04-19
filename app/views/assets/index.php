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
                            Assets<br/>
                            <small>If you are in need of something, you are at the right place</small>
                        </h1>
                        <br /><br />
                        <div class="panel panel-primary">
                            <div class="panel-heading" style="font-size: large; padding-bottom: 15px">
                                <b>Want to Add or view the assets?</b>
                                <div class="btn btn-info" id="show" style="float: right">Hide</div>
                            </div>

                            <div class="panel-body" id="panelBody">
                                <div class="btn btn-primary">
                                    <a style="color: #ffffff" href="<?php echo base_url(); ?>assets/insert">Add an asset</a>
                                </div><br /><br />
                                <div class="btn btn-primary">
                                    <a style="color: #ffffff" href="<?php echo base_url(); ?>assets/view">View Available Assets</a>
                                </div>
                            </div>
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

    $("#show").click(function(e) {
        e.preventDefault();
        $("#panelBody").toggle("display");
        $(this).text(($(this).text() == 'Hide') ? 'Show More' : 'Hide');
    });
</script>

</body>
</html>