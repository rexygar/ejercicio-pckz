$(document).ready(function(){
    $('#agendar').on("click", function(){
        var url = $('#url').val();
        var titulo = $('#titulo').val();
        var fecha = $('#fecha').val();
        var inicio = $('#inicio').val();
        var duracion = $('#duracion').val();
        var monto = (duracion / 15)*10;
        var descripcion = "titulo: " + titulo + " fecha: " + fecha + " inicio: " + inicio + " duracion: " + duracion;
        var token = $("meta[name='csrf-token']").attr("content")
        
        $.ajax({
            url:url,
            type: "POST",
            data: {
                _token: token,
                titulo: titulo,
                fecha: fecha,
                inicio: inicio,
                duracion: duracion,
                monto: monto,
                descripcion: descripcion,
            },
            success: function (data) {
                if (data["message"] == "Successful") {
                    document.getElementById('titu').innerHTML = "Titulo: " + titulo;
                    document.getElementById('fec').innerHTML = "Fecha: " + fecha;
                    document.getElementById('hora').innerHTML = "Hora de inicio: " + inicio;
                    document.getElementById('dur').innerHTML = "Duracion: " + duracion + " minutos";
                    document.getElementById('monto').innerHTML = "Monto: $" + monto + " dolares";
                    $('#miModal').on('shown.bs.modal', function () {
                        $('#myInput').trigger('focus')
                    })
                }
            },
            error: function(data){
                console.log(data);
            }
        })
    });
})