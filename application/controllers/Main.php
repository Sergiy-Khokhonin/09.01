<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Main extends CI_Controller{
    public function index(){
        $this->load->view('temp/header.php');
        $this->load->view('temp/nav.php');
        $this->load->view('main_view.php');
        $this->load->view('temp/footer.php');
    }
}
public function reg(){
    $this->load->view('temp/header.php');
    $this->load->view('temp/nav.php');
    $this->load->view('reg_view.php');
    $this->load->view('temp/footer.php'); 
}
