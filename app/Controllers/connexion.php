<?php

namespace App\Controllers;

class connexion extends BaseController
{
    public function index(): string
    {
        return view('navbar').view('connexion').view('footer');
    }
}