<?php
class Inicio extends Controller
{
    //protected $usuarioModelo;
    public function __construct()
    {
        //$this->usuarioModelo = $this->GetModel('Usuario');
        Middleware::auth();
    }

    public function index()
    {
        $this->GetView('/inicio/index');
    }
}
