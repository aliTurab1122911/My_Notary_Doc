<?php

class SignupContr extends SignupUser{

    private $usrid;
    private $pwd;
    private $conpwd;
    private $state;
    private $zip;
    private $email;
    private $submit;
    
    public function __construct($usrid,$pwd,$conpwd,$state,$zip,$email){
        $this->usrid=$usrid;
        $this->pwd=$pwd;
        $this->conpwd=$conpwd;
        $this->state=$state;
       $this->zip=$zip;
        $this->email=$email;
    }
        public function signupUser(){
            if($this->emptyInput()==false){
            header("location: ../index.php?error=emptyinput");
           exit();
            }
            if($this->invalidUid()==false){
            header("location: ../index.php?error=userid");
           exit();
            }
            if($this->invalidEmail()==false){
            header("location: ../index.php?error=email");
           exit();
            }
            if($this->pwdMatch()==false){
            header("location: ../index.php?error=password");
           exit();
            }
            if($this->uidTakenCheck()==false){
            header("location: ../index.php?error=idcheck");
           exit();
            }
            $this->setUser($this->usrid,$this->pwd,$this->state,$this->zip,$this->email);
    }
    
    //note for checking i changed the type of function to public
    public function emptyInput(){
        $result;
        if(empty( $this->usrid|$this->pwd||$this->conpwd||$this->state||$this->zip||$this->email)){
            $result=false;
        }
        else{
            $result=true;
        }
        return $result;
    }
        //note for checking i changed the type of function to public
    public function invalidUid(){
        $result;
        if(!preg_match("/^[a-zA-Z0-9]*$/",$this->uid))
        {
            $result=false;
        }
        else{
             $result=true;
        }
        return  $result;                                                                                                                   ;
    }
          //note for checking i changed the type of function to public
        public function invalidEmail(){
        $result;
        if(!filter_var($this->email,FILTER_VALIDATE_EMAIL))
        {
            $result=false;
        }
        else{
             $result=true;
        }
        return  $result;   
        
    }
        //note for checking i changed the type of function to public
        public function pwdMatch(){
        $result;
        if($this->pwd !== $this->conpwd)
        {
            $result=false;
        }
        else{
             $result=true;
        }
        return  $result;   
        
    }
        //note for checking i changed the type of function to public
            public function uidTakenCheck(){
        $result;
        if(!$this->checkUser($this->usrid,$this->email))
        {
            $result=false;
        }
        else{
             $result=true;
        }
        return  $result;
            }
    
    
    
    
}