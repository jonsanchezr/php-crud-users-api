<?php 

namespace Api;

use Exception;

class UserRepository{
    private $db = null;

    public function __construct($db){
        $this->db = $db;
    }

    public function create(Array $input){
        try{
            $fullname = $input['fullname'];
            $username = $input['username'];
            $email = $input['email'];
            $password = $input['password'];

            $this->db->query("insert into users(fullname, username, email, password) values('$fullname', '$username', '$email', '$password')");
            $this->db->close();
            return 'creation successful';
        } catch(Exception $e){
            $errorMessage = $e->getMessage();
            die($errorMessage);
        }
    }

    public function findAll(){
        try{
            $result = $this->db->query("select * from users");
            $result = $result->fetch_all(MYSQLI_ASSOC);
            $this->db->close();
            return $result;
        } catch(Exception $e){
            $errorMessage = $e->getMessage();
            die($errorMessage);
        }
    }

    public function update($userId, Array $input){
        try{
            $fullname = $input['fullname'];
            $username = $input['username'];
            $email = $input['email'];
            $password = $input['password'];

            $this->db->query("update users set fullname = '$fullname', username = '$username', email = '$email', password = '$password' where id = '$userId' ");
            $this->db->close();
            return "update successful";
        } catch(Exception $e){
            $errorMessage = $e->getMessage();
            die($errorMessage);
        }
    }

    public function delete($userId){
        try{
            $this->db->query("delete from users where id = '$userId' ");
            return "delete successful";
        } catch(Exception $e){
            $errorMessage = $e->getMessage();
            die($errorMessage);
        }
    }
}
