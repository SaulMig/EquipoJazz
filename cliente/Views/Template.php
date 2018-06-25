<?php
/**
 * Created by PhpStorm.
 * User: JAZMIN
 * Date: 09/06/2018
 * Time: 12:40 PM
 */

namespace Views;


new Template();
class Template
{
    public static function header()
    {
        /* echo "header y nav de mi proyecto";*/
        ?>
                <!DOCTYPE html>
        <html lang="en">
        <head>
          <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
          <meta name="viewport" content="width=device-width, initial-scale=1"/>
          <title>Parallax Template - Materialize</title>

          <!-- CSS  -->
            <link rel="stylesheet" href="<?php echo URL?>Public/fonts/material-icons.css" />
            <link rel="stylesheet" href="<?php echo URL?>/Public/css/normalize.css" />
            <link rel="stylesheet" href="<?php echo URL?>/Public/css/materialize.min.css" />
            <link rel="stylesheet" href="<?php echo URL?>/Public/css/style.css" />
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
            <script type="text/javascript" src="<?php echo URL?>/Public/js/jquery.js"></script>
            <script type="text/javascript" src="<?php echo URL?>/Public/js/materialize.js"></script>
        </head>
        <body>
        <nav class="white" role="navigation">
            <div class="nav-wrapper container">
                <ul class="right hide-on-med-and-down">
                    <li><a href="#">Reservaciones</a></li>
                    <li><a href="#">Mi Reserva</a></li>
                    <li><a href="#">Login</a></li>

                </ul>
            </div>
        </nav>

        <div id="index-banner" class="parallax-container">
            <div class="section no-pad-bot">
                <div class="container">
                    <br><br>
                    <h1 class="header center teal-text text-lighten-2">Hotel Casa Blanca</h1>
                    <br><br>
                </div>
            </div>
            <div >
                <img class="responsive-img" src="<?php echo URL?>/Public/img/home.jpg">
            </div>
        </div>


        <div class="container">
            <div class="section">

                <!--   Icon Section   -->
                <div class="row">
                    <div class="col s12 m4">
                        <div class="icon-block">

                            <h2 class="center brown-text "> <a href="#modal_eliminar" class="modal-trigger " ><i class="material-icons large ">local_play</i></a></h2>
                            <h5 class="center">Servicios</h5>

                            <p class="light" align="justify"> El hotel casa blanca ofrece distintos servicios, para que durante su estancia
                                usted disfrute de unas excelentes vacaciones y sume una experiencia mas en su vida. </p>
                        </div>
                    </div>

                    <div class="col s12 m4">
                        <div class="icon-block">
                            <h2 class="center brown-text "> <a href="#modal_eliminar" class="modal-trigger " ><i class="material-icons large ">group</i></a></h2>

                            <h5 class="center">Experiencias de Clientes</h5>

                            <p class="light" align="justify">Ven y vive una experiencia inolvidable en el Hotel Casa Blanca, comparte tus experiencias con otros clientes.</p>
                        </div>
                    </div>

                    <div class="col s12 m4">
                        <div class="icon-block">
                            <h2 class="center brown-text "> <a href="#modal_eliminar" class="modal-trigger " ><i class="material-icons large ">location_on</i></a></h2>
                            <h5 class="center">Ubicación</h5>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3767.0109154575453!2d-100.13455768545552!3d19.238356051849188!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85c565c9251ce493%3A0xb834609172498285!2sTecnol%C3%B3gico+De+Estudios+Superiores+De+Valle+De+Bravo!5e0!3m2!1ses-419!2smx!4v1528405839822"
                                    width="300" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <main class="container">
        <?php
    }
    public static function footer()
    {
        /*echo "footer de mi proyecto";*/
        ?>
        </main>
        <footer class="page-footer teal">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">Ubicación</h5>
                        <p class="grey-text text-lighten-4">Carretera Federal Valle de Bravo Km 30,
                            Ejido San Antonio Laguna, 51200 Valle de Bravo, Méx.</p>

                    </div>
                    <div class="col l3 s12">
                        <h5 class="white-text">Redes Sociales</h5>
                        <ul>
                            <i class="material-icons">group</i>
                            <i class="material-icons">group</i>
                            <i class="material-icons">group</i>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                </div>
            </div>
        </footer>

        <div id="modal_eliminar" class="modal center-align ">
            <div class="modal-content">
                <div class="card-panel teal #00b8d4"><h4 class="left"><a class=" text-black"></a></h4><h4 align="center">Tipo Habitación</h4></div>


            </div>
        </div>

        <!--  Scripts-->
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="js/materialize.js"></script>
        <script src="js/init.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $('.modal').modal();
            });
        </script>
        </body>
        </html>
        <?php
    }

}