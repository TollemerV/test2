<?php
 $title ="Créer un utilisateur";
require_once '../function/db.php';
if (!empty($_POST['login']) && !empty($_POST['password'])) {
$login=$_POST['login'];
$password=password_hash($_POST['password'] , PASSWORD_BCRYPT , ['cost'=>12]);
$email=$_POST['email'];
$role=$_POST['role'];
$active=$_POST['active'];
$pdo = getPDO();


$query = "INSERT INTO users (login, password,email,role,active ) VALUES (:login,:password,:email,:role,:active)";

$stmt= $pdo->prepare($query);
$stmt->execute([':login'=> $login,':password'=>$password,':email'=>$email,':role'=>$role,':active'=>$active]);
}
?>

<?php require_once '../views/layout/header.php'; ?>


<div class="mt-5 mx-auto text-center w-50">
<form method="POST">
  <img class="mb-4" src="img/bootstrap-solid.svg" alt="" width="72" height="72">
  <h1 class="h3 mb-3 font-weight-normal">INSCRIPTION</h1>
  <label for="inputText" class="sr-only">Login</label>
  <input type="text" name="login" id="Login" class="form-control" placeholder="Login" required="" autofocus="">
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password">
  <label for="inputMail" class="sr-only">Email</label>
  <input type="mail" name="email" id="Mail" class="form-control" placeholder="Email" required="" autofocus="">

  <label for="inputRole" class="sr-only">Rôle</label>
  <input type="text" name="role" id="Role" class="form-control" placeholder="User ou Administrateur " required="" autofocus="">
  <label for="inputMail" class="sr-only">Active</label>
  <input type="integer" name="active" id="Active" class="form-control" placeholder="1 pour Active, 0 pour Inactive" required="" autofocus="">

  <button class="btn btn-lg btn-primary btn-block" type="submit">S'inscrire</button>

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
<?php require_once '../views/layout/footer.php'; ?>