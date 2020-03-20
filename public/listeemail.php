<?php
$title='Liste Email';
 require_once '../views/layout/header.php'; ?>
<?php require_once '../function/db.php';
 require_once '../function/utils.php';
    $pdo =getPDO();
    $query ="SELECT * FROM newsletter";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);


?>


    <div class="container-fluid d-flex mt-4">
  <table><?php foreach($users as $util){ ?>
    <div class="card mr-4" style="width: 12rem;">
    <div class="card-body">
    <h5 class="card-title">Mail: <?php echo $util["email"]; ?></h5>

    </div>
</div>

        <?php } ?>
    </table>

<?php require_once '../views/layout/footer.php'; ?>