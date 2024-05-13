<?php
include_once 'header.php'

?>
<ho id=index-text>welcome,<?php if(isset($_SESSION['usersId'])){
    echo explore("" , $_SESSION['usersname'])[0];
}else{
    echo'Guest';
}
?> </h1>

<?php
include_once 'footer.php'
?>