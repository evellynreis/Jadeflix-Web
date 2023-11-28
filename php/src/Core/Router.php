<?php

namespace Jadeflix\Site\Core;

class Router
{

    private string $sClasse;
    private string $sController;

    public function __construct()
    {
        try {
            $aRouter = $this->validarRequisicao();
            
            if (!empty($aRouter)) {
                $primeiroElemento = array_shift($aRouter);
                if (file_exists('./src/Controller/' . ucfirst($primeiroElemento) . 'Controller.php')) {
                    $this->sController = ucfirst($primeiroElemento . 'Controller');
                    $this->sClasse = 'JadeFlix\\Site\\Controller\\' . $this->sController;
                    $oObjeto = new $this->sClasse;
                    $segundoElemento = (!empty($aRouter)) ? array_shift($aRouter) : 'index';
                    
                    if (method_exists($oObjeto, $segundoElemento)) {
                        $sMetodo = $segundoElemento;
                    } else {
                        $sMetodo = 'index';
                    }
                    
                    $oObjeto->$sMetodo();
                } else {
                    http_response_code(404);
                    die();
                }
            } else {
                // Trate a situação em que 'router' não está presente na URL
                http_response_code(404);
                die();
            }
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }

    protected function validarRequisicao(): array
    {
        $router = filter_input(INPUT_GET, 'router', FILTER_SANITIZE_URL);
        return ($router !== null) ? explode('/', $router) : [];
    }
}