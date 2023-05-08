<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;
use Request;
use App\Models\Item;

class ItemController extends Controller
{
    public function index(){
        $items = Item::all();

        return view('items', ['items'=>$items]);
    } 

    public function show($id){
        $items = Item::where('id', $id)->get();

        return view('items', ['items'=>$items]);
    } 

    
    public function create(){
        return view('create');
    }

    public function store(Request $request){

        
        $items = new Item();

        $items->name = Request::get('name', 'ooo');
        $items->description = Request::get('description', 'eee');
        $items->price = Request::get('price', 5);

        $items->save();

        return redirect('/przedmioty');
    }
}
