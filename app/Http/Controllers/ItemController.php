<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index() {
        $items = Item::get();
        return inertia('Items/Index',[
            'items' => $items
        ]);
    }

    public function create() {
        return inertia('Items/Create');
    }

    public function store(Request $request) {
        $fields = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|numeric',
        ]);

        Item::create($fields);

        return redirect('/items');
    }
}
