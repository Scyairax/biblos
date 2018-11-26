<?php

include_once 'include/include_head.1.php';


?>

  <body class="bg-light">

    <div class="container text-center">
      <div class="py-5 ">
        <img class="d-block mx-auto mb-4" src="logo.svg" alt="" width="72" height="72">
        <h2>Registrazione</h2>
      </div>

      <div class="row text-center all ">
       
        <div class="col-md-8 order-md-1">
          <form class="needs-validation" method="POST" action="funzioni/registrazione.php">
           
             
            <div class="mb-3">
              <label for="email">Email </label>       
               <input type="email" class="form-control" id="Email" placeholder="tu@esempio.it" name="variabile1"  required>
              <div class="invalid-feedback">
                perpiacere inserisci una email valida!
              </div>
            </div>

            <div class="mb-3">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="Password" placeholder="inserisci la password!" name="variabile2" required>
              <div class="invalid-feedback">
                Inserisci una password valida!
              </div>
            </div>
             
             
              <div class="row">
             <div class="col-md-6 mb-3">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="nome" placeholder="Nome" name="variabile3" required>
                <div class="invalid-feedback">
                  inserisci un nome valido!
                </div> 
              </div>
              <div class="col-md-6 mb-3">
                <label for="cognome">Cognome</label>
                <input type="text" class="form-control" id="cognome" placeholder="Cognome" name="variabile4" required>
                <div class="invalid-feedback">
                  inserisci un cognome valido!
                </div>
              </div>
            </div>
            
            
            <div class=" mb-3">
                <label for="telefono">Telefono</label>
                <input type="number" class="form-control" id="telefono" placeholder="+39 (numero di telefono)" name="variabile5" required>
                <div class="invalid-feedback">
                  inserisci un numero valido!
                </div>
              </div>
            <hr class="mb-4 mt-5">
            <a href="funzioni/registrazione.php"><button class="btn btn-primary btn-lg btn-block" type="submit">Registrati</button></a>
          </form>
        </div>
      </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2018-2019 BYBLOS COMPANY</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Area privata</a></li>
          <li class="list-inline-item"><a href="#">Termini di supporto</a></li>
          <li class="list-inline-item"><a href="#">Assistenza</a></li>
        </ul>
      </footer>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
  </body>
</html>