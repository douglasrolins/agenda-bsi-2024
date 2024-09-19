<?php

include_once 'app/model/Empresa.php';
include_once 'app/view/EmpresaView.php';

class EmpresaController {

    public function handleRequest($action,$params){


        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($action) ) {

            switch ($action) {

                case 'create':
                    
                    break;

                case 'update':

                    break;

            }


        }

        else {
            switch ($action) {

                // abrir formulário de cadastro
                case 'create' :
                    $view = new EmpresaView();
                    $view->showFormEmpresa();
                    break;
                
                // abrir formulário de edição da empresa
                case 'update' :

                    break;

                // Listar as empresas
                case 'list':
                    
                    $empresas = Empresa::getAll();
                    $view = new EmpresaView();
                    $view->listEmpresas($empresas);       
            }


        }

    }
}




?>