<?php namespace App\Controllers;
 
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\ProductModel;
 
class Products extends ResourceController
{
    public function about()
    {
        echo "about page";
    }
    }
