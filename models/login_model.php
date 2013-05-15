<?php

class Login_model extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function run() {
        $sth = $this->db->prepare("SELECT user_id FROM user WHERE 
                user_name = :login AND user_password = :password");
        $sth->execute(array(
            ':login' => $_POST['username'],
            ':password' => $_POST['password']
        ));

        $count = $sth->rowCount();
        if ($count > 0) {
            Session::init();
            Session::set('loggedIn', true);
            header('location: ../admin_page');
        } else {
            header('location: ../login');
        }
    }

}