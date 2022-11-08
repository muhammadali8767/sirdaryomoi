<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){

        return view('contact',[
            'categories' => $this->catigories,
            'menu' => $this->menu,
            'sliders' => $this->sliders,
            'footer' =>$this->footer


        ]);
    }
}
