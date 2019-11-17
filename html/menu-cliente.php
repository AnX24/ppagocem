<?php
require_once('header.php');
?>
<script type="module" src="../js/procesos/tablacliente.js"></script>

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="../js/recursos/bootstrap/css/bootstrap.min.css">
      <!--datables CSS básico-->
      <link rel="stylesheet" type="text/css" href="../js/recursos/datatables/datatables.min.css"/>
      <!--datables estilo bootstrap 4 CSS-->  
      <link rel="stylesheet"  type="text/css" href="../js/recursos/datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
      <link rel="stylesheet"  type="text/css" href="../js/recursos/datatables/Select-1.3.1/css/select.bootstrap.min.css">
      <!-- jQuery, Popper.js, Bootstrap JS -->
      <script src="../js/recursos/jquery/jquery-3.3.1.min.js"></script>
      <script src="../js/recursos/popper/popper.min.js"></script>
      <script src="../js/recursos/bootstrap/js/bootstrap.min.js"></script>
        
      <!-- datatables JS -->
      <script type="text/javascript" src="../js/recursos/datatables/datatables.min.js"></script>

  <div class="principal">
    <div class="na2"><a href="#" class="navlink">Cerrar Sesión</a></div>
    <div class="info-del-cliente w-clearfix"><img src="images/man-user.png" alt="" class="image-5">
      <h1 class="heading-4">Gabriel Veloso Nombre Apellido</h1>
    </div>
    <h3 class="heading-3">Historial de deuda</h3>
    <div class="html-embed w-embed">
    <div class="container">
        <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">        
                        <table id="table_id" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                <tr>
                <!--cabecera -->
                    <th>Fecha Entrada</th>
                    <th>Fecha Vecto</th>
                    <th>Monto</th>
                    <th>Estado</th>
                    <th></th>
                </tr>
                </tbody>
                </table>                  
                    </div>
                </div>
        </div>  
    </div>
    </div>
    <div class="w-form">
      <form id="email-form" name="email-form" data-name="Email Form" class="form-2">
        <div class="columns-6 w-row">
          <div class="w-col w-col-4"><label for="name" class="field-label-3">Total a pagar:</label></div>
          <div class="column-11 w-col w-col-4"><input type="text" class="text-field-3 w-input" maxlength="256" name="calculo" data-name="Calculo" id="calculo"></div>
          <div class="column-10 w-col w-col-4"><button type="button" data-wait="Please wait..." class="submit-button-2 w-button">Procesar</div>
        </div>
      </form>
      <div class="w-form-done">
        <div>Thank you! Your submission has been received!</div>
      </div>
      <div class="w-form-fail">
        <div>Oops! Something went wrong while submitting the form.</div>
      </div>
    </div>
    <div class="insidenav pay"><a href="#" class="navlink">Pagar</a></div>
  </div>
  <?php
require_once('footer.php');
?>

