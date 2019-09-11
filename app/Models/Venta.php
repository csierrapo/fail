<?php
namespace App\Models;
use CodeIgniter\Database\Query;
use CodeIgniter\Model;
class Venta extends Model{

    public function saveVenta($data){
        $db = \Config\Database::connect();
        $db->table('venta')->insert($data);
    }
    public function saveVentaProducto($data){
        $db = \Config\Database::connect();
        $db->table('venta_producto')->insert($data);
    }

    public function getProductos(){
        $db = \Config\Database::connect();
        $query = $db->query('SELECT * FROM producto');
        $results = $query->getResult();
        return $results;
    }

    public function getLastIdVenta(){
        $db = \Config\Database::connect();
        $query = $db->query('SELECT id FROM venta order by id desc');
        $result = $query->getRow();
        return $result;
    }
}