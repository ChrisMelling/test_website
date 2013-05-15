<?php

class article_creation extends Controller {

    function __construct() {
        parent::__construct();
        
    }

    public function index() {

        $this->view->render('article_creation/index');
    }
    
    public function create() {
        
        if($this->model->create()){
            header('location: ../help');
        } else
        {
            echo "error";
        }
                
    }
}