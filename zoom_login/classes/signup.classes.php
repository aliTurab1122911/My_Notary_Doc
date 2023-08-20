<?php

class Signup extends Dbh {
    
        protected function setUser($uid,$pwd,$email,$state,$zip){
        $stmt = $this->connect()->prepare('INSERT INTO `users` (`users_id`, `users_pwd`, `users_email`, `users_zip`, `users_state`) VALUES (?,?,?,?,?);');
        
        
        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
        
        if(!$stmt->execute(array($uid,$hashedPwd,$email,$state,$zip))){
           $stmt = null;
           header("location: ../index.php?error=stmtfailed");
           exit();
        }
        $stmt = null;

    }

    protected function checkUser($uid,$email){
        $stmt = $this->connect()->prepare('SELECT users_id FROM users WHERE users_id = ? OR users_email = ?;');
        if(!$stmt->execute(array($uid,$email))){
           $stmt = null;
           header("location: ../index.php?error=stmtfailed");
           exit();
        }
        $resultcheck = false;
        if($stmt->rowCount() > 0){
            $resultcheck = false;
        }
        else{
            $resultcheck = true;
        }
        return $resultcheck;
        
    }
}