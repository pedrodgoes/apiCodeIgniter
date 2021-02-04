<?php namespace App\Controllers;
 
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\HTTP\Response;
use App\Models\NoticiasModel;


class Noticias extends ResourceController {
	use ResponseTrait;

    public function options(): Response
    {
        return $this->response->setHeader('Access-Control-Allow-Origin', '*') //for allow any domain, insecure
            ->setHeader('Access-Control-Allow-Headers', '*') //for allow any headers, insecure
            ->setHeader('Access-Control-Allow-Methods', 'GET, POST, OPTIONS, PUT, DELETE') //method allowed
            ->setStatusCode(200); //status code
    }

	 public function index(){
        $model = new NoticiasModel();
        $data = $model->findColumn('titulo');
        return $this->respond($data);
    }

     public function list(){
        $model = new NoticiasModel();
        $data = $model->findColumn('descricao');
        return $this->respond($data);
    }
}
?>