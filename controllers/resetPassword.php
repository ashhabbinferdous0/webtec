<?php

use PHPMailer\PHPMailer\PHPMiler;

require_once'../models/reset password.php';
require_once'../helpers/session_helper.php';
require_once'../models/user.php'

require_once'../PHPMailer/src/PHPMailer.php';
require_once'../PHPMailer/src/Exception.php';
require_once'../PHPMailer/src/SMTP.php';

class ResetPasswords{
    private $resetModel;
    private $userModel;
    private $mail;

    public function_construct()
    {
        $this->resetModel= new ResetPassword;
        $this->userModel = new user;
        $this->mail= new PHPMailer();
        $this->mail->isSMTP();
        $this->mail->Host ='smtp.mailtrap.io';
        $this->mail->SMTPAuth = true;
        $this->mail->Port=2525;
        $this->mail->Username='8b2f86b05c0ecc';
        $this->mail->Password'd15b4ec38f5403';
    }
}

public function sendEmail(){
    $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
    $userEmail = trim($_POST['userEmail']);
}

if(empty($userEmail)){
    flash("reset","please input email");
    redirect("../reset password.php");
}
if(!filter_var($userEmail,FILTER_VALIDATE_EMAIL)){
    flase("reset","Invalid email");
    redirect("../reset password.php");
}

$selector = bin2hex(random_bytes(8));
$tokem = random_bytes(32);
$url = 'http://localhost/login-system/create-new-password.php?selector='.$selector.'&
validation='.bin2hex($token);

$expire = data("U") + 1800;
if(!$this->resetModel->deleteEmail($userEmail)){
    die("There wan an error");
}
$hasedToken = password-hash($token,PASSWORD_DEFAULT);
if(!$this->resetModel->insertToken($userEmail,$selector,$hasedToken,$expire)){
    die("there was an error");
}

$subject = "Reset your password";
$message ="<p>we recive a password reset request.</p>";
$message = "<p>here is your password reset link:</p>";
$message ="<a href='".$url."'>".$url."</a>";

$this->mail->setFrom('TheBoss@gmail.com');
$this->email->isHTML(true);
$this->mail->Subject = $subject;
$this->mail->Body =$message;
$this->mail->addAddress($usersEmail);

$this->mail->send();

flash("reset","check your email",'form-message.form message-green');
redirect("..//reset password.php")
  public function resetPassword(){
    $_POST = filter_input(INPUT_POST,FILTER_SANITIZE_STRING);
    $data =[
        'selector'=> trim($_POST['selector']);
        'validator' =>trim($_POST['validator']);
        'pwd' =>trim($_POST['pwd']);
        'pwd-repeat'=> trim($_POST['pwd-repeat']);
    ];
    $url = '../create-new-password.php?selector ='$data['selector'].'&validator='.$data
    ['validator'];

    if(empty($_POST['pwd'] || $_POST['pwd-repeat'])){
        flash("newReset","please fill out all fields");
        redirect($url);
    }else if($data['pwd'] !=$data['pwd-repeat']){
        flash("newReset","password donot match");
        redirect($url);

    }else if (strlen($data['pwd']) <6){
        flash("newReset","invalid password");
        redirect($url);
    }
    $currentdata = data("U");
    if(!$row = $this->resetPassword($data['selector'],$currentdata)){
        flash("newReset","sorry.this link is no longer valis");
        redirect($url);
    }

    $tokenbin = hex2bin($data['validator']);
    $tokenCheck = password_verify($tokenBin,$row->pwdResetToken);
    if(!$tokenCheck){
        flash("newReset","you need to re-submit ypur reset request");
        redirect($url);
    }
    $tokenEmail = $row->pwdResetEmail;
    If(!$this->userModel->findUserByEmailOrUsername($tokenEmail,$tokenEmail)){
        flash("newReset","there was an error");
        redirect($url);
    }
    $newPwdHash = password_hash($data['pwd'],PASSWORD_DEFAULT);
    if(!$this->userModel->resetPassword($newPwdHash,$tokenEmail)){
        flash("newReset","there was an error");
        redirect($url);
    }
    if(!this->resetModel->deletEmail($tokenEmail)){
        flash("newReset","there was an error");
        redirect($url);
    }
    flash("newReset","Password Update",'form-message form-message-green')
    redirect($url)

  }

$init = new ResetPassword;

if($_SERVER['REQUEST_METHOD'] == 'post'){
    switch($_POST['type']){
        case 'send':
            $init->sendEmail();
            break;

    }else{
        header("location:  ../index.php");
    }
}