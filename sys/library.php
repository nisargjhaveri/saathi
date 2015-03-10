<?php
class Library {

    function __construct() {
    }

    /**
     * Load a view and pass some data to view.
     *
     * Copy of load_view in controller.php
     *
     * @param string $name Name of the view
     * @param array $data (optional) Data as an associative array
     */
    protected function load_view($name, $data = array()) {
        new View($name, $data);
    }

    /**
     * Load model
     *
     * Copy of load_model in controller.php
     *
     * @param string $name Name of the model
     * @param string $load_as (optional) Load model as this name
     */
    protected function load_model($name, $load_as = false) {
        if ($load_as == false)
            $load_as = $name;
        include_once(APPPATH . 'models/'.$name.'.php');
        $this->$load_as = new $name;
    }

    /**
     * Load library
     *
     * Copy of load_library in controller.php
     *
     * @param string $name Name of the library
     * @param string $load_as (optional) Load library as this name
     */
    protected function load_library($name, $load_as = false) {
        if ($load_as == false)
            $load_as = $name;
        $lib_path = APPPATH . 'libraries/'.$name.'.php';
        if (is_file($lib_path)) {
            include_once($lib_path);
        }
        else {
            include_once(SYSPATH . 'libraries/'.$name.'.php');
        }
        $this->$load_as = new $name;
    }
}
