<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Main extends CI_Controller{
    public function index(){ 
        $this->load->view('temp/header.php'); 
        $role = $this->session->userdata('role'); 
        if(!empty($role)){ 
        if($role =="Клиент"){ 
            $this->load->view('temp/nav_user.php'); 
                } 
         if($role =="Администратор"){ 
            $this->load->view('temp/nav_admin.php'); 
        }}
         
 
         
         else{ 
            $this->load->view('temp/nav.php'); 
}
        $this->load->view('main_view.php');         
        $this->load->view('temp/footer.php'); 
    
        }

public function reg(){
    $this->load->view('temp/header.php');
  $this->load->view('temp/nav.php');
    $this->load->view('reg_view.php');
    $this->load->view('temp/footer.php'); 
}

public function add_user(){
    if(!empty($_POST)){
        $FIO = $_POST['fio'];
        $login = $_POST['login'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $this->load->model("user_model");
        $this->user_model->add_user($FIO, $login, $email, $password);
        redirect('main/index');
    }
}

public function login(){
    $data['mess'] = "";
    $this->load->view('temp/header.php');
    $this->load->view('temp/nav.php');
    $this->load->view('login_view.php',$data);
    $this->load->view('temp/footer.php'); 
}

public function avtoriz(){
    if(!empty($_POST['password'])and !empty($_POST['login']));

    $this->load->model("user_model");
    $user = $this->user_model->login($_POST['login'], $_POST['password']);

    if(!empty($user)){
        $this->session->set_userdata($user);
    
      redirect('main/index');
    }
    else{
    $data['mess'] = "Неверный логин или пароль";
    $this->load->view('temp/nav.php');
    $this->load->view('login_view.php',$data);
    $this->load->view('temp/footer.php'); 
}
}



+
}
