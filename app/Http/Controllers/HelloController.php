<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    
    public function index(){
        
        return view('home');
    } 

    public function about(){
        
        return view('about');
    } 

    public function services(){
       
        // grabing data from mysql
        $services = \App\Service::all();

        return view('services', compact('services'));
    } 

    public function work(){
         
        // grabing data from mysql
        $works = \App\Work::all();

        return view('work', compact('works'));
    }
    public function contact(){
        
        return view('contact');
    }
    

}
