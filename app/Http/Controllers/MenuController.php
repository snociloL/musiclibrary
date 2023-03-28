<?php

namespace App\Http\Controllers;

use App\Models\menu;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class MenuController extends Controller
{
    public function create() {
        $menus = menu::all();

        return view('create', [
            'menus' => $menus
        ]);
    }

    public function store(Request $request) {
        $formFields = $request->validate([
            'title' => 'required',
            'artist' => 'required',
        ]);
        if($request->hasFile('cover')) {
            $formFields['cover'] = $request->file('cover')->store('covers', 'public');
        }
        
        if($request->hasFile('music')) {
            $formFields['music'] = $request->file('music')->store('musics', 'public');
        }
        Menu::create($formFields);
        
        return redirect('/')->with('message', 'Song added successfully!');
    }
    


}
