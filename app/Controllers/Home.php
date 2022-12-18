<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index()
    {
        return view('jadwal');
    }
    public function buatjadwal()
    {
        return view('buatjadwal');
    }
}
