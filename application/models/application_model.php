<?php
class Application_model extends CI_Model{
    public function add_application($name, $discription, $photo, $status){
        $sql = "insert into user(name, discription, photo, status) value ($name, $discription, $photo, $status)";
        $result = $this->db->query($sql, array($name, $discription, $photo, $status));
        }


}