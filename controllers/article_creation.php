<?php

class article_creation extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {

        $this->view->render('article_creation/index');
    }

    // make an error handler which will be used if the upload fails
    function error($error, $location, $seconds = 5) {
        echo $error;
        exit;
    }

// end error handler


    public function create() {

        if ($this->model->create()) {
            $this->redirect("help");
        } else {
            echo "error";
        }

        // filename: upload.processor.php
// first let's set some variables
//$directory_self = str_replace(basename($_SERVER['PHP_SELF']), '', $_SERVER['PHP_SELF']);
//
//$uploadsDirectory = $_SERVER['DOCUMENT_ROOT'] . $directory_self . 'public/uploaded_files/';
//
//$uploadForm = 'http://' . $_SERVER['HTTP_HOST'] . $directory_self . 'upload.form.php';
//
//$uploadSuccess = 'http://' . $_SERVER['HTTP_HOST'] . $directory_self . 'upload.success.php';
//
//$fieldname = 'file';
//
//
//
//
//$errors = array(1 => 'php.ini max file size exceeded', 
//                2 => 'html form max file size exceeded', 
//                3 => 'file upload was only partial', 
//                4 => 'no file was attached');
//
//isset($_POST['submit'])
//	or error('the upload form is neaded', $uploadForm);
//
//	
//@is_uploaded_file($_FILES[$fieldname]['tmp_name'])
//	or $this->error('not an HTTP upload', $uploadForm);
//	
//
//@getimagesize($_FILES[$fieldname]['tmp_name'])
//	or $this->error('only image uploads are allowed', $uploadForm);
//	
//
//$now = time();
//
//while(file_exists($uploadFilename = $uploadsDirectory.$_FILES['file']['name']))
//{
//	echo "file already exists";   
//        exit;
//}
//
//
//@move_uploaded_file($_FILES[$fieldname]['tmp_name'], $uploadFilename)
//	or error('receiving directory insuffiecient permission', $uploadForm);
//	
//        $this->model->image_upload($_FILES['file']['name']);
//
//        header('location: ../index');
//    }
    }
}