<?php
class User_model extends CI_Model{
    public function add_user($FIO, $login, $email, $password){
    $sql = "insert into user(FIO, email, login, password) value ('$FIO', '$email', '$login', '$password')";
    $result = $this->db->query($sql, array($FIO, $login, $email, $password));
    }
    
    public function login($login,$password){
        $sql = "select id_user, role, FIO from user where login = ? AND password = ?";
        $result = $this->db->query($sql,array($login, $password));
        return $result->row_array();
    }

}