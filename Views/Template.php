<?php
namespace Views;

//use function Sodium\crypto_box_keypair_from_secretkey_and_publickey;

new Template();
class Template
{
	public static function header()
	{
?>

        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
            <link href="<?php echo URL?>/Public/css/style.min.css" type="text/css" rel="stylesheet">
            <link href="<?php echo URL?>/Public/css/custom.min.css" type="text/css" rel="stylesheet">
            <link rel="stylesheet" href="<?php echo URL?>/Public/css/style.css">
            <script type="text/javascript" src="<?php echo URL?>/Public/js/plugins/jquery-1.11.2.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

            <title>Registro de Congreso</title>

            <nav >
                <div class="nav-wrapper #bdbdbd grey lighten-1 " id="barra">
                    <img responsive-img src="<?php echo URL?>/Public/imagen/logo.png"width="12%"  align="left">
                    <img responsive-img src="<?php echo URL?>/Public/imagen/logoMetropolitano.png"width="13%" align="right">
                    <a href="#" class="brand-logo" src="logo.png"></a>
                </div>
            </nav>
        </head>
        

        <main class="container">
        <div class="row">
            <div class="col offset-l3 l9 m12 s12">

            </div>
        </div>
            <br>
            <h4>| Formulario de inscripción |</h4>
            <div class="row">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s6">
                        <input id="first_name" type="text" class="validate">
                        <label for="first_name">Primer apellido</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="last_name" type="text" class="validate">
                            <label for="last_name">Telefono de contactos</label>
                        </div>
                    </div>
                </form>

                    <div class="row">
                        <form class="col s12">
                            <div class="row">
                                <div class="input-field col s6">
                                    <input id="second_name" type="text" class="validate">
                                    <label for="second_name">Segundo apellido</label>
                                </div>
                                <div class="input-field col s6">
                                    <input id="Email" type="text" class="validate">
                                    <label for="Email">Email</label>
                                </div>
                            </div>
                        </form>
                    </div>

                            <div class="row">
                                <form class="col s12">
                                    <div class="row">
                                        <div class="input-field col s6">
                                            <input id="nombres" type="text" class="validate">
                                            <label for="nombres">Nombres</label>
                                        </div>
                                        <div class="input-field col s6">
                                            <input id="especialidad" type="text" class="validate">
                                            <label for="">Especialidad</label>
                                        </div>
                                    </div>
                                </form>
                            </div>

                                    <div class="row">
                                        <form class="col s12">
                                            <div class="row">
                                                <div class="input-field col s6">
                                                    <input id="numero_cedula" type="text" class="validate">
                                                    <label for="numero_cedula">No de Cedula</label>
                                                </div>
                                                <div class="input-field col s6">
                                                    <input id="año de titulacion" type="text" class="validate">
                                                    <label for="titulaciom">Año de titulacion</label>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                            <div class="row">
                                                <form class="col s12">
                                                    <div class="row">
                                                        <div class="input-field col s6">
                                                            <input id="direccion" type="text" class="validate">
                                                            <label for="direccion">Direccion</label>
                                                        </div>
                                                        <div class="input-field col s6">
                                                            <input id="codigo minsa" type="text" class="validate">
                                                            <label for="codigo">Codigo minsa</label>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
            </div>

                                                    <div class="row">
                                                        <form class="col s12">
                                                            <div class="row">
                                                                <div class="input-field col s6">
                                                                    <input id="ciudad" type="text" class="validate">
                                                                    <label for="ciudad">Ciudad</label>
                                                                </div>
                                                                <div class="input-field col s6">
                                                                    <input id="año de estudio" type="text" class="validate">
                                                                    <label for="codigo">Año de estudio</label>
                                                                </div>
                                                                <div class="input-field col s4">
                                                                    <p>
                                                                        <input type="checkbox" id="test1" />
                                                                        <label for="test1">Hospital</label>
                                                                    </p>
                                                                </div>
                                                                <div class="input-field col s4">
                                                                    <p>
                                                                        <input type="checkbox" id="test2" />
                                                                        <label for="test2">Institución</label>
                                                                    </p>
                                                                </div>
                                                                <div class="input-field col s4">
                                                                    <p>
                                                                        <input type="checkbox" id="test3" />
                                                                        <label for="test3">Estudiantes</label>
                                                                    </p>
                                                                </div>
                                                                <div >
                                                                    <br>
                                                                    <div class="input-field col s6">
                                                                        <br><p>
                                                                            <br>
                                                                            <input type="checkbox" id="test4" />
                                                                            <label for="test4">Curso de Insulinoterapía</label>
                                                                        </p>
                                                                    </div>
                                                                    <br>
                                                                    <div class="input-field col s12">
                                                                        <label>|Pre-congreso| 24 de Septiembre |</label>
                                                                    </div>
                                                                    <div class="input-field col s6">
                                                                        <p><br><br>
                                                                            <input type="checkbox" id="test5" />
                                                                            <label for="test5">Curso de Abordaje de Vía Aérea Difícil</label>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div class="input-field col s12">
                                                                    <label>|Congreso Médico| 25 y 26 de Septiembre |</label>
                                                                </div>
                                                                <div>
                                                                    <br>
                                                                    <div class="input-field col s6">
                                                                        <br><p>
                                                                            <br>
                                                                            <input type="checkbox" id="test6" />
                                                                            <label for="test6">Medicina Interna-Medicina del <br>
                                                                            paciente crítico, Coordinador<br>
                                                                            Dr. Guillermo Porras</label>
                                                                        </p>
                                                                    </div>
                                                                    <div class="input-field col s6">
                                                                        <p><br><br>
                                                                            <input type="checkbox" id="test7" />
                                                                            <label for="test7">Pediatría, Coordinador<br>
                                                                            Dr. Fulgencio Báez</label>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div class="input-field col s6">
                                                                    <br><p>
                                                                        <br>
                                                                        <input type="checkbox" id="test8" />
                                                                        <label for="test8">Cirugía, Coordinador<br>
                                                                        Dr. Milron Mairena</label>
                                                                    </p>
                                                                </div>
                                                                <div class="input-field col s6">
                                                                    <p><br><br>
                                                                        <input type="checkbox" id="test9" />
                                                                        <label for="test9">Actualización de enfermedad<br>
                                                                            cardiovascular, Coordinador<br>
                                                                            Dr. Daniel Rivas B.</label>
                                                                    </p>
                                                                </div>
                                                                <div class="input-field col s6">
                                                                    <p><br><br>
                                                                        <input type="checkbox" id="test10" />
                                                                        <label for="test10">Gineco-Obstetricia, Coordinador<br>
                                                                            Dr. Juan J. Lugo</label>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                                </div>

                                                            </div>
                                                        </form>
                                                    </div>

        </main>
            <footer class="page-footer #bdbdbd grey lighten-1">
                      <div class="footer-copyright #bdbdbd grey lighten-1">
                          <div class="container">
                              <div class="col l1">
                                  <h3 class="white-text">Informacion || PBX: 2255 - 6900 || www.metropolitano.com.ni</h3>
                              </div>
                          </div>

                            <div class="container">
                                <h6 class="left">
                                     Dirección Médica  Ext. 8-4109<br>
                                    mgrant@metropolitano.comni
                                </h6>
                                <h6 class="right">
                                    Mercadeo Ext. 8-6094 Cel: 8802 - 9868<br>
                                    jhernandez@mtreopolitano.com.ni
                                </h6>
                            </div>
                      </div>
            </footer>
        </body>
</html>
<?php
	}
}