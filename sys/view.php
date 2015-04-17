<?php

class View {

    private $data = null;

    function __construct($view_name_noconflict, $data = array()) {
        $this->data = $data;
        extract($data);
        include(APPPATH . "views/$view_name_noconflict.php");
    }

    function load_fragment($frag_name_noconflict) {
        extract($this->data);
        include(APPPATH . "views/$frag_name_noconflict.php");
    }

}
