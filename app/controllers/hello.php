<?php

class hello extends Controller {

    function index() {

        $this->load_model("hello_model", "hello_model");

        $name = $this->hello_model->whoami();

        $this->load_view("hello", [
            "from" => $name
        ]);
    }

}
