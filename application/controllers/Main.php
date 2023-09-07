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

public function add_user(){
    if(!empty($_POST)){
        $name_user = $_POST['name_user'];
        $login = $_POST['login'];
        $password = $_POST['password'];
        $email = $_POST['email']
    
        $this->load->model("user_model");
        $this->user_model->add_user($login, $password, $name_user, $email);
        redirect('main/login');
    }
}

public function login(){
    $this->load->view('temp/header.php');
    $this->load->view('temp/nav.php');
    $this->load->view('login_view.php',$data);
    $this->load->view('temp/footer.php'); 
}




public function destroy(){

    $this->session->sess_destroy();
    redirect('main/index');
    
}

