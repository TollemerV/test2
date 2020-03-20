<?php
$title='Liste Utilisateur';
 require_once '../views/layout/header.php'; ?>
<?php require_once '../function/db.php';
 require_once '../function/utils.php';
    $pdo =getPDO();
    $query ="SELECT * FROM users";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);


?>


    <div class="container-fluid d-flex mt-4">
  <table><?php foreach($users as $util){ ?>
    <div class="card mr-4" style="width: 18rem;">
    <div class="card-body">
    <h5 class="card-title"> Nom : <?php echo $util["login"]; ?></h5>
    <h5 class="card-title">Mail :<?php echo $util["email"]; ?></h5>
    <p class="card-text" style="font-size:20px;">Role :<?php echo $util["role"]; ?></p>
    </div>
</div>

        <?php } ?>
    </table>

<?php require_once '../views/layout/footer.php'; ?>