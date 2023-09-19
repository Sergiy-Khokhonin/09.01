<?php
class Application_model extends CI_Model{
    public function add_application($name,$discription,$id_user, $photo, $name_category){
        $sql ='INSERT INTO applications(Date_start, name, discription,id_user, photo, id_category) VALUES(CURRENT_DATE(),?,?,?,?,?)';
        $result = $this->db->query($sql,array($name,$discription,$id_user, $photo, $name_category));
        return $this->db->insert_id(); 
        }
        
    public function select_application(){
        $sql = 'select user.fio, applications.name, discription, photo, photoCom, status, date_start,date_end from user, applications where user.id_user=applications.id_user ORDER BY date_end DESC LIMIT 4';
        $result = $this->db->query($sql);
        return $result->result_array(); 

    }

    public function application_user($id_user){
        $sql = 'SELECT * FROM applications WHERE id_user = ?';
        $result = $this->db->query($sql,array($id_user));
        return $result->result_array();
    }

    }