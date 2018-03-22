<?php


class model_user extends CI_Model{

    public function loging()
    {
        $username = $this->input->post('username');
        $password =$this->input->post('password');

        $this->db->where('username',$username);
        $this->db->where('password',$password);
        $respond = $this->db->get('users');

        if($respond->num_rows()==1){

          return $respond->row(0);

        }
        else {

          return false;

        }
    }

}