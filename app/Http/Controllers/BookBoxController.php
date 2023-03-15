<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Box;
use App\Models\BoxBook;
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


    public function showBox(Request $request){

        $books = new Book();
        $boxes = new Box();

        $getAllBook = $books->all();
        $bookID = $request->selectBook ?? 0;
        $qty = $request->qty;
        if($bookID){

            $getBook = $books->find($bookID);
            $getAllBox = $boxes->orderByDesc('volume', "desc")->get();

            $totalVolume = $qty * $getBook->volume;
            $i = 0;
            $totalBookVol = 0;
            $bookAdded = 0;
            $group_books = array();
                foreach($getAllBox as $box){
                    $available_space = $box->volume;
                    $countBook = 0;
                    while($qty > 0 ){

                        if($available_space <= 0){

                            break;
                        }
                        if($getBook->volume <= $available_space){
                            $bookAdded += $countBook;
                            $available_space -= $getBook->volume;
                            $totalBookVol += $getBook->volume;
                        }
                        $totalVolume -= $getBook->volume;
                        $countBook++;
                        $qty--;
                        
                    }

                    $group_books[$i]['countBook'] = $countBook;
                    $group_books[$i]['bookId'] = $getBook->id;
                    $group_books[$i]['boxId'] = $box->id;
                    $group_books[$i]['box_name'] = $box->box_name;

                    $i++;
                }
                


                return view('showBox' , compact('getAllBook', 'bookID', 'group_books'));

        }

        return view('showBox' , compact('getAllBook' , 'bookID'));
    }


    public function putBox(Request $request)
    {

        $data = json_decode($request->data, true);


        foreach($data as $bookBox){


            BoxBook::create([
                'box_id' => $bookBox['boxId'],
                'book_id' => $bookBox['bookId'],
                'qty' => $bookBox['countBook'],
            ]);
            
        
        }

        return redirect()->back()->with('bookaddedTOBox', 'Book has been successfully added to box');  
    }


    public function report(){
       
        $getReport = BoxBook::get();

            // dd($getReport[0]->box);

        return view('report' , compact('getReport'));
    }
}

