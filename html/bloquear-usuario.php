<?php
require_once('header.php');
?>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="../js/recursos/bootstrap/css/bootstrap.min.css">
<!--datables CSS básico-->
<link rel="stylesheet" type="text/css" href=".../js/recursos/datatables/datatables.min.css"/>
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
    <div class="w-row">
      <div class="w-col w-col-6">
        <h1 class="heading-4">Bloquear Usuario</h1>
        <div class="html-embed w-embed">
        <div class="container">
        <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">        
                        <table id="table_id" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                <tr>
                <!--cabecera -->
                    <th>Usuario</th>
                    <th>Correo</th>
                    <th>ID</th>
                    <th>Bloqueo</th>
                    <th></th>
                </tr>
                </tbody>
                </table>                  
                    </div>
                </div>
        </div>  
    </div>
    </div>
        </div>
      </div>
      <div class="c2 w-col w-col-6">
        <div class="insideboxblock">
          <div class="w-layout-grid grid-3">
            <div>Usuario:</div>
            <div><label id="lUser" class="field-label-2">|__________|</label></div>
            <div>Correo:</div>
            <div><label id="lCorreo" class="field-label-2">|__________|</label></div>
            <div>ID:</div>
            <div><label id="lId" class="field-label-2">|__________|</label></div>
            </div>
        </div>
        <div class="div-block-4">
          <div class="insidenav"><a href="#" class="navlink">Guardar</a></div>
          <div class="insidenav"><a href="#" class="navlink">Cancelar</a></div>
        </div>
      </div>
    </div>
  </div>
  <?php
require_once('footer.php');
?>
