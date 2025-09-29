<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;

class BookController extends Controller
{
    public function index()
    {
        return Book::all();
    }

    public function store(StoreBookRequest $request)
    {
        return Book::create($request->validated());
    }

    public function show(Book $book)
    {
        return $book;
    }

    public function update(UpdateBookRequest $request, Book $book)
    {
        $book->update($request->validated());
        return $book;
    }

    public function destroy(Book $book)
    {
        $book->delete();
        return response()->noContent();
    }
}
