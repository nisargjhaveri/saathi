<?php
error_reporting(E_ALL);

require('app/config.php');

/**
 * Set unset configs
 */
if (empty($_base_url)) {
    $_REQUEST_SCHEME = (!empty($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) !== 'off') ? 'https' : 'http';
    $_PATH = dirname($_SERVER['SCRIPT_NAME']);
    if (substr($_PATH, -1) != '/') $_PATH .= '/';
    $_base_url = $_REQUEST_SCHEME.'://'.$_SERVER['HTTP_HOST'].$_PATH;
}

/*
 * Helper implementation
 */
function load_helper($helper) {
    $helper_file = APPPATH . 'helpers/'.$helper.'.php';
    if (is_file($helper_file)) {
        include_once($helper_file);
    }
    else {
        include_once(SYSPATH . 'helpers/'.$helper.'.php');
    }
}

/*
 * Load common helpers
 */
load_helper('base_url');

/*
 * Load system
 */
require(SYSPATH . 'router.php');
require(SYSPATH . 'controller.php');
require(SYSPATH . 'model.php');
require(SYSPATH . 'library.php');

/*
 * Understand URL and decompose route
 */
$router = new Router(empty($_SERVER['PATH_INFO']) ? '' : $_SERVER['PATH_INFO']);
$controller = $router->get_controller();
$method = $router->get_method();
$args = $router->get_args();

/**
 * Load requested controller
 */
include(APPPATH . 'controllers/'.$controller.'.php');
$a=new $controller;

call_user_func_array( array( $a, $method ), $args );
