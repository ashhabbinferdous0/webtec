<?php

require_once ' ../libraries/Database.php';
 class user {
    private $db;

    public function_construct()
    {
        $this->db = new Database ;
    }

    public function findUserByEmailOrUsername($email,$username){
        $this->db->quary('SELECT * FROM users WHERE usersUid = : username OR userEmail = :email');
        $this->db->bind(':username',$username);
        $this->db->bind(':email',$email);

        $row =$this->db->single();

            return $row;
        }else if{
            false;
        }

        public function register($data){
            $this->db->quary('INSERT INTO users(userName,usersEmail,usersUid,userPwd)
            VALUES (:name,:email, :uid,  :password)');
            $this->db->bind(':name',$data['username'];)
            $this->db->bind(':email',$data['usersEmail'];)
            $this->db->bind(':uId',$data['usersUid'];)
            $this->db->bind(':password',$data['userspwd']);

            if ($this->db->execute()){
                return True ;
            }else{
                return false ;
            }
        }
        public function login($namreOrEmail,$password){
           $row =$this->findUserByEmailOrUsername($namreOrEmail,$namreOrEmail);
           if($row==false)return false;
           $hashedPassword = $row->usersPwd ;
           if(passwor_verify($password,$hashedPassword)){
            return $row;
           }else{
            return false;
           }
        }
        public function login($nameOrEmail,$password){
            $row = $this->findUserByEmailOrUsername($nameOrEmail,$nameOrEmail);
            
            if($row== false)return false;
            $hashedPassword = $row->userPwd;
            if(password_verify($password,$hashedPassword)){
                return $row;
            }else{
                return false;
            }
        }
        public function resetPassword($newPwdHash,$tokenEmail){
            $this->db->quary('UPDATE USERS SET userspwd=:pwd WHERE usersEmail=email');
            $this->db->bind(':pwd',$newPwdHash);
            $this->db->bind(':email',$tokenEmail);

            if($this->db->execute()){
                return true ;
            }else{
                return false ;
            }
        }
    }


 }