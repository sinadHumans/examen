<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Producto;

use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\Response;

class Productos extends Controller
    {
        /* funcion para ingresar a la seccion */
        public function listar(): string
        {
            $productos = new Producto();
            $datos['lista'] = $productos->orderBy('id','ASC')->findAll();
            $datos['cabecera'] = view('template/header');
            $datos['footer'] = view('template/footer');
            $datos['aviso'] = "0";
            return view('productos/index',$datos);
        }

        /* funcion para crear */
        public function crear(){
            $datos['cabecera'] = view('template/header');
            $datos['footer'] = view('template/footer');
            return view('productos/crear',$datos);
        }

        /* funcion para guardar la informacion */
        public function guardar( ){
            
         
            $productos = new Producto();
            
            
            $datos=[
                'nombre' => $this->request->getVar('nombre'),
                'descripcion' => $this->request->getVar('descripcion'),
                'precio' => $this->request->getVar('precio'),
                'cantidad' => $this->request->getVar('cantidad'),
            ];
            $productos->insert($datos);
            
            $datos['lista'] = $productos->orderBy('id','ASC')->findAll();
            $datos['cabecera'] = view('template/header');
            $datos['footer'] = view('template/footer');
            $datos['aviso'] = "1";

            return view('productos/index',$datos);
        }

        /* funcion para editar */
        public function editar($id = null){
            $productos = new Producto();
            
            $datos['valor'] = $productos->where('id',$id)->first();
            $datos['cabecera'] = view('template/header');
            $datos['footer'] = view('template/footer');
            $datos['aviso'] = "0";
            return view('productos/editar',$datos);
        }

        /* funcion acualizar */
        public function actualizar(){
            $productos = new Producto();
            
            $request = \Config\Services::request();
            $datos=[
                'nombre' =>  $this->request->getVar('nombre'),
                'descripcion' => $this->request->getVar('descripcion'),
                'precio' => $this->request->getVar('precio'),
                'cantidad' => $this->request->getVar('cantidad'),
            ];
            $id = $this->request->getVar('id');
            $productos->update($id,$datos);
            
            $datos['lista'] = $productos->orderBy('id','ASC')->findAll();
            $datos['cabecera'] = view('template/header');
            $datos['footer'] = view('template/footer');
            $datos['aviso'] = "3";

            return view('productos/index',$datos);
        }

        /* funcion para eliminar */
        public function eliminar($id = null){
            $productos = new Producto();
            
            $productos->where('id',$id)->delete($id);

            $datos['lista'] = $productos->orderBy('id','ASC')->findAll();
            $datos['cabecera'] = view('template/header');
            $datos['footer'] = view('template/footer');
            $datos['aviso'] = "2";
            return view('productos/index',$datos);

        }

    }
    