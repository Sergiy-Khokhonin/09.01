<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Main extends CI_Controller{
    public function index(){
        $this->load->view('temp/header.php');
        $this->load->view('temp/nav_admin.php');
        $this->load->view('vse_zav_view.php');
        $this->load->view('temp/footer.php'); 
    }

    public function create_category_view(){
        $this->load->view('temp/header.php');
        $this->load->view('temp/nav_admin.php');
        $this->load->view('create_category_view.php');
        $this->load->view('temp/footer.php'); 
    }

    public function create_category(){
        if(!empty($_POST)){
        $name_category = $_POST['name_category'];

        $this->load->model("Category_model");
        $this->category_model->add_user($name_category) ;
        
    
    } 
}

}