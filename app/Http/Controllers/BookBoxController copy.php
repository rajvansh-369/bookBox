<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Box;
use Illuminate\Http\Request;

class BookBoxController extends Controller
{
    public function box(){

       $boxes = Box::all();

        return view('box', compact('boxes'));
    }
    public function book(){

        $books = Book::all();

        return view('book', compact('books'));
    }


    public function boxCreate(Request $request){

            // dd($request->all());
        Box::create([
            'box_name' => $request->boxName,
            'volume' => $request->boxVolume,
        ]);

        return redirect()->back()->with('success', 'Box has been added');  
    }


    public function bookCreate(Request $request){

            // dd($request->all());
        Book::create([
            'book_name' => $request->bookName,
            'book_author' => $request->bookAuthorName,
            'volume' => $request->bookVolume,
        ]);

        return redirect()->back()->with('success', 'BOok has been added');  
    }


    public function showBox(){

        return view('showBox');

    }
}

