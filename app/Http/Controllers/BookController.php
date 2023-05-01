<?php

namespace App\Http\Controllers;

use App\Models\book;
use App\Models\book_category;
use App\Models\categories;
use App\Models\publisher;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = book::paginate(3)->withQueryString();
        return view('index',compact('books'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\book  $book
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = book::find($id);
        return view('bookdetail', compact('book'));
    }

    public function showCategory($id){
        $categories = categories::where('id','=',$id)->first();
        $book_categories = book_category::where('category_id','=',$categories->id)->paginate(3);
        $books = [];
        foreach ($book_categories as $session){
            $book = book::find($session->book_id);
            $books[] = $book;
        }

        return view('category',compact('books','categories','book_categories'));
    }

    public function showAllPublisher(){
        $publishers = publisher::paginate(3)->withQueryString();
        return view('publisher',compact('publishers'));
    }

    public function showPublisher($id){
        $publishers = publisher::where('id','=',$id)->get();

        $publisherID = publisher::where('id','=',$id)->first();
        $books = book::where('publisher_id','=',$publisherID->id)->paginate(3);

        return view('publisherDetail',compact('publishers','books'));
    }

}
