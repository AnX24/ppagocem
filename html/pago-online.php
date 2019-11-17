<?php
require_once('header.php');
?>
<script type="module" src="../js/procesos/ingreso.js"></script>
<script  src="https://code.jquery.com/jquery-3.3.1.min.js"  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

  <div class="principal">
    <div class="menusuuario w-row">
      <div class="column-6 w-col w-col-6 w-col-stack">
        <h1>Aquí cualquier información.</h1>
      </div>
      <div class="column-7 w-col w-col-6 w-col-stack">
        <h1>Inicio de Sesión</h1>
        <div class="w-form">
          <form id="email-form" name="email-form" data-name="Email Form" class="iniciarsesion">
            <div class="columns-5 w-row">
            <div class="w-col w-col-6"><label for="RUT">Ingrese RUT</label><input type="text" placeholder="12345678-9" class="w-input" maxlength="256" name="RUT" data-name="RUT" id="rutcl"><label for="Clave-2">Ingrese contraseña</label><input type="password" class="w-input" placeholder="***********" maxlength="256" name="Clave" data-name="Clave" id="pass" required=""></div>
              <div class="column-8 w-col w-col-6"><button type="button" id="continuarUS" class="submit-button w-button" >Aceptar</div>
            </div>
          </form>
          <div class="w-form-done">
            <div>Thank you! Your submission has been received!</div>
          </div>
          <div class="w-form-fail">
            <div>Oops! Something went wrong while submitting the form.</div>
          </div>
        </div><a href="#" class="rceover">Recuperar Contraseña</a></div>
    </div>
  </div>
  <?php
require_once('footer.php');
?>
