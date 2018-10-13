<?php 

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class AuthController extends BaseController
{
    public function getLogin(Request $request, Response $response)
    {
        return $this->view->render($response, 'login.twig'); 
    }

    public function getRegister(Request $request, Response $response)
    {
        return $this->view->render($response, 'pilihgender.twig'); 
    }

    public function formSatu($request, $response, $args)
    {
        $jenkel = $request->getQueryParam('g');

        if ($jenkel == "ikhwan") {
            $_SESSION['g'] = 'ikhwan';
            return $this->view->render($response, 'form/form-ikhwan/form-ikhwan-satu.twig');
        } else {
            $_SESSION['g'] = 'akhwat';
            return $this->view->render($response, 'form/form-akhwat/form-akhwat-satu.twig');
        }
    }

    public function formDua($request, $response)
    {
        $jenkel = $_SESSION['g'];

        if ($jenkel == "ikhwan") {
            return $this->view->render($response, 'form/form-ikhwan/form-ikhwan-dua.twig');
        } else {
            return $this->view->render($response, 'form/form-akhwat/form-akhwat-dua.twig');
        }
    }

    public function formTiga($request, $response)
    {
        $jenkel = $_SESSION['g'];

        if ($jenkel == "ikhwan") {
            return $this->view->render($response, 'form/form-ikhwan/form-ikhwan-tiga.twig');
        } else {
            return $this->view->render($response, 'form/form-akhwat/form-akhwat-tiga.twig');
        }
    }

    public function formEmpat($request, $response)
    {
        $jenkel = $_SESSION['g'];

        if ($jenkel == "ikhwan") {
            return $this->view->render($response, 'form/form-ikhwan/form-ikhwan-empat.twig');
        } else {
            return $this->view->render($response, 'form/form-akhwat/form-akhwat-empat.twig');
        }
    }

    public function formSend($request, $response)
    {
        return $this->view->render($response, 'prosesdata.html');
    }
    

}




 ?>