<?php
require_once('header.php');
?>
  <div class="principal">
    <div class="menusuuario w-row">
      <div class="pagoc1 w-col w-col-6 w-col-stack">
        <div class="insidebox">
          <h1 class="heading">Datos Cliente</h1>
          <div class="w-layout-grid grid-3">
            <div>Nombre:</div>
            <div><label id="nombre"></div>
            <div>Rut:</div>
            <div><label id="rut"></div>
            <div>Correo:</div>
            <div><label id="correo"></div>
          </div>
        </div>
      </div>
      <div class="pagoc2 w-col w-col-6 w-col-stack">
        <div class="insidenav22"><a href="#" class="navlink">Cerrar Sesión</a></div>
        <div class="insidebox2">
          <h1 class="heading">Detalle de Pago</h1>
          <div class="w-layout-grid grid-3">
          <script type="text/javascript">

          $(document).ready(function () {
            var table = $('#UserList').DataTable({
              "iDisplayLength": 4,
              select: {
                  style: 'single'
             }
            });
             table
              .on('select', function (e, dt, type, indexes) {
                     var bla = dt.row({selected: true}).data().yourField
               })
 
           });

          </script>
            <div>Total a pagar:</div>
            <div>$xxxxxxxxxxxx</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modo-de-pago">
    <div class="other">
      <h1 class="heading-2">Modo de Pago</h1>
    </div><img src="images/webpay.png" alt="" class="image"></div>
    <?php
require_once('footer.php');
?>

<script type="text/javascript">

document.getElementById('nombre').innerHTML = 'venti';
document.getElementById('rut').innerHTML = '12345678-9';
document.getElementById('correo').innerHTML = 'jperez@gmail.com';
  

</script>