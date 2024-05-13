<?php

class ResetPassword{
    private $db;

    public function _construct()
    {
        $this->db = new Database;
    }

    public function deletEmail($email){
        $this->db->quary('DELETE FROM pwdreset WHERE pwdResetEmail =:email');
        $this->db->bind('email',$email);

        if($this->db->execute()){
            return true ;
        }else{
            return false;
        }
    }

    public function insertToken($email,$selector,$hasedToken,$expire){
        $this->db->quary('INSERT INTO pwdreset(pwdResetEmail,pwdResetSelector,pwdResetToken,
        pwdResetExpires)VALUE(:email, :selector,  :token, :expires)');
        $this->db->bind(':email',$email);
        $this->db->bind(':selector',$email);
        $this->db->bind(':token',$token);
        $this->db->bind(':expires',$expire);

        if($this->bd->execute()){
            return true;
        }else{
            return false;
        }
    }
    public function resetPassword($selector,$currentData){
        $this->db->quary('SELECT * FROM pwdreset WHERE pwdResetSelector=:selector AND
        pwdResetExpires>= :currentData');
        $this->db->bind(':selector',$selector);
        $this->db->bind(':currentData',$currentData);
        $row =$this->db->single();
        if($this->db->rowCount()> 0){
            return $row;
        }else{
            return  false;
        }
    }

}