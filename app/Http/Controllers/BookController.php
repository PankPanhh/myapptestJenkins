<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Books::all();
        return view('Books.index', compact('books'));
    }

    public function create()
    {
        return view('Books.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'nullable|string|max:255',
            'publisher' => 'nullable|string|max:255',
            'published_year' => 'nullable|digits:4|integer',
            'price' => 'nullable|numeric',
            'quantity' => 'nullable|integer',
            'description' => 'nullable|string',
        ]);

        Books::create($request->all());
        return redirect()->route('books.index')->with('success', 'Thêm sách thành công!');
    }

    public function edit($id)
    {
        $book = Books::findOrFail($id);
        return view('Books.edit', compact('book'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'nullable|string|max:255',
            'publisher' => 'nullable|string|max:255',
            'published_year' => 'nullable|digits:4|integer',
            'price' => 'nullable|numeric',
            'quantity' => 'nullable|integer',
            'description' => 'nullable|string',
        ]);

        $book = Books::findOrFail($id);
        $book->update($request->all());

        return redirect()->route('books.index')->with('success', 'Cập nhật sách thành công!');
    }

    public function destroy($id)
    {
        $book = Books::findOrFail($id);
        $book->delete();

        return redirect()->route('books.index')->with('success', 'Xóa sách thành công!');
    }
}
