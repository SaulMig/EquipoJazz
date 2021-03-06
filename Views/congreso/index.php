<div id="modal_registro" class="modal">
    <div class="modal-content">
        <div class="card-panel">
            <form action="" id="save_congreso" enctype="multipart/form-data" autocomplete="off">
                <h4 align="center">Agregar un nuevo precongreso</h4>
                <div class="divider"></div>
                <code class=" language-markup"><!--********************************--></code>
                <div class="row">
                    <div class="row">
                        <div class="input-field input-field col s5">
                            <input id="descripcion_congreso" type="text"  name="descripcion_congreso">
                            <label for="descripcion_congreso"  >Descripcion del precongreso</label>
                        </div>
                    </div>

                    <div class="modal-fixed-footer">
                        <div class="input-field col s12">
                            <a href="#!" id="save_congreso_ok" class="btn ">Registrar</a>
                        </div>
                        <div class="input-field col s12">
                            <a href="#!" id="update_congreso_ok" class="btn modal-close " data-id="">Actualizar</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="card-panel">
    <h4 align="center">Pre-congresos<span class="right"><a href="#modal_registro" class="btn green white-text modal-trigger" id="add_congreso"><i class="material-icons">add</i></a></span></h4>
    <div class="divider"></div>
    <div class="row">
        <div class="input-field col s4 offset-s8">
            <i class="mdi-action-verified-user prefix icon-search"></i>
            <input id="buscar" placeholder="Buscar" type="text">
        </div>
    </div>
    <table class="responsive-table" id="tabla_content">
        <thead>
            <tr>
                <th>Id</th>
                <th>Precongreso</th>
            </tr>
        </thead>
        <tbody id="body_table">
            <?php
                require_once ("tabla.php");
            ?>
        </tbody>
    </table>
    <div class="center">
        <a href="<?php echo URL?>congreso/print_pdf" target="_blank" id="imprimir_pdf" class="btn blue accent-3 white-text tooltipped" data-position="bottom" data-delay="50" data-tooltip="Imprimir"><i class="material-icons">picture_as_pdf</i></a>
    </div>
</div>
<div id="modal_eliminar" class="modal">
    <div class="modal-content">
        <h5>¿Desea Eliminar el Registro?</h5>
        <hr />
    </div>
    <div class="modal-footer">
        <a href="#!" id="eliminar_ok" class="modal-close green white-text waves-effect waves-green btn-flat">Aceptar</a>
        <a href="#!" class="modal-close red white-text waves-effect waves-green btn-flat">Cancelar</a>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('select').material_select();
        $(".modal").modal();
        $("#add_congreso").click(function(){
            $("#update_congreso_ok").hide();
            $("#save_congreso_ok").show();
        });

        $("#save_congreso_ok").click(function() {
            $("#save_congreso").submit();
        });
        $("#body_table").on("click","a.btn_eliminar",function(){
            var id=$(this).data("id");
            var url='<?php echo URL?>congreso/eliminar/'+id;
            $("#eliminar_ok").attr("url",url);
            $("#modal_eliminar").modal("open");
        });

        $("#eliminar_ok").click(function(){
            $.get($(this).attr("url"),function(res){

                $("#body_table").empty().append(res);
                Materialize.toast('Se ha eliminado correctamente', 2500);
            });
        });
        $("#body_table").on("click","a.btn_modificar",function(){
            $("#update_congreso_ok").show();
            $("#save_congreso_ok").hide();
            var id=$(this).data("id");
            $.get("<?php echo URL?>congreso/modificar/"+id,function(res){
                var datos=JSON.parse(res);
                $("#update_congreso_ok").data("id",datos["id_congreso"]);
                $("#descripcion_congreso").val(datos["descripcion_congreso"]);
                Materialize.updateTextFields();
                $('select').material_select();
                $("#modal_registro").modal("open");
            });
        });

        $("#update_congreso_ok").click(function(){
            var id=$(this).data("id");
            $.post("<?php echo URL?>congreso/actualizar/"+id,$("#save_congreso").serialize(),function(res){
                $('#save_congreso').find('input, select, textarea').val('');
                $("#body_table").empty().append(res);
                Materialize.updateTextFields();
                Materialize.toast('Se ha modificado correctamente', 2500);
            })
        });


        $("#save_congreso").validate({

            rules:{
                descripcion_tarea:{
                    required:true,
                },
            },
            messages:{
                descripcion_tarea:{
                    required:"Campo obligatorio",

                },
            },
            errorPlacement: function(error, element) {
                $(element)
                    .closest("form")
                    .find("label[for='" + element.attr("id") + "']")
                    .attr('data-error', error.text());
            },
            submitHandler:function(form){
                $.post("<?php echo URL?>congreso/crear",$("#save_congreso").serialize(),function(res){
                    //console.log($("#save_congreso").serialize());
                    $("#body_table").empty().append(res);
                    $('#save_congreso').find('input, select, textarea').val('');
                    Materialize.updateTextFields();
                    $("#modal_registro").modal("close");
                })
            }
        });
        $("#buscar").keyup(function() {
            $.uiTableFilter($("#tabla_content"), this.value);
        });

    });
</script>


