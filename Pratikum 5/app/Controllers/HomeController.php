<?php

namespace App\Controllers;

class HomeController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Pratikum 5',
        ];
        
        return view('Home', $data);
    }
}

?>
