<?php
class Pages extends Controller
{

    protected $usuarioModelo;

    public function __construct()
    {
        $this->usuarioModelo = $this->GetModel('Usuario');
        Middleware::auth();
    }

    public function Index()
    {

        //Obtener los usuarios

        $usuarios = $this->usuarioModelo->obtenerUsuarios();

        $data = ['usuarios' => $usuarios];

        $this->GetView('/pages/inicio', $data);
    }
}
