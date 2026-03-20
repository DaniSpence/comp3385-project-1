<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function create(){
        return view('books.create');
    }

    public function store(Request $request){
    
        $validatedData = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'course_code' => 'required',
            'price' => 'required|numeric',
            'condition' => 'required',
            'description' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,webp',
        ]);

        $photoPath = $request->file('photo')->store('photos', 'public');
        $filename = basename($photoPath);

        Book::create([
            'title' => $validatedData['title'],
            'author' => $validatedData['author'],
            'course_code' => $validatedData['course_code'],
            'price' => $validatedData['price'],
            'condition' => $validatedData['condition'],
            'description' => $validatedData['description'],
            'photo' => $filename,
        ]);

        return redirect('/books')->with('success', 'Book listing added successfully!');
    }

    public function index(){
        $books = Book::latest()->get();
        return view('books.index', compact('books'));
    }

    public function show(Book $book){
        return view('books.show', compact('book'));
    }

}
