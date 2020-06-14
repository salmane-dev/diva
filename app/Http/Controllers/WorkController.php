<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class WorkController extends Controller
{
   

    public function index(){
      
        $works = DB::table('Works')->latest()->get();

        return view('work.index', compact('works'));
    } 
    
    public function store(){
       
        $data = request()->validate([
            'name' => 'required|min:3|max:55'
        ]);

      $Work = new \App\Work();
      $Work->name = request('name');
      $Work->type = request('name');
      $Work->save();

      return redirect()->back();
    } 
    
}
