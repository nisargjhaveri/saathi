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
    <link href="<?php echo base_url(); ?>static/css/bootstrap.min.css" rel="stylesheet" media="screen">
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
                            Make a Request
                        </h1>
                        <br />
                    </div>
                    <?php
                        if ($requested !== null) {
                            if ($requested == true) {
                                echo "<div class='alert alert-success'>Requested successfully</div>";
                            }
                            else {
                                echo "<div class='alert alert-danger'>Request Unsuccessful</div>";
                            }
                            echo "<br><br>";
                        }
                    ?>
                    <form action="" method="POST">
                        <fieldset>
                            <div class="panel panel-primary">
                                <div class="panel-heading" style="font-size: large; padding-bottom: 15px">
                                    <b>Want to make a request?</b>
                                    <div class="btn btn-info show" style="float: right">Hide</div>
                                </div>
                                <div class="panel-body">
                                    <label for="organisation"><b>Organisation Name </b></label>
                                    <input class="hidden" id="organisation_id" name="details[organisation_id]" required />
                                    <input class="form-control" placeholder="Enter Organisation Name" id="organisation" name="organisation" required />
                                    <br><br/>
                                    <label for="asset"><b>Asset: </b></label>
                                    <input class="hidden" id="asset_id" name="details[asset_id]" required />
                                    <input class="form-control" placeholder="Enter Asset Name" id="asset" name="asset" required />
                                    <br>
                                    <br />
                                    <label for="priority"><b>Priority: </b></label>
                                    <input class="form-control" placeholder="Enter Priority" id="priority" name="details[priority]" required /><br>
                                </div>
                        </fieldset>
                        <div class="col-sm-8 col-md-4">
                        </div>
                        <div class="col-sm-8 col-md-4" style="padding-top: 12px;">
                            <input class="btn btn-block btn-success" type="submit" name="request" value="Make the Request" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
   $('#organisation').autocomplete(
        '<?php echo base_url(); ?>organisations/list_json',
        'name',
        $('#organisation_id'),
        'id'
    );
    $('#asset').autocomplete(
         '<?php echo base_url(); ?>assets/list_json',
         'name',
         $('#asset_id'),
         'id'
     );
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