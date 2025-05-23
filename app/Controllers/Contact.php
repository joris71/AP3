<?php

namespace App\Controllers;

class contact extends BaseController
{
    public function index(): string
    {
        return view('navbar').view('contact').view('footer');
    }
}