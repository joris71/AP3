<?php

namespace App\Controllers;

class equipe2 extends BaseController
{
    public function index(): string
    {
        return view('navbar').view('equipe2').view('footer');
    }
}
