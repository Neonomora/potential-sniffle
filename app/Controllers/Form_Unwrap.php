<?php

namespace App\Controllers;

class Form_Unwrap extends BaseController
{
    public function index()
    {
        $output  = view('form-unwrap/header');
        $output .= view('form-unwrap/main');
        $output .= view('form-unwrap/form');
        $output .= view('form-unwrap/footer');

        echo $output;
    }
}
