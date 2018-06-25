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
        </head>
            <body>
            <nav >
                <div class="nav-wrapper #bdbdbd grey lighten-1 " id="barra">
                    <img responsive-img src="<?php echo URL?>/Public/imagen/logo.png"width="12%"  align="left">
                    <img responsive-img src="<?php echo URL?>/Public/imagen/logoMetropolitano.png"width="13%" align="right">
                    <a href="#" class="brand-logo" src="logo.png"></a>
                </div>
            </nav>

        <main class="container">
        <?php
    }

    public static function footer()
    {
        ?>
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