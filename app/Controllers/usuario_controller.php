<?php
namespace App\Controllers;
Use App\Models\usuario_model;
Use CodeIgniter\Controller;

class usuario_controller extends BaseController{

    public function __contruct(){
        helper(['fomr', 'url']); // helper --> biblioteca de codigo disponible 
    }

    public function create(){

        $dato['titulo']='Registro';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('back/usuario/registro');
        echo view('front/footer_view');
    }
    
    public function formValidation(){

        $input = $this->validate([
            'nombre' => 'required|min_length[3]',
            'apellido' => 'required|min_length[3]|max_length[25]', 
            'usuario' => 'required|min_length[3]', 
            'email' => 'required|min_length[4]|max_length[100]|valid_email|is_unique[usuarios.email]', 
            'pass' => 'required|min_length[3]|max_length[10]'
        ],
        
        );
        $formModel = New usuario_model();

        if (!$input){
            $data['titulo']='Registro';
            echo view('front/head_view', $data);
            echo view('front/navbar_view');
            echo view('back/usuario/registro', ['validation' => $this->validator]);
            echo view('front/footer_view');
        } else {
            $formModel->save([
                'nombre' => $this->request->getVar('nombre'), 
                'apellido' => $this->request->getVar('apellido'), 
                'usuario' => $this->request->getVar('usuario'), 
                'email' => $this->request->getVar('email'), 
                'pass' => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT)
                //PASSWORD_HASH() crea un nuevo hash de contraseña usando un algoritmo de hash de unico sentido
            ]);

            //Flashdata funciona solo en restringir la funcion en el controlador en la vista de carga.
                session()->setFlashdata('success', 'Usuario registrado con exito');
                
                return $this->response->redirect('/login');
        }
    }

}