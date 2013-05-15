<?php

class Index extends Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->view->text = $this->model->run();
        $this->view->render('index/index');
    }

}