<?php
class Category_model extends CI_Model{
    public function create_category($name_category){
        $sql = "insert into categorys(name_category) value ('$name_category')";
        $result = $this->db->query($sql, array($name_category));
        }

        public function select_category(){
            $sql = "select * from categorys ";
            $result = $this->db->query($sql);
            return $result->result_array();
        }

        public function delete_category(){
            $sql = "delete from categorys where ...";
            $result = $this->db->query($sql);
        }

        
}