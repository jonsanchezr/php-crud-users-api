<?php

namespace Api;

use Exception;

class UserRepositoryTest{
    
    private $db;
    private $index;

    public function __construct(){
        $this->db = [];
        $this->index = 0;
    }

    public function create(Array $input){
        try{
            if(count($input) === 0){
                throw new Exception('empty input');
            }

            $this->index += 1;
            $key = strval($this->index);

            $fullname = $input['fullname'];
            $username = $input['username'];
            $email = $input['email'];
            $password = $input['password'];

            $userData = [
                'fullname' => $fullname,
                'username' => $username,
                'email' => $email,
                'password' => $password
            ];

            $this->db[$key] = $userData;
            return $this->index;
            return 'creation successful';
        } catch(Exception $e){
            $errorMessage = $e->getMessage();
            return $errorMessage;
        }
    }

    public function findAll(){
        try{
            return $this->db;
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

            $userData = [
                'fullname' => $fullname,
                'username' => $username,
                'email' => $email,
                'password' => $password
            ];

            $key = strval($userId);
            $db[$key] = $userData;
            
            return "update successful";
        } catch(Exception $e){
            $errorMessage = $e->getMessage();
            die($errorMessage);
        }
    }

    public function delete($userId){
        try{
            $key = strval($userId);
            unset($this->db[$key]);
            
            return "delete successful";
        } catch(Exception $e){
            $errorMessage = $e->getMessage();
            die($errorMessage);
        }
    }
}
