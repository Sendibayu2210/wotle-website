<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Wotle | Dashboard',
            'link' => 'dashboard',
        ];
        return view('admin/dashboard', $data);
    }
    public function payment()
    {
        $data = [
            'title' => 'Pembayaran',
            'link' => 'payment',
        ];
        return view('admin/payment', $data);
    }
    public function favorite()
    {
        $data = [
            'title' => 'Favorite',
            'link' => 'favorite',
            'favorite' => [
                [
                    'tujuan' => 'Kuningan - Bandung',
                    'gambar' => 'bandung.jpg'
                ],
                [
                    'tujuan' => 'Kuningan - Jakarta',
                    'gambar' => 'jakarta.jpg'
                ],
                [
                    'tujuan' => 'Kuningan - Cikarang',
                    'gambar' => 'cikarang.jpg'
                ],
            ],
        ];
        return view('admin/favorite', $data);
    }
    public function tiket()
    {
        $data = [
            'title' => 'tiket',
            'link' => 'tiket',
            'tiket' => [
                [
                    'tujuan' => 'Kuningan - Bandung',
                    'gambar' => 'bandung.jpg'
                ],
                [
                    'tujuan' => 'Kuningan - Jakarta',
                    'gambar' => 'jakarta.jpg'
                ],
                [
                    'tujuan' => 'Kuningan - Cikarang',
                    'gambar' => 'cikarang.jpg'
                ],
            ],
        ];
        return view('admin/ticket', $data);
    }
}
