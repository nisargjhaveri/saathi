<?php
class Router {

    /**
    * Contains controller name
    * @var bool|string
    */
    private $controller = false;

    /**
    * Contains method name
    * @var bool|string
    */
    private $method = false;

    /**
    * Contains args
    * @var array
    */
    private $args = array();

    /**
     * Loads routes from `app/routes.php`
     */
    private function _load_routes() {
        include(APPPATH . 'routes.php');
        return empty($routes) ? array() : $routes;
    }

    /**
     * Extracts path and sets `$controller`, `$method` and `$args`
     */
    private function _extract_path($path) {
        global $default_controller, $default_method;

        $pathInfo = empty($path)? array() : explode('/', $path);

        $this->controller = empty($pathInfo[1]) ? $default_controller : $pathInfo[1];
        $this->method = empty($pathInfo[2]) ? $default_method : $pathInfo[2];
        $this->args = array_filter(array_slice($pathInfo, 3));
    }

    function __construct($request_path) {
        if (empty($request_path)) {
            $request_path = '/';
        }
        $routes = $this->_load_routes();
        $path = '';

        foreach($routes as $from=>$to) {
            $path = preg_replace('/^' . preg_quote($from, '/') . '/', $to, $request_path, 1, $count);
            if ($count)
                break;
        }

        if (empty($path)) {
            $path = $request_path;
        }
        $this->_extract_path($path);
    }

    public function get_controller(){
        return $this->controller;
    }

    public function get_method(){
        return $this->method;
    }

    public function get_args(){
        return $this->args;
    }

}
