<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Applic extends CI_Controller{

    public function index(){
        $this->load->view('temp/header.php');
        $this->load->view('temp/nav_user.php');
        $this->load->view('user_view.php');
        $this->load->view('temp/footer.php'); 
    }
    

    public function add_application_view(){
        $this->load->view('temp/header.php');
        $this->load->view('temp/nav_user.php');
        $this->load->view('add_aplication_view.php');
        $this->load->view('temp/footer.php'); 
    }

    public function add_application(){
        if(!empty($_POST)){
            $name = $_POST['name'];
            $discription = $_POST['discription'];
            $photo = $_POST['photo'];

        $this->load->model("Application_model");
        $application = $this->discription->add_application($name_work, $discription);
    }
}}