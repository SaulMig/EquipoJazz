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
            <div class="row">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s6">
                            <input placeholder="" id="primer apellido" type="text" class="validate">
                            <label for="first_name">Primer apellido</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="last_name" type="text" class="validate">
                            <label for="last_name">Telefono</label>
                        </div>
                    </div>

                    <div class="row">
                        <form class="col s12">
                            <div class="row">
                                <div class="input-field col s6">
                                    <input placeholder="" id="segundo apellido" type="text" class="validate">
                                    <label for="first_name">Segundo apellido</label>
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
                                            <input placeholder="" id="nombre" type="text" class="validate">
                                            <label for="">Segundo nombre</label>
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
                                                    <input placeholder="" id="No de Celula" type="text" class="validate">
                                                    <label for="">No de Celula</label>
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
                                                            <input placeholder="" id="" type="text" class="validate">
                                                            <label for="">Direccion</label>
                                                        </div>
                                                        <div class="input-field col s6">
                                                            <input id="codigo minsa" type="text" class="validate">
                                                            <label for="codigo">Codigo minsa</label>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>

                                                    <div class="row">
                                                        <form class="col s12">
                                                            <div class="row">
                                                                <div class="input-field col s6">
                                                                    <input placeholder="" id="" type="text" class="validate">
                                                                    <label for="">Ciudad</label>
                                                                </div>
                                                                <div class="input-field col s6">
                                                                    <input id="año de estudio" type="text" class="validate">
                                                                    <label for="codigo">Año de estudio</label>
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