$(document).ready(function() {
   getProductos();
});

function getProductos() {
    $.ajax({
        type: "POST",
        url: "getProducto",
        dataType: 'json'
    }).done(function( data ) {
        for (var i in data){
            $('#cmbProducto').append(new Option(data[i].nombre + ' - '+ data[i].stock, data[i].id, false, false));
        }
    });
}
function saveVenta() {
    let data = {
        cliente: $("#txtcliente").val(),
        precio: $("#txtPrecio").val(),
        producto: $("#cmbProducto").val(),
        cantidad: $("#txtCantidad").val(),

    };
    $.ajax({
        type: "POST",
        url: "saveVenta",
        dataType: 'json',
        data: { data: data}
    }).done(function(data) {
        if (data = 'true'){
            alert("Venta guardada correctamente.")
        }else{
            alert("Error al guardar la venta.")
        }
    });
}