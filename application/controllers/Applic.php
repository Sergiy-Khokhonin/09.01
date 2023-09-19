<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Applic extends CI_Controller{

    public function index(){
        $this->load->view('temp/header.php');
        $this->load->view('temp/nav_user.php');
        $this->load->model("application_model");
        $id_user = $this->session->userdata('id_user');
        $data ['application'] = $this->application_model->application_user($id_user);
        $this->load->view('user_view.php', $data);
        $this->load->view('temp/footer.php'); 
    }
    

    public function add_application_view(){
        $this->load->view('temp/header.php');
        $this->load->view('temp/nav_user.php');
        $this->load->model("category_model");
        $data ['category'] = $this->category_model->select_category();
        $this->load->view('add_aplication_view.php', $data);
        $this->load->view('temp/footer.php'); 
    }


    public function vse_zav_view(){
        $this->load->view('temp/header.php');
        $this->load->view('temp/nav_user.php');
        $this->load->model("application_model");
        $data['application'] = $this->application_model->application_user();
        $this->load->view('vse_zav_view.php', $data);
        $this->load->view('temp/footer.php'); 
    }
    



    public function add_application(){
        if (!empty($_POST)){
            if(isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK){
            $id_user = $this->session->userdata('id_user');
            $name = $_POST['name'];
            $name_category = $_POST['name_category'];
            $discription = $_POST['discription'];
            $photo = $_FILES['photo']['name'];

        $this->load->model("application_model");
        $this->application_model-> add_application($name,$discription,$id_user, $photo, $name_category);


        $photopath = "image/". $photo;
        move_uploaded_file($_FILES['photo']['tmp_name'], $photopath);

       }
}
}
}





