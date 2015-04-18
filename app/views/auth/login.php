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
                            Saathi <br/>
                            <small> Sign-In </small>
                        </h1>
                    </div>
                    <?php
                    if (!empty($error)) {
                        echo "<div class='alert alert-danger'>" . $error . "</div>";
                    }
                    ?>
                    <form action="" method="post" class="form-horizontal">
                        <div class="form-group">
                            <label for="username" class="col-sm-3 control-label">
                                Username
                            </label>
                            <div class="col-sm-6">
                                <input class="form-control" id="username" name="username" placeholder="Username" required /><br>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-sm-3 control-label">
                                Password
                            </label>
                            <div class="col-sm-6">
                                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required /><br>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-4 col-sm-4">
                                <input class="btn-success btn btn-block" type="submit" name="login" value="Log in" />
                            </div>
                        </div>
                    </form>

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

<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>

</body>
</html>