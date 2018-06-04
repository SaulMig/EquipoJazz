<?php
namespace Views;

new Template();
class Template
{
	public static function header()
	{
?>
	<!DOCTYPE html>
	<html>
	<head>
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
	<body>
</body>
</html>
<?php
	}
}