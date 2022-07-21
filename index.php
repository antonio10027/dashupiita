<html>

<head>
<?php
    include("includes/head/head.php");

?>
<style>
    .first-row {position: absolute;top: 0; left: 0; right: 0; height: 100px; background-color: lime;}
    .second-row {position: absolute; top: 100px; left: 0; right: 0; bottom: 0; background-color: red }
    .second-row iframe {display: block; width: 100%; height: 100%; border: none;}
</style>

</head>

<body class="theme-blue">

<?php
     include("includes/topbody/topbody.php");
?>
            <!-- Menu -->
<?php
     include("includes/menu/menu.php");
?>           
            <!-- #Menu -->
            <!-- Footer -->
<?php
     include("includes/footer/footer.php");
?>             
    <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->       
    </section>

    <section class="content">
     
     <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                      <div class="body">
                        <iframe src="../upiitaweb/" frameborder="0" width="100%"
                        height="350px"></iframe>
                      </div>
                    </div>
                </div>
            </div>
 <!-- Example Tab -->
 <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                PROYECTO 7051 CONACYT - SEDESA
                                <small>Contaminantes de la Ciudad de México y su correlación con enfermedades crónicas no 
                                transmisibles.    
                                </small>
                            </h2>
                        </div>
                        <div class="body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                                <li role="presentation" class="active"><a href="#documentacion" data-toggle="tab">DOCUMENTACIÓN</a></li>
                                <li role="presentation"><a href="#cartografia" data-toggle="tab">CARTOGRAFÍA</a></li>
                                <li role="presentation"><a href="#microdatos" data-toggle="tab">MICRODATOS</a></li>
                                <li role="presentation"><a href="#bd" data-toggle="tab">BASES DE DATOS</a></li>
                                <li role="presentation"><a href="#manuales" data-toggle="tab">MANUALES</a></li>
                                <li role="presentation"><a href="#settings" data-toggle="tab">HERRAMIENTAS</a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                            <!--   ********************************   DOCUMENTACIÓN  **********************************************-->
                                <div role="tabpanel" class="tab-pane fade in active" id="documentacion">
                                    <b>Descripción</b>
                                    <p>
                                        Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                        Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
                                        pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                                        sadipscing mel.
                                    </p>
                                    <!-- Tabla -->
                                    <div class="row clearfix">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="card">
                                                <div class="body table-responsive">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Descripción</th>
                                                                <th>Archivo</th>
                                                               
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">1</th>
                                                                <td>Metodología</td>
                                                                <td><a target="blank" href="dox/MetodologíaEspacioTemporal.pdf" ><img src="images/ico_pdf.png"></a></td>
                                                               
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">2</th>
                                                                <td>Descripción de los proyectos</td>
                                                                <td><a target="blank" href="" ><img src="images/ico_pdf.png"></a></td>
                                                               
                                                            </tr>                                                           
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- #END# Tabla -->
                                </div>
                                <!--   ********************************   CARTOGRAFÍA  **********************************************-->
                                <div role="tabpanel" class="tab-pane fade" id="cartografia">
                                    <b>Descripción</b>
                                    <p>
                                        Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                        Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
                                        pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                                        sadipscing mel.
                                    </p>
                                    <!-- Tabla -->
                                         <!-- Tabla -->
                                         <div class="row clearfix">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="card">
                                                <div class="body table-responsive">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Descripción</th>
                                                                <th>Archivo</th>
                                                               
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">1</th>
                                                                <td>Defunciones por Neumonía</td>
                                                                <td><a target="blank" href="cartografia/defunciones/neumonia_defunciones.zip" ><img src="images/ico_shp.png"></a></td>
                                                               
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">2</th>
                                                                <td>Defunciones por Neumonía con contaminantes asociados a cada defunción</td>
                                                                <td><a target="blank" href="cartografia/defunciones/neumonia_defuncs_con_contams.zip" ><img src="images/ico_shp.png"></a></td>
                                                               
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">3</th>
                                                                <td>Defunciones por Cáncer</td>
                                                                <td><a target="blank" href="" ><img src="images/ico_shp.png"></a></td>
                                                               
                                                            </tr>      
                                                            <tr>
                                                                <th scope="row">4</th>
                                                                <td>Coropletas de estaciones meteorológicas con contaminantes</td>
                                                                <td><a target="blank" href="cartografia/coropletas/coropleta_estacs_contams.zip" ><img src="images/ico_shp.png"></a></td>
                                                               
                                                            </tr>                                                         
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                 
                                    <!-- #END# Tabla -->

                                </div>
                            <!--   ********************************   MICRODATOS   **********************************************-->
                                <div role="tabpanel" class="tab-pane fade" id="microdatos">
                                    <b>Profile Content</b>
                                    <p>
                                    En esta sección se proporciona varias formas de acceso a los microdatos, así como el archivo descriptor que provee la información necesaria para el manejo de las bases de datos. 
                                    Con la finalidad de facilitar la definición de su requerimiento, se recomienda consultar la Documentación de este programa estadístico y las otras formas de difusión de resultados
                                    en Tabulados y Publicaciones.                                    
                                    </p>                                                                     
                                         <!-- Tabla -->
                                         <div class="row clearfix">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="card">
                                                <div class="body table-responsive">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Descripción</th>
                                                                <th>Archivo</th>
                                                               
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">1</th>
                                                                <td>Metodología</td>
                                                                <td><a target="blank" href="" ><img src="images/ico_pdf.png"></a></td>
                                                               
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">2</th>
                                                                <td>Descripción de los proyectos</td>
                                                                <td><a target="blank" href="" ><img src="images/ico_pdf.png"></a></td>
                                                               
                                                            </tr>                                                           
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                 
                                    <!-- #END# Tabla -->
                                </div>
                            
                            <!--   ********************************   BD   **********************************************-->
                                <div role="tabpanel" class="tab-pane fade" id="bd">
                                    <b>Message Content</b>
                                    <p>
                                        Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                        Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
                                        pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                                        sadipscing mel.
                                    </p>
                                     <!-- Tabla -->
                                     <div class="row clearfix">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="card">
                                                <div class="body table-responsive">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Descripción</th>
                                                                <th>Archivo</th>
                                                               
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">1</th>
                                                                <td>Contaminantes por estación meteorológica</td>
                                                                <td><a target="blank" href="" ><img src="images/ico_csv.png"></a></td>
                                                               
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">2</th>
                                                                <td>Contaminantes por Delegación</td>
                                                                <td><a target="blank" href="" ><img src="images/ico_csv.png"></a></td>
                                                               
                                                            </tr>       
                                                            <tr>
                                                                <th scope="row">1</th>
                                                                <td>Contaminantes por colonia</td>
                                                                <td><a target="blank" href="" ><img src="images/ico_csv.png"></a></td>
                                                               
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">2</th>
                                                                <td>Contaminantes por fechas</td>
                                                                <td><a target="blank" href="" ><img src="images/ico_csv.png"></a></td>
                                                               
                                                            </tr>                                                          
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                 
                                    <!-- #END# Tabla -->
                                </div>

                                <!--   ********************************   MANUALES   **********************************************-->
                                <div role="tabpanel" class="tab-pane fade" id="manuales">
                                    <b>Message Content</b>
                                    <p>
                                        Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                        Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
                                        pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                                        sadipscing mel.
                                    </p>
                                     <!-- Tabla -->
                                     <div class="row clearfix">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="card">
                                                <div class="body table-responsive">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Descripción</th>
                                                                <th>Archivo</th>
                                                               
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">1</th>
                                                                <td>Manual de usuario</td>
                                                                <td><a target="blank" href="" ><img src="images/ico_pdf.png"></a></td>
                                                               
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">2</th>
                                                                <td>Manual técnico</td>
                                                                <td><a target="blank" href="" ><img src="images/ico_pdf.png"></a></td>
                                                               
                                                            </tr>                                                           
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                 
                                    <!-- #END# Tabla -->
                                </div>

                                <!--   ********************************   SETTINGS   **********************************************-->
                                <div role="tabpanel" class="tab-pane fade" id="settings">
                                    <b>Settings Content</b>
                                    <p>
                                        Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                        Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
                                        pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                                        sadipscing mel.
                                    </p>
                                </div>
                                <!--   ********************************   FIN SETTINGS   **********************************************-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Example Tab -->

    </section>

<?php
    include("includes/js/js.php");
?> 


</body>

</html>