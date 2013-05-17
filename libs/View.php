<?php

class View {

    private $pageVars = array();

    function __construct() {
        //echo 'this is the view';
    }

    public function set($var, $val) {
        $this->pageVars[$var] = $val;
    }

    public function render($name, $noInclude = false) {
        extract($this->pageVars);
        if ($noInclude == true) {
            require 'views/' . $name . '.php';
        } else {
            require 'views/header.php';
            require 'views/' . $name . '.php';
            require 'views/footer.php';
        }
    }

}