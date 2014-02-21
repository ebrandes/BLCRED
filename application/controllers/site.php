<?php

class Site extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        $this->load->view('template/topo.php');
        $this->load->view('index.php');
        $this->load->view('template/rodape.php');
    }
    
}