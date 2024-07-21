<?php
namespace App\Controllers;
Use App\Models\usuario_model;
Use CodeIgniter\Controller;

class login_controller extends BaseController{
    
    public function index(){
        helper(['form', 'url']);

        $data['titulo']='Login';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('back/usuario/login', ['validation' => $this->validator]);
        echo view('front/footer_view');
    }

    //funcion autorizado
    public function auth(){
        $session = session();
        $model = new usuario_model();

        //Aca se trae los datos del fomrulario
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('pass');

        $data = $model->where('email', $email)->first();
        if($data){
            $pass = $data['pass'];
            $ba = $data['baja'];
            if ($ba == 'SI'){
                $session->setFlashdata('msg', 'usuario dado de baja');
                return redirect()->to('/login_controller');
            }
            //Se verifican los datos ingresados para inicial, si cumple la verificacion inicia la sesion.
            $verify_pass = password_verify($password, $pass);
            //password_verify determina los requisitos de configuracion de la contraseña

            if($verify_pass){
                $ses_data = [
                    'id_usuario' => $data['id_usuario'],
                    'nombre' => $data['nombre'],
                    'apellido' => $data['apellido'],
                    'email' => $data['email'],
                    'usuario' =>  $data['usuario'],
                    'perfil_id' => $data['perfil_id'],
                    'logged_in' => TRUE
                ];

                //se cumple la verificacion inicia la sesion
                $session->set($ses_data);

                session()->setFlashdata('msg','Bienvenido! :D');
                return redirect()->to('/panel');
                
            }else{
                //no paso la validacion de la password
                $session->setFlashdata('msg', 'Password incorrecta');
                return redirect()->to('login_controller');
            }
        }else{
            $session->setFlashdata('msg', 'No existe el email o e sincorrecto');
            return redirect()->to('login_controller');
        }
    }

    //Cerrar la sesion
    public function logout(){
        $session = session();
        $session->destroy();
        return redirect()->to('/'); // Corrección aquí: cambia readirect() por redirect()
    }
    
}