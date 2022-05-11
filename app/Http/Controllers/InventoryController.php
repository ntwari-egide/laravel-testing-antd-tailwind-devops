<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarInventory;

class InventoryController extends Controller
{
    //

    public function index() {

        $data['inventories']= CarInventory::orderBy('id', 'desc')
            ->paginate(10);

        return view('inventory.index', $data );
    }

    public function create() {
        return view('inventory.create');
    }

    public function store(Request $request) {
        $request->validate([
            'image_url' => 'required',
            'name' => 'required',
            'model'  => 'required',
            'year'  => 'required',
            'info' => 'required',
            'color' => 'required',
            'status' => 'required',
            'stock' => 'required',
        ]);

        $inventory = new CarInventory;
        $inventory->image_url = $request->image_url;
        $inventory->name = $request->name;
        $inventory->model = $request->model;
        $inventory->year = $request->year;
        $inventory->info = $request->info;
        $inventory->color = $request->color;
        $inventory->status = $request->status;
        $inventory->stock = $request->stock;
        $inventory->save();

        return redirect()->route('inventory.index')
            ->with('success','new inventory is added successfully');

    }
}
