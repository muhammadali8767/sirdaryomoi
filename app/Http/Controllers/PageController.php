<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\menus;
use Illuminate\Support\Facades\DB;
class PageController extends Controller
{
    public function index(){
        return view('index',[
            'categories' => $this->catigories,
            'menu' => $this->menu,
            'sliders' => $this->sliders,
            'new_4' => $this->news_4,
            'tadbir_4' => $this->tadbir_4,
            'footer' =>$this->footer
        ]);
    }
    public function show($id){

$page = DB::select("SELECT * from pages where menu_id = '$id'");

if($page==null){
     return view('error',[
            'categories' => $this->catigories,
            'menu' => $this->menu,
            'sliders' => $this->sliders,
            'footer' =>$this->footer
        ]);
}
else {
     return view('page',[
            'categories' => $this->catigories,
            'menu' => $this->menu,
            'sliders' => $this->sliders,
            'footer' =>$this->footer,
            'page' => $page
        ]);
}

    }
}
