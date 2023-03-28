<?php

namespace App\Http\Controllers;

use App\Models\menu;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class HomeController extends Controller
{
    public function index() {

        $menus = menu::all();

        return view('home', [
            'menus' => $menus
        ]);
    }
}
