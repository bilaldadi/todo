<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TodoItemController extends Controller
{
    public function index()
    {
        // Use the TodoItem model to retrieve all to-do list items from the database
        $items = TodoItem::all();

        // Use the TodoItemResource to create a JSON representation of the to-do list items
        return TodoItemResource::collection($items);
    }

    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|max:255',
        ]);

        // Use the TodoItem model to create a new to-do list item in the database
         $item = TodoItem::create([
            'name' => $validatedData['name'],
        ]);

        // Use the Todo
    }


    }
