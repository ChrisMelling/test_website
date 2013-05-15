<?php

class article_creation_model extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function create() {
        $sql = "INSERT INTO articles (article_name,article_body) VALUES (:article_name,:article_body)";

        $spl = $this->db->prepare($sql);

        $spl->execute(array(':article_name' => $_POST['subject'],
            ':article_body' => $_POST['bodytext']));
        
        $count = $spl->rowCount();
        if ($count > 0) {
            return true;
        } else {
            return false;
        }
    }
}