<?php
include_once'header.php';
include_once'./helpers/session_helper.php';
?>

<hi class="header">Please Login</h1>
<?php flash('login')?>

<form method="post" action="./controllers/user.php">
    <input type ="hidden"name="type"value="Login">
    <input type ="text"name="name/email"
    placeholder="Username/Email...">
    <input type="password"name="usersPwd"
    placeholder="password...">
    <Button type = "submit"name="submit">Log In</Button>
</form>

<div class="form-sub-msg"><a herf="./reset-password.php">Forgotten Password?</a></div>
<?php
include_once 'footer.php'
?>