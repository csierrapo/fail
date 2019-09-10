<?php
namespace App\Controllers;
class VentaCtrl extends BaseController{

    function __construct() {
        $this->load->model("/venta");
    }

    public function saveVenta(){
        $this->logger->info('saveVenta - HAAAAA!!!');

        $cliente = $this->request->getVar('cliente');
        $precio = $this->request->getVar('precio');
        $comprador = $this->request->getVar('comprador');
        $cantidad = $this->request->getVar('cantidad');


        //$this->venta->saveVenta();

    }
}