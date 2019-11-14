<?php
require_once('header.php');
?>
  <div class="principal">
    <div class="crearusuario w-row">
      <div class="pagoc1 w-col w-col-6 w-col-stack">
        <div class="form-block w-form">
          <h1>Crear Usuario</h1>
          <form id="email-form" name="email-form" data-name="Email Form">
            <div class="w-row">
              <div class="form1 w-col w-col-6"><label for="name">Rut</label><input type="text" class="t1 w-input" maxlength="256" name="name" data-name="Name" id="name"><label for="email">Nombre</label><input type="email" class="t1 w-input" maxlength="256" name="email" data-name="Email" id="email" required=""><label for="name-2">Apellido</label><input type="email" class="t1 w-input" maxlength="256" name="email-2" data-name="Email 2" id="email-2" required=""></div>
              <div class="form1 w-col w-col-6"><label for="name-2">Correo</label><input type="email" class="t1 w-input" maxlength="256" name="email-3" data-name="Email 3" id="email-3" required=""><label for="name-2">Acceso</label><select id="field" name="field" class="t1 w-select"><option value="">Select one...</option><option value="First">First Choice</option><option value="Second">Second Choice</option><option value="Third">Third Choice</option></select><label for="name-2">Contraseña</label><input type="email" class="t1 w-input" maxlength="256" name="email-3" data-name="Email 3" id="email-3" required=""></div>
            </div><input type="submit" value="Crear Usuario" data-wait="Please wait..." class="w-button"></form>
          <div class="w-form-done">
            <div>Thank you! Your submission has been received!</div>
          </div>
          <div class="w-form-fail">
            <div>Oops! Something went wrong while submitting the form.</div>
          </div>
        </div>
      </div>
      <div class="pagoc2 w-col w-col-6 w-col-stack">
        <div class="insidenav rel"><a href="#" class="navlink">Cerrar Sesión</a></div>
      </div>
    </div>
  </div>
  <?php
require_once('footer.php');
?>