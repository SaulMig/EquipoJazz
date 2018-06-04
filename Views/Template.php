<?php
namespace Views;

use function Sodium\crypto_box_keypair_from_secretkey_and_publickey;

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
            <link rel="stylesheet" href="<?php echo URL?>/Public/style.css">
            <script type="text/javascript" src="<?php echo URL?>/Public/js/plugins/jquery-1.11.2.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

            <title>Inicio</title>
        <div id="modal_registro_congreso" class="modal center-align ">
            <div class="modal-content">
                <div class="card-panel teal #00b8d4"><h4 align="center">Registro Nuevo Congreso</h4></div>
                <div class="row">
                    <form class="col s12 ">
                        <div class="row">

                            <div class="input-field col s8">
                                <i class="mdi-action-verified-user prefix icon-pencil"></i>
                                <input id="id_congreso" type="text" class="validate">
                                <label for="descripcion_congreso"  data-error="incorrecto" data-success="Correcto">Nombre del Congreso</label>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <div id="modal_registro_medico" class="modal center-align ">
            <div class="modal-content">
                <div class="card-panel teal #00b8d4"><h4 align="center">Registro Nuevo Congreso Medico</h4></div>
                <div class="row">
                    <form class="col s12 ">
                        <div class="row">

                            <div class="input-field col s8">
                                <i class="mdi-action-verified-user prefix icon-pencil"></i>
                                <input id="id_medico" type="text" class="validate">
                                <label for="descripcion_medico"  data-error="incorrecto" data-success="Correcto">Nombre del Congreso Medico</label>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        </head>
        
        <nav>
            <div class="nav-wrapper">
                <img responsive-img src="<?php echo URL?>/logo.png"width="15%"  align="left">
                <img responsive-img src="<?php echo URL?>/logoMetropolitano.png"width="15%" align="right">
                <a href="#" class="brand-logo" src="logo.png">Logo</a>



            </div>
            <div>

            </div>
        </nav>

        <main class="contenedor">
        <div class="row">
            <div class="col offset-l3 l9 m12 s12">
        <?php
    }
    public static function footer()
    {
        ?>
        </main>
            <footer>
                <div class="footer-copyright">
                    <div class="container">

                    </div>
                </div>
            </footer>
        </body>
</html>
<?php
	}
}