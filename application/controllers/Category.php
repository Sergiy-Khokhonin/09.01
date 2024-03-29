<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Category extends CI_Controller{
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

    public function all_category_view(){
        $this->load->view('temp/header.php');
        $this->load->view('temp/nav_admin.php');
        $data ['category'] = $this->category_model->select_category();
        $this->load->view('all_category_view.php', $data);
        $this->load->view('temp/footer.php'); 
    }

    public function create_category(){
        if(!empty($_POST)){
        $name_category = $_POST['name_category'];

        $this->load->model("category_model");
        $this->category_model->create_category($name_category) ;
        $data ['category'] = $this->category_model->create_category($name_category);
        
        
    } 

    redirect('main/index');
}

}