$(document).ready(function() {
   getProductos();
   getClientes();
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

function getClientes() {
    clrearCmb("#txtcliente");
    $.ajax({
        type: "POST",
        url: "getClientes",
        dataType: 'json'
    }).done(function( data ) {
        for (var i in data){
            $('#txtcliente').append(new Option(data[i].nombre, data[i].id, false, false));
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
        data: {data: data}
    }).done(function(data) {
        if (data){
            alert("Venta guardada correctamente.");
        }else{
            alert("Error al guardar la venta.");
        }
    });
}

function saveCliente() {
    let nombre = $("#txtNombre").val();
    $.ajax({
        type: "POST",
        url: "saveCliente",
        dataType: 'json',
        data: {nombre: nombre}
    }).done(function(data) {
        if (data){
            alert("Cliente registrado correctamente.");
            getClientes();
        }else{
            alert("Error al guardar el cliente.");
        }
    });
}

function clrearCmb(id) {
    $(id).html("");
    $(id).append(new Option('Seleccione', null, false, false));
}