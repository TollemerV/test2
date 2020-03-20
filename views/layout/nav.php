<?php  @session_start() ?>

<nav class="site-header sticky-top py-1 bg-dark">
  <div class="container d-flex flex-column flex-md-row justify-content-between">
    <a class="py-2" href="index.php" aria-label="Product">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img" viewBox="0 0 24 24" focusable="false"><title>Accueil</title><circle cx="12" cy="12" r="10"></circle><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"></path></svg>
    </a>
    <a class="py-2 d-none d-md-inline-block" href="index.php">Accueil</a>

    <?php  if(isset($_SESSION['status']) && $_SESSION['status'] == 'connected') { ?>
      <a class="py-2 d-none d-md-inline-block" href="/listeuser.php">Liste des Utilisateurs</a>
      <a class="py-2 d-none d-md-inline-block" href="/listeemail.php">Liste d'emails</a>
      <a class="py-2 d-none d-md-inline-block" href="/createuser.php">Créer un  Utilisateur</a>
      <a class="py-2 d-none d-md-inline-block" href="/modifier.php">Modifier</a>
        <a class="py-2 d-none d-md-inline-block" href="/admin/logout.php">Déconnexion</a>
    <?php } elseif(empty($_SESSION)) { ?>
        <a class="py-2 d-none d-md-inline-block" href="/inscription.php">Inscription</a>
        <a class="py-2 d-none d-md-inline-block" href="/admin">Connexion</a>
     <?php } ?>
  </div>
</nav>