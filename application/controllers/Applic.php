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

        $this->load->model("application_model");
        $data['applications'] = $this->application_model->select_application();

        $this->load->view('add_aplication_view.php', $data);
        $this->load->view('temp/footer.php'); 
    }

    public function add_application(){
        if(!empty($_POST)){
            $name = $_POST['name'];
            $discription = $_POST['discription'];
            $photo = $_POST['photo'];

        $this->load->model("application_model");
        $data ['application'] = $this->application_model->add_application($name, $discription);
        
    }

}

    public function delete_application(){
        if(!empty($_GET)){;
            $del = $_GET['id_aplication']

            $this->load->model("application_model");
        }
    }
}