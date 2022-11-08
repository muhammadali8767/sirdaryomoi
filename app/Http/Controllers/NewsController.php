<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function index($id){
        $news = DB::select("SELECT * from news where type_id = '$id' ORDER BY created_at DESC");
        return view('news',[
            'news' => $news,
            'categories' => $this->catigories,
            'menu' => $this->menu,
            'sliders' => $this->sliders,
            'footer' =>$this->footer
        ]);
    }
    public function show($id){

    $new = DB::select("SELECT news.*,users.name from news,users where news.id = '$id'");

    return view('news',[
            'id' => $id,
            'new' => $new,
            'categories' => $this->catigories,
            'menu' => $this->menu,
            'sliders' => $this->sliders,
            'footer' =>$this->footer  //  94 515 20 80  Salima xola
        ]);
    }
}
