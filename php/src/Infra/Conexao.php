<?php

namespace Jadeflix\Site\Infra;

class Conexao
{
    private static $instance;
    public function conectar()
    {
        if (!isset(self::$instance)) {
            /* Tem que colocar a barra (\) antes do PDO para ele saber que é uma
            classe nativa do PHP. */
            self::$instance = new \PDO('mysql:host=localhost;dbname=mysql', 'root', '');
        }

        return self::$instance;
    }
}