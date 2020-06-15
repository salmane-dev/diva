<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\work;


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

      $Work = new Work();
      $Work->name = request('name');
      $Work->type = request('type');
      $Work->save();

      return redirect()->back()->with('message', 'Added successfully !');
    } 

    public function show($workid){

        $work = Work::findOrFail($workid);

        return view('work.show', compact('work'));

    }

    public function edit( work $work){

      return view('work.edit', compact('work'));
    }
    
    public function update(work $work){
        
        $data = request()->validate([
            'name' => 'required|min:3|max:55',
            'type' => 'required'
        ]);

        $work->update($data);

        return redirect("/work/".$work->id)->with('message', 'Updated successfully !');
      }


      public function destroy(work $work){

            $work->delete();

            return redirect('/work')->with('message', 'Deleted successfully !');;
      }




}



