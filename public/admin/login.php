<?php
$title='Connexion';
 require_once '../../views/layout/header.php'; ?>
<?php require_once '../../function/db.php';
 require_once '../../function/utils.php';

 
$error =false; ?>

<?php if(isset($_POST['login']) && isset($_POST['password'])){
    $login = $_POST['login'];
    $password=$_POST['password'];
    $pdo = getPDO();

    $query = "SELECT * FROM users  WHERE login= :login";
    $stmt =$pdo->prepare($query);
    $stmt->execute([':login'=> $login]); 
    $row = $stmt->fetch(PDO::FETCH_ASSOC); 

    if($row && password_verify($password, $row['password']))
    {
        session_start();
        $_SESSION['status'] ="connected";
        $_SESSION['user_login']= $row['login'];
        redirect('/admin');

    }else{

        $error = true;
    }
}
  
?>

<?php if($error){ ?>
<div class="alert alert-primary" role="alert">
  AUTHENTIFICATION FAIL!
</div>
<?php } ?>
<div class="mt-5 mx-auto text-center w-50">
<form method="POST">
  <img class="mb-4" src="../img/bootstrap-solid.svg" alt="" width="72" height="72">
  <h1 class="h3 mb-3 font-weight-normal">Connexion</h1>
  <label for="inputEmail" class="sr-only">Login</label>
  <input type="text" name="login" id="Login" class="form-control" placeholder="Login" required="" autofocus="">
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password">
  <button class="btn btn-lg btn-primary btn-block" type="submit">Se connecter</button>

</form>


<iframe id="wanteeedPanel" data-version="1.7.4" allowtransparency="true" style="
      width: 335px !important;
      height: 250px !important;
      min-width: 0;
      min-height: 0;
      display: none;
      position: fixed;
      top: 10px;
      right: 10px;
      left: auto;
      border: none;
      background-color: #ffffff;
      overflow: hidden;
      z-index: 9145739864;
      clip: auto;
      border-radius: 3px;
      box-shadow: rgb(181, 181, 181) 1px 1px 3px 2px;
    "></iframe></div>
<?php  require_once '../../views/layout/footer.php'; ?>