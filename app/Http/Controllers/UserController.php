<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function mainLadsName() {
        return "أبو موسى شخصيا";
    }
    public function soko() {
        return 'soko';
    }

    public function go_to_hoblah($name) {
        return view('hoblah', ['name' => $name]);
    }
}
