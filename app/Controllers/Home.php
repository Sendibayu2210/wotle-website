<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Wotle',
        ];
        return view('homepage/homepage', $data);
    }
}
