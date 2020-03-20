
<?php
 $title ="Inscription Newsletter";
require_once '../function/db.php';
if (!empty($_POST['email']) && !empty($_POST['email'])) {
$email=$_POST['email'];
$pdo = getPDO();


$query = "INSERT INTO newsletter (email ) VALUES (:email)";

$stmt= $pdo->prepare($query);
$stmt->execute([':email'=>$email]);
}
?>

<?php require_once '../views/layout/header.php'; ?>


<div class="mt-5 mx-auto text-center w-50">
<form method="POST">
  <img class="mb-4" src="img/bootstrap-solid.svg" alt="" width="72" height="72">
  <h1 class="h3 mb-3 font-weight-normal">Inscrption Newsletter</h1>
  <label for="inputMail" class="sr-only">Email</label>
  <input type="mail" name="email" id="Mail" class="form-control" placeholder="Email" required="" autofocus="">
  <button class="btn btn-lg btn-primary btn-block" type="submit">S'inscrire à la newsletter</button>

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