<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\Models\menus;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public $menu;
    public $sliders;
    public $news_4;
    public $tadbir_4;
    public $footer;

    public function __construct(){
        $this->catigories = menus::with('children')
                                ->where('menu_type','=',0)
                                ->get();
        $this->sliders = DB::select("SELECT * from slider");

        $this->news_4 = DB::select("SELECT * FROM news where type_id = 6 ORDER BY created_at DESC LIMIT 4 ");
        $this->tadbir_4 = DB::select("SELECT * FROM news where type_id = 8 ORDER BY id  DESC LIMIT 4 ");

        $this->footer = DB::select("SELECT * from menu where menu_type = 1 or menu_type = 2");
        $this->menu = menus::all();

    }

}
