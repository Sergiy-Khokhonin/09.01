<?php
class Category_model extends CI_Model{
    public function create_category($name_category){
        $sql = "insert into user(name_category) value ($name_category)";
        $result = $this->db->query($sql, array($name_category));
        }
}