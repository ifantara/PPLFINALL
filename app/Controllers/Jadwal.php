<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Jadwal extends ResourceController
{
    protected $modelName = "App\Models\Jadwal";
    protected $format = "json";
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        return $this->respond($this->model->findAll());
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $data = [
            'nrp' =>$this->request->getPost('nrp'),
            'namaMahasiswa' => $this->request->getPost('namaMahasiswa'),
            'nomerTelepon' => $this->request->getPost('nomerTelepon'),
            'dosenPembimbing' => $this->request->getPost('dosenPembimbing'),
            'dosenPenguji' => $this->request->getPost('dosenPenguji'),
            'tanggal' => $this->request->getPost('tanggal'),
        ];
        //$data = json_decode(file_get_contents("php://input"), true);
        $this->model->insert($data);
        $response = [
            'status' => 201,
            'error' => null,
            'messages' => ['Created successfully']
        ];
        return $this->respondCreated($response);
    }

}
