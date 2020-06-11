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
        $services = [
            'service 1',
            'service 2',
            'service 3',
            'service 4'
        ];

        return view('services', compact('services'));
    } 

    public function work(){
        
        return view('work');
    }
    public function contact(){
        
        return view('contact');
    }
    

}
