<?php

class Auth extends Controller
{
    protected $usuarioModelo;

    public function __construct()
    {
        //
        $this->usuarioModelo = $this->GetModel('Usuario');
    }

    public function index()
    {
        $this->GetView('auth/login');
    }

    public function autenticar()
    {
        $usuario      = $_POST['usuario'];
        $contrasena      = $_POST['contrasena'];

        $usuario_get = $this->usuarioModelo->obtenerUsuarioParaLogin($usuario);

        // Verificar si el usuario existe y la contraseña es válida
        if ($usuario_get && password_verify($contrasena, $usuario_get->contrasena)) {
            // Si es válido, iniciar sesión

            $_SESSION['user_id'] = $usuario_get->id_usuario;
            $_SESSION['nombre_completo'] = $usuario_get->nombre_completo;

            return $this->GetView('inicio/index');
        } else {
            // Si las credenciales son incorrectas, mostrar un error
            $data = ['mensaje_error_login' => 'Credenciales Incorrectas'];
            return $this->GetView('auth/login', $data);
        }
    }

    public function cerrarsesion()
    {
        session_destroy();
        redireccionar('auth/login');
    }
}
