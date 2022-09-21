<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Wotle | Dashboard',
        ];
        return view('admin/dashboard', $data);
    }
}
