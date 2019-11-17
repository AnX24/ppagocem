<?php
require_once('header.php');
?>
<script type="module" src="../js/procesos/ingreso.js"></script>
<script src="http://www.datejs.com/build/date.js" type="text/javascript"></script>
<script  src="https://code.jquery.com/jquery-3.3.1.min.js"  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <div class="principal">
    <div class="w-row">
      <div class="column-9 w-col w-col-2"><img src="images/man-user.png" alt="" class="image-2"></div>
      <div class="w-col w-col-10">
        <h1>Inicia tu sesión</h1>
        <div class="enterbox">
          <div class="w-form">
            <form class="form">
              <div class="columns-8 w-row">
                <div class="w-clearfix w-col w-col-6"><label for="name" class="field-label">RUT</label></div>
                <div class="w-col w-col-6"><input type="text" class="text-field-2 w-input" placeholder="Usuario" maxlength="10" id="user" required=""></div>
              </div>
              <div class="w-row">
                <div class="w-clearfix w-col w-col-6"><label for="password" class="field-label-2">Password</label></div>
                <div class="w-col w-col-6"><input type="password" class="text-field-2 w-input" placeholder="*********" maxlength="50" id="pass" required=""></div>
              </div><button type="button" id="continuarUS" >Entrar</button></form>
            <div class="w-form-done">
              <div>Thank you! Your submission has been received!</div>
            </div>
            <div class="w-form-fail">
              <div>Oops! Something went wrong while submitting the form.</div>
            </div>
          </div><a href="recuperar-clave.php" class="rceover">Recuperar Contraseña</a></div>
      </div>
    </div>
  </div>
  <?php
require_once('footer.php');
?>