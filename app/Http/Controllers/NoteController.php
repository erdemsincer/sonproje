<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index()
    {
       return view('front.notes.index');
    }
    public function createPage(){

        return view ('front.notes.create');
    }
    public function addNote(Request $request){
        dd($request->baslik);
    }

}
