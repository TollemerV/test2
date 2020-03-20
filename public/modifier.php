<?php
$title='Liste Email';
 require_once '../views/layout/header.php'; ?>
<?php require_once '../function/db.php';
 require_once '../function/utils.php'; 



 if (isset($_POST['login']) && isset($_POST['email']) && isset($_POST['role'])) {
   $login = $_POST['login'];
   $email = $_POST['email'];
   $role = $_POST['role'];
 
    $update ([
     'login' => $login,
      'email' => $email,
     'role' => $role,

    ]);
 
   
 }
 
    $pdo = getPdo();
  $query = "SELECT * FROM users WHERE login = :login";
  $stmt = $pdo->prepare($query);
  $stmt->execute(['login' => $login]);
  $row = $stmt->fetch(PDO::FETCH_ASSOC);
 ?>
 
    <form method="POST">
    <div class="mt-5 mx-auto text-center w-50">
     <input type="text" class="form-control" id="login" name="login" placeholder="Login" value="<?php echo $row['login']; ?>" />
   
  
     <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo $row['email']; ?>" />    
     <input type="text" class="form-control" id="role" name="role" placeholder="Rôle" value="<?php echo $row['role']; ?>" />
  

   <button class="btn btn-lg btn-primary btn-block" type="submit">Enregistrer</button>
   </div>
 </form>

 
<?php
require_once '../views/layout/footer.php';
?>