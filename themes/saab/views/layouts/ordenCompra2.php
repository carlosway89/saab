<?php include("header.php"); ?>

     <!-- Page heading -->
     <div class="page-head">
       <h2 class="pull-left"><i class="icon-list-alt"></i> Orden de Compra</h2>
       <!-- Breadcrumb -->
       <div class="bread-crumb pull-right">
        <a href="home.php"><i class="icon-home"></i> Inicio</a>
        <span class="divider">/</span> 
        <a href=""> Órdenes</a>
        <span class="divider">/</span> 
        <a href="ordenCompra.php" class="bread-current"> Orden de Compra</a>
      </div>
      <div class="clearfix"></div>
    </div>
    <!-- Page heading ends -->
    <!-- Matter -->
    <div class="matter">
      <div class="container-fluid">
        <h2 class="center">Orden de Compra - Guía de Internamiento</h2>
        <h4 class="center">Recursos Directamente Recaudados</h4>
        <h3 class="center">N° 35</h3>
        <div class="row-fluid">
          <div class="span12">
            <!-- Form header of buying order begins -->
            <form class="form-horizontal">
              <div class="control-group pull-right">
                <label class="control-label">R.U.C.:</label>
                <div class="controls"><p>23456789012</p></div>
              </div>
              <div class="control-group">
                <label class="control-label">Señor(es):</label>
                <div class="controls"><p>Hipermercado Tacorita</p></div>
              </div>
              <div class="control-group pull-right">
                <label class="control-label">Teléfono:</label>
                <div class="controls"><p>123456</p></div>
              </div>
              <div class="control-group">
                <label class="control-label">Dirección:</label>
                <div class="controls"><p>Pasaje Albarricín</p></div>
              </div>
              <div class="control-group">
                <label class="control-label">Le agradecemos enviar a nuestro almacén en:</label>
                <div class="controls"><p>Av. América Sur N° 2870</p></div>
              </div>
              <div class="control-group">
                <label class="control-label">Lo siguiente:</label>
                <div class="controls"><p>x.x.xx.x.x blablablabla</p></div>
              </div>
              <div class="control-group">
                <label class="control-label">Referencia:</label>
                <div class="controls"><p>Utiles de escritorio</p><p>Factura xxxx</p></div>
              </div>
              <div class="control-group">
                <label class="control-label">Facturara a nombre de:</label>
                <div class="controls"><p>Dirección Regional de Educación La Libertad</p></div>
              </div>
            </form>
            <!-- Form header of buying order ends -->
          </div>
        </div>
        <div class="row-fluid">
          <div class="span12">
            <!-- Form detail of buying order begins -->
            <form class="form-horizontal">
              <div class="control-group">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>N°</th><th>Bien</th><th>Unidad</th><th>Cantidad</th><th>P. Unitario (S/.)</th><th>Sub Total (S/.)</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td style="width: 60px">1</td><td>Hojas Bond de 75 gr.</td><td>Millares</td><td>25</td><td>15</td><td>325</td>
                    </tr>
                    <tr>
                      <td style="width: 60px">2</td><td>Lapiceros rojos.</td><td>Cajas</td><td>15</td><td>10</td><td>150</td>
                    </tr>
                    <tr>
                      <td style="width: 60px">3</td><td>Plumones para pizarra.</td><td>Decenas</td><td>3</td><td>12</td><td>36</td>
                    </tr>
                    <tr>
                      <td style="width: 60px">4</td><td>Discos regrabables.</td><td>Cuarto de ciento</td><td>20</td><td>12</td><td>240</td>
                    </tr>
                    <tr>
                      <td colspan="5" style="text-align:right;">Total (S/.)<td>751</td>
                    </tr>
                  </tbody>
                </table>
                <br>
                <p class="text-right">Son: SETECIENTO CINCUENTA Y UN 00/100 NUEVOS SOLES</p>
              </div>
              <div class="control-group center">
                <div class="controls">
                  <a class="btn inline" href="#" onClick="print();">Imprimir Orden de Compra</a>
                </div>
              </div>
            </form>
            <!-- Form detail of buying order ends -->
          </div>
        </div>
      </div>
    </div>
    <!-- Matter ends -->

<?php include("footer.php"); ?>