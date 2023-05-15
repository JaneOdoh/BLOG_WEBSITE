<?php

namespace App\Http\Controllers;
use App\Models\Table;
use Illuminate\Http\Request;

class TableController extends Controller
{
    public function site(){
        return view('posts.create');
    }
  
    public function store(Request $request){
       
    
        $table=new table();
        $table->name=$request->input('name');
        $table->title=$request->input('title');
        $table->subject=$request->input('subject');
        $table->image=$request->input('image');
        $table->save();
       
    }
    public function index(){
        $Table=table::all();
        return view('posts.index')->with('Table', $Table);

    }
    public function show($id){
        $Tables=Table::find($id);
    return view('posts.show')->with('Tables', $Tables);

    }
}
