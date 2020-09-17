(function() {
    'use strict';
    window.addEventListener('load', function() {
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          validateAge();
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();

  function validateAge()
  {
    var age = document.getElementById('age').value
    if(age >= 18)
    {
      document.getElementById('age').setCustomValidity("");
    }
    else
    {
      document.getElementById('age').setCustomValidity("Votre âge doit être supérieur à 18 !");
    }
  }