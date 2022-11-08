<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menus extends Model
{
    use HasFactory;
    protected $table = 'menu';

    public function parent()
    {
        return $this->belongsTo(menus::class, 'menu_type');
    }

    public function children()
    {
        return $this->hasMany(menus::class, 'menu_type');
    }
}
