<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Home PPDB'
        ];
        return view('pages/home',$data);
    }
}
