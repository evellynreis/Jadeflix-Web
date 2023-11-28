<?php

namespace Jadeflix\Site\Controller;

use Jadeflix\Site\Infra\Conexao;

class LoginController
{

    public function index()
    {
        $conn = new Conexao();
        $redirect = $conn->conectar();
        include_once __DIR__ . "/../Views/login/login.php";
    }

}