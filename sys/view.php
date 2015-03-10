<?php

class View {

    function __construct($view_name_noconflict, $data = array()) {
        extract($data);
        include(APPPATH . "views/$view_name_noconflict.php");
    }

}
