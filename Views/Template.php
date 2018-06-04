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
        <!------------------------------------------------------------------------------->
        <html lang="en">
        <!------------------------------------------------------------------------------->
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