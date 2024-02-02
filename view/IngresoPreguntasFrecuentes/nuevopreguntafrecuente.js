var tabla;

function init(){
    $("#pregunta_form").on("submit",function(e){
        guardaryeditar(e);	
    });
}

function guardaryeditar(e){
    e.preventDefault();
	var formData = new FormData($("#pregunta_form")[0]);
    $.ajax({
        url: "../../controller/preguntasfrecuentes.php?op=guardaryeditar",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(datos){    
            $('#pregunta_form')[0].reset();
            $("#modalPreguntaFrecuente").modal('hide');
            $('#preguntas_data').DataTable().ajax.reload();
            swal({
                title: "Correcto",
                text: "Registro Guaradado con exito..!.",
                type: "success",
                confirmButtonClass: "btn-success",
                timer: 900 
            });
        }
    }); 
}

$(document).ready(function(){
    $('#lblsolucion').summernote({
        height: 80,
        lang: "es-ES",
        callbacks: {
            onImageUpload: function(image) {
            
                myimagetreat(image[0]);
            },
            onPaste: function (e) {
            }
        },
        toolbar: [

        ]
    });

    tabla=$('#preguntas_data').dataTable({
        "aProcessing": true,
        "aServerSide": true,
        dom: 'Bfrtip',
        "searching": true,
        lengthChange: false,
        colReorder: true,
        buttons: [		          
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
                ],
        "ajax":{
            url: '../../controller/preguntasfrecuentes.php?op=listaredit',
            type : "post",
            dataType : "json",						
            error: function(e){
                console.log(e.responseText);	
            }
        },
        "bDestroy": true,
        "responsive": true,
        "bInfo":true,
        "iDisplayLength": 5,
        "autoWidth": false,
        "language": {
            "sProcessing":     "Procesando...",
            "sLengthMenu":     "Mostrar _MENU_ registros",
            "sZeroRecords":    "No se encontraron resultados",
            "sEmptyTable":     "Ningún dato disponible en esta tabla",
            "sInfo":           "Mostrando un total de _TOTAL_ registros",
            "sInfoEmpty":      "Mostrando un total de 0 registros",
            "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix":    "",
            "sSearch":         "Buscar:",
            "sUrl":            "",
            "sInfoThousands":  ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst":    "Primero",
                "sLast":     "Último",
                "sNext":     "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
        }     
    }).DataTable(); 
});

function editar(id_pregfrec){
    $('#mdltitulo').html('Editar Registro');

    $.post("../../controller/preguntasfrecuentes.php?op=mostrar", {id_pregfrec : id_pregfrec}, function (data) {
        data = JSON.parse(data);
        $('#id_pregfrec').val(data.id_pregfrec);
        $('#Preg_frecuente').val(data.Preg_frecuente);
        $('#lblsolucion').summernote ('code',data.lblsolucion);
       
       
    }); 

    $('#modalPreguntaFrecuente').modal('show');
}

function eliminar(id_pregfrec){
    swal({
        title: "HelpDesk",
        text: "Esta seguro de desactivar la pregunta?",
        type: "warning",
        showCancelButton: true,
        confirmButtonClass: "btn-success",
        confirmButtonText: "Si",
        cancelButtonText: "No",
        closeOnConfirm: false
    },
    function(isConfirm) {
        if (isConfirm) {
            $.post("../../controller/preguntasfrecuentes.php?op=eliminar", {id_pregfrec : id_pregfrec}, function (data) {

            }); 

            $('#preguntas_data').DataTable().ajax.reload();	

            swal({
                title: "HelpDesk!",
                text: "Registro Desactivado.",
                type: "success",
                confirmButtonClass: "btn-success"
            });
        }
    });
}

$(document).on("click","#btnnuevo", function(){
    $('#mdltitulo').html('Nuevo Registro');
    $('#pregunta_form')[0].reset();
    $('#modalPreguntaFrecuente').modal('show');
});

init();