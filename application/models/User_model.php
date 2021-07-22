<?php
    class User_model extends CI_Model{

        function create($formArray)
        {
             $this->db->insert("users",$formArray);  //this means INSERT INTO users(name,email) VALUES(?,?) ;
            //here 'users' is table name and '$formArray' is a variable which contains all data
            //given by form.

        }
        function all()
        {
            $this->db->get('users',)->result_array();//this means SELECT * FROM users;

            $users=$this->db->get('users',)->result_array();//all data will be store in $user variable
            return $users;
        }
        function getUser($userId)   //$userId is the varible which receives user_id
        {
            $this->db->where('user_id',$userId);//SELECT * FROM users WHERE user_id=$userId;
            //$this->db->get('users')->row_array();//fetch only one row

            $user=$this->db->get('users')->row_array();//fetched data stored in the '$user' variable
            return $user;

        }

        function updateUser($userId,$formArray)
        {
            //UPDATE users SET name='?',email='?' WHERE user_id=$userId;
            $this->db->where('user_id',$userId);
            $this->db->update('users',$formArray);
        }

        function deleteUser($userId)
        {
            $this->db->where('user_id',$userId);//DELETE FROM users where
            $this->db->delete('users');         //user_id=$userId;
        }
    }
?>