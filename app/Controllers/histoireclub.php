<?php

namespace App\Controllers;

class histoireclub extends BaseController
{
    public function index(): string
    {
        return view('navbar').view('histoireduclub').view('footer');
    }
}
