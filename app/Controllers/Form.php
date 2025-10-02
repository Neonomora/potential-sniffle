<?php

namespace App\Controllers;

class Form extends BaseController
{
    public function index()
    {
        $output  = view('form/header');
        $output .= view('form/main');
        $output .= view('form/form');
        $output .= view('form/footer');

        echo $output;
    }
}
