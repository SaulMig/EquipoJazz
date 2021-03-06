
<h4>| Formulario de inscripción |</h4>
<form class="col s12" id="fomulario">
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
    <div class="row">
        <div class="input-field col s6">
            <input id="ciudad" type="text" class="validate">
            <label for="ciudad">Ciudad</label>
        </div>
        <div class="input-field col s6">
            <input id="año de estudio" type="text" class="validate">
            <label for="codigo">Año de estudio</label>
        </div>
    </div>
    <div class="row">
        
        <div class=" col s4">
            <p>
                <input type="checkbox" id="test2" />
                <label for="test2">Institución</label>
            </p>
        </div>
        <div class=" col s4">
            <p>
                <input type="checkbox" id="test3" />
                <label for="test3">Estudiantes</label>
            </p>
        </div>
        <div class=" col s12">
            <label>|Pre-congreso| 24 de Septiembre |</label>
        </div>
        <br>
        <div class=" col s6">
            <p>
                <input type="checkbox" id="test4" />
                <label for="test4">Curso de Insulinoterapía</label>
            </p>
        </div>
        <div class=" col s6">
            <p>
                <input type="checkbox" id="test5" />
                <label for="test5">Curso de Abordaje de Vía Aérea Difícil</label>
            </p>
        </div>
    </div>
    <br>
    <div class="input-field col s12">
        <label>|Congreso Médico| 25 y 26 de Septiembre |</label>
    </div>
    <br>
    <br>
    <div class=" col s6">
        <br>
        <p>
            <input type="checkbox" id="test6" />
            <label for="test6">Medicina Interna-Medicina del <br>paciente crítico, Coordinador<br>Dr. Guillermo Porras</label>
        </p>
    </div>
    <div class=" col s6">
        <p>
            <br>
            <input type="checkbox" id="test7" />
            <label for="test7">Pediatría, Coordinador<br>Dr. Fulgencio Báez</label>
        </p>
    </div>
    <br>
    <div class="col s6">
        <br>
        <p>
            <br>
            <input type="checkbox" id="test8" />
            <label for="test8">Cirugía, Coordinador<br>Dr. Milron Mairena</label>
        </p>
    </div>
    <div class=" col s6">
        <p>
            <input type="checkbox" id="test9" />
            <label for="test9">Actualización de enfermedad<br>cardiovascular, Coordinador<br>Dr. Daniel Rivas B.</label>
        </p>
    </div>
    <div class=" col s6">
        <p>
            <input type="checkbox" id="test10" />
            <label for="test10">Gineco-Obstetricia, Coordinador<br>Dr. Juan J. Lugo</label>
        </p>
    </div>
</form>
 <div class="card-panel">
     <h4 align="center">Habitaciones Registradas
         <span class="right">
            <a href="#modal_registro" class="btn green white-text modal-trigger" id="add_habitacion"><i class="material-icons">add</i></a>
        </span>
     </h4>
     <div class="divider"></div>
     <div class="row">
         <div class="input-field col s4 offset-s8">
             <i class="mdi-action-verified-user prefix icon-search"></i>
             <input id="buscar" placeholder="Buscar" type="text">
         </div>
     </div>
     <table class="responsive-table" id="tabla_content">
            <thead><tr>
                <th>Número de Habitación</th>
                <th>Descripción</th>
                <th>Tipo Habitación</th>
                <th>Estado</th>
                <th></th>
                <th></th>
            </tr></thead>
         <tbody id="body_table">
            <?php
                require_once ("tabla.php");
            ?>
            </tbody>
        </table>
        <div class="center">
            <a href="<?php echo URL?>habitaciones/print_pdf" target="_blank" id="imprimir_pdf" class="btn blue accent-3 white-text tooltipped" data-position="bottom" data-delay="50" data-tooltip="Imprimir"><i class="material-icons">picture_as_pdf</i></a>
            <a href="#!"  id="graficar_habitaciones" class="btn blue accent-3 white-text tooltipped" data-position="bottom" data-delay="50" data-tooltip="Graficar"><i class="material-icons">equalizer</i></a>
        </div>
    </div>

<div id="modal_registro_congreso" class="modal center-align ">
    <div class="modal-content">
        <div class="card-panel teal #00b8d4"><h4 align="center">Registro Nuevo Congreso</h4></div>
        <div class="row">
            <form class="col s4 ">
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



