<?php

//namespace App\Librerias;

class Middleware
{
    public static function auth()
    {
        if (!isset($_SESSION['user_id'])) {
            // header('Location: /auth/login');
            redireccionar('auth/index');
            exit();
        }
    }
}
