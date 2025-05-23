<?php

namespace App\Controllers;

class equipe1 extends BaseController
{
    public function index(): string
    {
        return view('navbar').view('equipe1').view('footer');
    }
}
