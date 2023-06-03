<?php
require_once('c://xampp/htdocs/PathToy/view/head/header.php');
if(empty($_SESSION['usuario'])){
  header("Location:login.php");
}

?>
<?php
require_once('c://xampp/htdocs/PathToy/view/head/footer.php');
?>