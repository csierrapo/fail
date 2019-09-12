<?php
namespace App\Controllers;
use App\Models\Venta;
use CodeIgniter\Controller;
use mysql_xdevapi\Exception;

class VentaCtrl extends Controller{

    public function saveVenta(){
        $result = "false";
        try{
            $data = $this->request->getVar('data');
            $cliente = $data['cliente'];
            $precio = $data['precio'];
            $producto = $data['producto'];
            $cantidad = $data['cantidad'];

            $venta = array("fecha"=>date('Y-m-d H:i:s'), "id_comprador"=>1);
            Venta::saveVenta($venta);
            $lastId = Venta::getLastIdVenta();
            $venta_producto = array("cantidad"=>$cantidad, "id_producto"=>$producto, "id_venta"=>$lastId->id);
            Venta::saveVentaProducto($venta_producto);

            $result = "true";
        }catch (\Exception $e){
            $result = "false";
        }
        return $result;
    }

    public function getProducto(){
        $data = Venta::getProductos();
        return json_encode($data);
    }

    public function saveCliente(){
        $result = "false";
        try{
            $nombre = $this->request->getVar('nombre');
            $data = array("nombre" => $nombre);
            Venta::saveCliente($data);
            $result = "true";
        }catch (\Exception $e){
            $result = "false";
        }
        return $result;
    }
    public function getClientes(){
        $data = Venta::getClientes();
        return json_encode($data);
    }
}