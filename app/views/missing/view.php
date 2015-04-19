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
    <style>
        .person-img {
            max-width: 100%;
            max-height: 200px;
        }
        .table.missing-list tbody>tr>td {
            vertical-align: middle;
        }
    </style>
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
                            Missing Persons List<br/>
                        </h1>
                    </div>
                        <?php
                            echo "<div class='table-responsive'>";
                            echo "<table style='text-align:center;' class='table table-striped missing-list'>";
                            echo "<tr class='active h3'>";
                            echo "<th>Photo</th>";
                            echo "<th>Person Name</th>";
                            echo "<th>Gender</th>";
                            echo "<th>Date of Birth</th>";
                            echo "</tr>";
                            foreach ($missing_person_list as $list) {
                                if ($list['gender'] === "M")
                                    $gender = "Male";
                                else if ($list['gender'] === "F")
                                    $gender = "Female";
                                else if ($list['gender'] === "O")
                                    $gender = "Other";
                                echo "<tr class='h4'>";
                                echo "<td>".($list['img'] ? "<img class='person-img' src='" . base_url() . "missing/img/" . $list['id'] . "' />" : '')."</td>";
                                echo "<td>".$list['fname']." ".$list['lname']."</td>";
                                echo "<td>".$gender."</td>";
                                echo "<td>".$list['dob']."</td>";
                                echo "</tr>";
                            }
                            echo "</table>";
                            echo "</div>";
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
</script>

</body>
</html>
