<?php

class View {

    private $data = array();

    function __construct() {
        //echo 'this is the view';
    }

    public function set($var, $val) {
        $this->data[$var] = $val;
    }

    public function render($name, $noInclude = false) {
        if ($noInclude == true) {
            require 'views/' . $name . '.php';
        } else {
            require 'views/header.php';
            require 'views/' . $name . '.php';
            require 'views/footer.php';
        }
    }

}