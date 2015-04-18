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
                            Add an Asset<br/>
                        </h1>
                        <br /><br />
                    </div>
                        <?php
                        if ($is_success !== null) {
                            if ($is_success == true) {
                                echo "<div class='alert alert-success'>Asset Added</div>";
                            }
                            else {
                                echo "<div class='alert alert-danger'>Asset not added</div>";
                            }
                            echo "<br />";
                        }
                        ?>

                        <form action='' method='POST'>
                            <fieldset>
                                <div class="panel panel-primary">
                                    <div class="panel-heading" style="font-size: large; padding-bottom: 15px">
                                        <b>Asset Details</b>
                                        <div class="btn btn-info" id="show" style="float: right">Hide</div>
                                    </div>

                                    <div class="panel-body" id="panelBody">
                                        <label for="name">Asset Name<sup style="color: #FF0000; font-size: medium">*<sup> </label>
                                        <input id="name" class="form-control" placeholder="Enter Asset Name" name='name' required/><br>
                                        <label for="desc">Description<sup style="color: #FF0000; font-size: medium">*<sup> </label>
                                        <input id="desc" class="form-control" placeholder="Enter Description" name='description' /><br>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="col-sm-8 col-md-4">
                            </div>
                            <div class="col-sm-8 col-md-4" style="padding-top: 12px;">
                                <input class="btn btn-success btn-block" type="submit" name="submit" value="Add Asset" />
                            </div>
                        </form>
                        <br>
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

    $("#show").click(function(e) {
        e.preventDefault();
        $("#panelBody").toggle("display");
        $(this).text(($(this).text() == 'Hide') ? 'Show More' : 'Hide');
    });
</script>


</body>
</html>
