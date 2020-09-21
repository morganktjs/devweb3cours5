<?php
    echo '<script type="text/javascript" src="/'.PATH_PUBLIC.'\js\addUser.js"></script>';
?>

<form class="needs-validation" method="post" action="/user/addUser" novalidate>
  <div class="row">
      <div class="col-12 col-md-6">
          <div class="form-group">
            <label for="first_name">Prénom</label>
            <input class="form-control" id="first_name" name="first_name" required>
            <div class="invalid-feedback">
            Le prénom est requis.
            </div>
          </div>
          <div class="form-group">
            <label for="last_name">Nom</label>
            <input class="form-control" id="last_name" name="last_name" required>
            <div class="invalid-feedback">
            Le nom est requis.
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Adresse courriel</label>
            <input type="email" class="form-control" id="email" name="email" required>
            <div class="invalid-feedback">
              Une adresse courriel valide est requise.
            </div>
          </div>
          <div class="form-group">
            <label for="phone_number">Téléphone</label>
            <input type="tel" class="form-control" id="phone_number" name="phone_number" required pattern="^[0-9]{7}([0-9]{3})?$">
            <div class="invalid-feedback">
              Le numéro doit être composé de 7 ou 10 chiffres sans espace ou symbole.
            </div>
          </div>
      </div>
      <div class="col-12 col-md-6">
          <div class="form-group">
            <label for="address">Adresse</label>
            <input class="form-control" id="address" name="address" required>
            <div class="invalid-feedback">
            L'adresse est requise.
            </div>
          </div>
          <div class="form-group">
            <label for="city">Ville</label>
            <input class="form-control" id="city" name="city" required>
            <div class="invalid-feedback">
            Le nom de la ville est requis.
            </div>
          </div>
          <div class="form-group">
            <label for="postal_code">Code Postal</label>
            <input class="form-control" id="postal_code" name="postal_code" required>
            <div class="invalid-feedback">
              Un code postal est requis. Aucun espace (G5Y5G5).
            </div>
          </div>
          <div class="form-group">
            <label for="age">Votre âge</label>
            <input class="form-control" id="age" name="age" required>
          </div>
          <div class="form-group">
            <label for="password">Mot de passe</label>
            <input type="password" class="form-control" id="password">
            <div class="invalid-feedback">
              Un mot de passe est requis.
            </div>
          </div>
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
