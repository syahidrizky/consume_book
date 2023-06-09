<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Libraries\BaseApi;

class BookController extends Controller
{
    public function index()
    {
        // $data = (new BaseApi)->index('/api/students');
        // $students = $data->json();
    

        // return view('students.index')->with('students', $students['data']);

        $data = (new BaseApi)->index('/api/books');
        $books = $data->json('data');

        for ($i=0; $i < count($books); $i++) {
            $books[$i]['image_path'] = env('API_HOST') . 'storage/' . $books[$i]['image'];
        }

        return view('books.index')->with('books' , $books);
    }

    public function create()
    {
        return view ('books.create');
    }

    public function store(Request $request)
    {
        $newName = '';
            if($request->file){
                $extension = $request->file('file')->getClientOriginalExtension();
                $newName = $request->name_book.'-'.now()->timestamp.'.'.$extension;
                $request->file('file')->move(public_path('/storage'), $newName);
            }
    
            $request['image'] = $newName;

        $upload = [
            'book_code' => $request->book_code,
            'name_book' =>$request->name_book,
            'penulis'=>$request->penulis,
            'image' =>$newName,
        ];

        $baseApi = new BaseApi;
        $response = $baseApi->create('api/books/store', $upload);
        return redirect('/book');
    }

    public function show ($id)
    {
        $data = (new BaseApi)->detail('/api/books', $id);
        $books = $data->json();
        return view('books.show')->with('books', $books['data']);
    
    }

    public function edit ($id) 
    {
        $data = (new BaseApi)->detail('/api/books', $id);
        $books = $data->json();
        return view('books.edit')->with('books', $books['data']);
    }
    public function update (Request $request, $id)
    { 
        $payload = [
            'book_code' => $request->book_code,
            'name_book' =>$request->name_book,
            'penulis'=>$request->penulis,
            'image' =>$request->image,
        ];

        $baseApi = new BaseApi;
        $response = $baseApi->update('api/books/update', $id, $payload);
        return redirect('/book');
    }


    public function destroy (Request $request, $id)
    {
        $baseApi = new BaseApi;
        $response = $baseApi->delete('/api/books/delete', $id);
        return redirect('/book');
    }
}