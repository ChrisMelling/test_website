<?php

class Index_Model extends Model {

    function __construct() {
        parent::__construct();
    }

    public function run() {
        $query = $this->db->query('SELECT article_id, article_name,article_body FROM articles ORDER BY article_id');
    	return $query->fetchAll();
    }
}