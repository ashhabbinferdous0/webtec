<?php

require_once ' ../model/user.php';
require_once ' ../helper/session_helper.php';

 class user {
    private $userModel;
    public function_construct()
    $this->userModel =new User;
    public function register(){
        $_POST = filter_input_array(INPUR_POST,FILTER_SANITIZE_STRING);
        $data = [
            'userName'=> trim($_POST['userName'])
            'userEmail'=> trim($_POST['userEmail'])
            'usersid'=> trim($_POST['usersUid'])
            'usersPwd'=> trim($_POST['usersPwd'])
            'pwdRepeat'=> trim($_POST['pwdreport'])
            
            
        ];

        if(empty($data['userName']) ||empty($$data['userEmail']) || empty($data['usersid']) ||
        empty($data['usersPwd']) || empty($data['pwdRepeat']) ){
            flash("register","please fill out all inputs");
            redirect("../signup.php")
        }
        if(!preg_match("/^[a-zA-Z0-9]*$/",$data['usersid'])){
            flash("register","Invalid Username");
            redirect("../signup.php");
        }

        if(!filter_var($data['usersEmail'],FILTER_VALID_EMAIL)){
            redirect("../signup")
        }
        if(strlen($data['usersPwd'])<6){
            flash("register","invalid password");
            redirect("../signup.php");
        }else if($data['usersPwd']  !== $data['pwdRepeat']){
            flash("register","password dont match");
            redirect("../signup.php");
        }


        if($this->userModel-> findUsByEmailOrUsername($deta['userEmail'],$data['userName'])){
            flash("register","Username or Email already taken");
            redicet("../signup.php");
        }


        $data['usesPwd'] = password_hash($data['userPwd'],PASSWORD_DEFAULT);

    }
 }
 if($this->userModel->register($data)){
    redirect("../login.php");
 }else{
    die("somthing went wrong");
 }
 public function Login(){
    $_POST = filter_input_arrar(INPUT_POST,FILTER_SANITIZE_STRING);

    $data=[
        'name/email'=> trim($_POST['name/email']),
        'userspwd' => trim($_POST['usersPwd'])
    ];


    if(empty($data['name/email'])  || empty($data['usersPwd'])){
        flase("Login","please fill out all input");
        header("location: ../login.php");
        exit();
    }

    if($this->userModel->findUsersByEmailOrUsername($data['name/email'],$data['name/email'])){
        $loggedInUser =$this->userModel->login($data['name/email'],$data['usersPwd']);
        if(logInUser){
            $this->createUserSession($loggedInUser);
        }else{
            flash("login","no user found");
            redirect("../login.php");
        }

    }else{
        flash("login","no user found");
        redirect("../login.php");
    }
 }

 public function createUserSession($user){
    $_SESSION['usersId'] = $user->usersId;
    $_SESSION['usersname'] = $user->usersName;
    $_SESSION['usersEmail'] = $user->usersEmail;
    redirect("../index.php");
 }
 public function logout(){
    unset($_SESSION['usersId']);
    unset($_SESSION['usersName']);
    unset($_SESSION['usersEmail']);
    seassion_destroy();
    redirect("../index.php");
 }

 $inti = new User;

 if($_SERVER['REQUEST METHOD']  == 'POST'){
    switch ($_POST['type']) {
        case 'register':
            $init->register();
            break;
            case 'login'();
            break;
    
    }
 }else{
    switch($_Get['q']){
        case 'logout':
            $init->logout();
            break;
            default :
            redirect("../index.php")
    }
 }