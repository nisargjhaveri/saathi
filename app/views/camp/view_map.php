<!DOCTYPE html>

<?php
$camps = array();
foreach ($camp_list as $list) {
    array_push($camps, $list['latitude'].":".$list['longitude'].":".$list['mailing_address'].":".$list['name']);
}
?>

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

    <script type="text/javascript">
        function initialize() {
            var camps = <?php echo json_encode($camps);?>;

            camps_length = camps.length;

            var i;
            var map;
            var myLatlng;
            var myOptions;
            var marker;

            var lat = document.getElementById("lat").value;
            var long = document.getElementById("long").value;
            var radius = document.getElementById("radius").value;
            if (radius) {
                var lat_extreme = radius*0.008983;
                var long_extreme = radius*0.015060;
            }
            else {
                var lat_extreme = 0.8;
                var long_extreme = 1.2;
            }

            myLatlng = new google.maps.LatLng(lat, long);
            console.log(lat);
            myOptions = {
                zoom: 5,
                center: myLatlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

            marker = new google.maps.Marker({
                draggable: true,
                position: myLatlng,
                map: map,
                animation: google.maps.Animation.BOUNCE,
                title: document.getElementById("my-address").value
            });

            google.maps.event.addListener(marker, 'dragend', function (event) {


                document.getElementById("lat").value = event.latLng.lat();
                document.getElementById("long").value = event.latLng.lng();
            });

            for (i = 0; i < camps_length; i++) {
                var latitude = camps[i].split(':')[0];
                var longitude = camps[i].split(':')[1];
                var address = camps[i].split(':')[2];
                var camp_name = camps[i].split(':')[3];

                if ((Math.abs(lat - latitude) < lat_extreme && Math.abs(long - longitude) < long_extreme) || lat == "Null") {
                    myLatlng = new google.maps.LatLng(latitude, longitude);
                    console.log(address);
                    if (i==0 && lat=="Null") {
                        myOptions = {
                            zoom: 2,
                            center: myLatlng,
                            mapTypeId: google.maps.MapTypeId.ROADMAP
                        };
                        console.log(myLatlng);
                        map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
                    }

                    marker = new google.maps.Marker({
                        draggable: true,
                        position: myLatlng,
                        map: map,
                        icon: '<?php echo base_url(); ?>static/img/camp_marker.png',
                        title: camp_name+":"+address
                    });

                    google.maps.event.addListener(marker, 'dragend', function (event) {
                        latitude = event.latLng.lat();
                        longitude = event.latLng.lng();
                    });
                }
            }
        }

        function init()
        {

            var address = (document.getElementById('my-address'));
            var autocomplete = new google.maps.places.Autocomplete(address);
            autocomplete.setTypes(['geocode']);
            google.maps.event.addListener(autocomplete, 'place_changed', function() {
                var place = autocomplete.getPlace();
                if (!place.geometry) {
                    return;
                }

                var address = '';
                if (place.address_components) {
                    address = [
                        (place.address_components[0] && place.address_components[0].short_name || ''),
                        (place.address_components[1] && place.address_components[1].short_name || ''),
                        (place.address_components[2] && place.address_components[2].short_name || '')
                    ].join(' ');
                }
            });
        }

        function codeAddress() {
            geocoder = new google.maps.Geocoder();
            var address = document.getElementById("my-address").value;
            geocoder.geocode( { 'address': address}, function(results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    document.getElementById("lat").value=results[0].geometry.location.lat();
                    document.getElementById("long").value=results[0].geometry.location.lng();
                    initialize();
                }

                else {
                    alert("Geocode was not successful for the following reason: " + status);
                }
            });
        }

        function showAll() {
            document.getElementById("lat").value = "Null";
            initialize();
        }

        google.maps.event.addDomListener(window, 'load', init);
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
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
                            Camp Locations<br/>
                        </h1>
                        <br /><br />
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-body">
                            <label for="my-address"><b>Show Camps Near: </b></label>
                            <input type="text" class="form-control" placeholder="Enter Location" id="my-address" />
                            <label for="radius"><b>Search Radius (in Km): </b></label>
                            <input type="text" class="form-control" placeholder="Enter Search Radius(Default: 100 Km)" id="radius" />
                            <br />
                            <center>
                                <div class="btn btn-success col-lg-4" id="getCords" style="float: left;" onclick="codeAddress();">Show Camps</div>
                                <div class="btn btn-success col-lg-4" style="float: right;" onclick="showAll();">Show All Camps</div>
                                <br />
                                <input id="lat" value="Null" style="visibility: hidden"/>
                                <input id="long" value="Null" style="visibility: hidden"/>

                                <div id="map_canvas" style="width: 1035px; height: 685px">
                                </div>
                            </center>
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

</script>

</body>
</html>
