<?php
require_once('header.php');
?>
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
              <div class="w-col w-col-6"><label for="RUT">Ingrese RUT</label><input type="text" class="text-field-2 w-input" placeholder="12345678-9" maxlength="10" id="rut"><label for="Clave-2">Ingrese contraseña</label><input type="password" class="text-field-2 w-input" placeholder="*********" maxlength="50" id="pass" required=""></div>
              <div class="column-8 w-col w-col-6"><button type="button" value="Aceptar" data-wait="Esperar" onclick="entrar();" class="submit-button w-button">Entrar</div>
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