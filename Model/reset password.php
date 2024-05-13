<?php
if(empty($_GET['selector'])  || empty ($_GET['validator'])){
    echo'could not valid your request'
}else{
    $selector = $_GET['selector'];
    $validator = $_GET['validator'];

    if (ctype_Xdigit($selector) && ctype_xdigit($validator)) } ?>


<?php
include_once'header.php';
include_once'./helpers/session_helper.php';
?>

<h1 class="header">Reset password</h1>

<?php flash('reset') ?>


<form method="post" action ="./controllers/ResetPasswords.php">
    <input type="hidden"name="type" value="sent">
    <input type="text"name="usersEmail"
    placeholder="Email...">
    <button type="submit"name="submit">Recive Email</button>
</form>

<?php
include_once 'footer.php'
?>
