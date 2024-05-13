<?php
if(empty($_GET['selector']) || empty ($_GET['validator'])){
    echo 'could not valid your request !';
}else{
    $selector = $_GET['selector'];
    $validator = $_GET['validator'];

    if (ctype_Xdigit($selector) && ctype_xdigit($validator)) } ?>
    
<?php
include_once 'header.php';
include_once './helpers/session_helper.php';
?>
<h1 class="header">Enter New Password</h>
<?php flash("reset") ?>

<form method="post"action ="./controller/ResetPasswords.php">
    <input type="hidden" name="type"value="reset" />
    <input type="hidden"name="selector" value="<?php echo $selector ?>"/>
    <input type="hidden"name="validator" value="<?php echo $validator ?>"/>
    <input type="password"name="pwd"
    placeholder="enter a new password...">
    <input type="password"name="pwd-repeat"
    placeholder="repet new password...">
    <button type="submit"name ="submit">Recive Email</button>
</form>
<?php
include_once 'footer.php'
?>
   
    