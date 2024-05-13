<?php
include_once 'header.php';
include_once './helper/session_helper.php';

?>


<h1 class ="header">PLEASE SINEUP</h1>

<?php flash('register') ?>


<form method="post" action="./controllers/User.php">
<input $type ="hidden" name = "type" value= "register">
<input $type ="text" name = "username"
    placeholder ="Full Name">
    <input $type ="text" name = "userEmail"
    placeholder ="Email...">
    <input $type ="text" name = "usersUid"
    placeholder ="username">
    <input $type ="password" name = "usersPwd"
    placeholder ="Password">
    <input $type ="password" name = "pwdRepeat"
    placeholder ="Repeat password">
    <button $type="submit"name="submit">Sign Up</button>
</form>

<?php 

include_once'footer.php'

?>
    



