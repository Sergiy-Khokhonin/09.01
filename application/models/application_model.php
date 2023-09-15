<?php
class Application_model extends CI_Model{
    public function add_application($name, $discription, $photo, $status){
        $sql = "insert into applications(name, discription, photo, status) value ($name, $discription, $photo, $status)";
        $result = $this->db->query($sql, array($name, $discription, $photo, $status));
        }
    public function select_application(){
        $sql = 'select user.fio, applications.name, discription, photo, photoCom, status, date_start,date_end from user, applications where user.id_user=applications.id_user ORDER BY date_end DESC LIMIT 4';
        $result = $this->db->query($sql);
        return $result->result_array(); 

    }

    }