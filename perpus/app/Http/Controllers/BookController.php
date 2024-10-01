<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index() {
        
        $books = Book::all();
        return view('books', compact('books'));
    }
    
    public function show($id) {
        
        $book = Book::find($id);
    
        if (!$book) {
            return response()->json(['message' => 'Book not found'], 404);
        }
    
        return response()->json($book);
    }

    

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'year' => 'required|integer',
        ]);

        try {
            $book = Book::create($validatedData);
            
            if ($request->expectsJson()) {
                return response()->json($book, 201);
            }
            
            return redirect()->route('books.index')->with('success', 'Book created successfully.');
        } catch (\Exception $e) {
            if ($request->expectsJson()) {
                return response()->json(['error' => 'Failed to create book: ' . $e->getMessage()], 500);
            }
            
            return redirect()->route('books.create')->withErrors('Failed to create book: ' . $e->getMessage());
        }
    }

    public function update(Request $request, Book $book)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'year' => 'required|integer',
        ]);

        $book->update($validatedData);
        return redirect()->route('books.index')->with('success', 'Book updated successfully.');
    }

    public function destroy($id)
    {
        $book = Book::findOrFail($id); 
        $book->delete(); 
    
        return response()->json(['message' => 'Book deleted successfully.'], 200);
    }
    


}