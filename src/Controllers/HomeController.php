<?php 

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class HomeController extends BaseController
{
    public function index(Request $request, Response $response)
    {
        // return $this->view->render($response, 'form/form-akhwat/form-akhwat-empat.twig'); 
        return $this->view->render($response, 'index.html'); 
    }
}




 ?>