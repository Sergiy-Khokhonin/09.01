<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Applic extends CI_Controller{

    public function index(){
        $this->load->view('temp/header.php');
        $this->load->view('temp/nav.php');
        $this->load->view('user_view.php');
        $this->load->view('temp/footer.php'); 
    }
    

    public function add_application_view(){
        $this->load->view('temp/header.php');
        $this->load->view('temp/nav_user.php');
        $this->load->view('add_application_view.php');
        $this->load->view('temp/footer.php'); 
    }

    public function add_application(){
            
        if(!empty($_POST)){
            $name_application = $_POST['name_work'];
            $descript = $_POST['descript'];
            $id_user = $this->session->userdata('id_user');
        
    
        redirect('Main/index');
    
    }}
}