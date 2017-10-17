<?php

class Crud_Model extends Model
{
    var $data = array();
    var $form = array();
    var $controller;

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('errors');
        $this->load->library('validation');
    }
}
?>
