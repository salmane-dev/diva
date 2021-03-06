<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class ServiceController extends Controller
{

    public function index(){
       
        // grabing data from mysql 
        $services = DB::table('Services')->latest()->get();

        return view('service.index', compact('services'));
    } 
 
    
    public function store(){
       
        $data = request()->validate([
            'name' => 'required|min:3|max:55'
        ]);

      $service = new \App\Service();
      $service->name = request('name');
      $service->save();

      return redirect()->back();
    } 

}
