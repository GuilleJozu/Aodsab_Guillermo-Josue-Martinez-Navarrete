<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Aplicación de noticias'
        ];
        
        return view('welcome_message', $data);
    }
}
