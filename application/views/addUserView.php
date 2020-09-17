<?php
    echo '<script type="text/javascript" src="/'.PATH_PUBLIC.'\js\addUser.js"></script>';
?>

<form class="needs-validation" novalidate>
  <div class="row">
      <div class="col-12 col-6-md">
          <div class="form-group">
            <label for="firstName">Prénom</label>
            <input class="form-control" id="firstName" name="firstName" required>
            <div class="invalid-feedback">
            Le prénom est requis.
            </div>
          </div>
          <div class="form-group">
            <label for="lastName">Nom</label>
            <input class="form-control" id="lastName" name="lastName" required>
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
            <label for="phone">Téléphone</label>
            <input type="tel" class="form-control" id="phone" name="phone" required pattern="^[0-9]{7}([0-9]{3})?$">
            <div class="invalid-feedback">
              Le numéro doit être composé de 7 ou 10 chiffres sans espace ou symbole.
            </div>
          </div>
      </div>
      <div class="col-12 col-6-md">
          <div class="form-group">
            <label for="adress">Adresse</label>
            <input class="form-control" id="adress" name="adress" required>
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
            <label for="zipcode">Code Postal</label>
            <input class="form-control" id="zipcode" name="zipcode" required>
            <div class="invalid-feedback">
              Un code postal est requis. Aucun espace (G5G5G5).
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
      </div">
      <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
