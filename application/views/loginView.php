<?php 
  echo ('<script type="text/javascript" src="/'.PATH_PUBLIC.'\js\login.js"></script>');
?>
<form action="/login" id="login_form" class="needs-validation" method="post" novalidate>
  <div class="row">
    <div class="col-sm-10 col-lg-6">
      <div class="form-group">
        <label for="email">Adresse courriel</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="Votre adresse courriel" required
          pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
        <div class=" invalid-feedback">
          L'adresse courriel est invalide
        </div>
      </div>
      <div class="form-group">
        <label for="password">Mot de passe</label>
        <input type="password" class="form-control" name="password" id="password" placeholder="Mot de passe" required>
        <div class=" invalid-feedback">
          Le mot de passe ne peut pas être vide.
        </div>
      </div>

    </div>
  </div>
    <?php
      if($has_failed_previous_attempt){
        echo ('<div class="row">');
        echo ('<div class="col-sm-10 col-lg-6">');
        echo ('<div class="alert alert-danger" role="alert">');
        echo ('Mauvais usager ou mot de passe');
        echo ('</div>');
        echo ('</div>');
        echo ('</div>');
      }
    ?>
    <div class="row">
    <div class="col-sm-10 col-lg-6">
      <button type="submit" class="btn btn-primary">Soumettre</button>
    </div>
  </div>

</form>