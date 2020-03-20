<?php require_once '../../function/utils.php'; 
 $title ="Connecté";?>
<?php
session_start();
if (isset($_SESSION['status']) && ($_SESSION['status'])=='connected'){
echo 'Bonjour '.ucfirst($_SESSION['user_login']);
}else

{
  redirect('/admin/login.php');
} ?>

<?php require_once '../../views/layout/header.php'; ?>

<?php  require_once '../../views/layout/footer.php'; ?>


