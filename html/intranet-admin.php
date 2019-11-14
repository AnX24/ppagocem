<?php
require_once('header.php');
?>
  <div class="principal">
    <div class="w-row">
      <div class="column-9 w-col w-col-2"><img src="images/man-user.png" alt="" class="image-2"></div>
      <div class="w-col w-col-10">
        <h1>Inicia tu sesión</h1>
        <div class="enterbox">
          <div class="w-form">
            <form id="email-form" name="email-form" data-name="Email Form" class="form">
              <div class="columns-7 w-row">
                <div class="w-clearfix w-col w-col-6"><label for="name" class="field-label">ID</label></div>
                <div class="w-col w-col-6"><input type="text" class="text-field w-input" maxlength="256" name="id" data-name="id" id="id"></div>
              </div>
              <div class="w-row">
                <div class="w-clearfix w-col w-col-6"><label for="email" class="field-label-2">Password</label></div>
                <div class="w-col w-col-6"><input type="email" class="text-field-2 w-input" maxlength="256" name="password" data-name="password" id="password" required=""></div>
              </div><input type="submit" value="Iniciar" data-wait="Esperar" class="w-button"></form>
            <div class="w-form-done">
              <div>Thank you! Your submission has been received!</div>
            </div>
            <div class="w-form-fail">
              <div>Oops! Something went wrong while submitting the form.</div>
            </div>
          </div><a href="#" class="rceover">Recuperar Contraseña</a></div>
      </div>
    </div>
  </div>
  <?php
require_once('footer.php');
?>