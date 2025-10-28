@extends('layouts.app')

@section('content')
    <h1>Edit Book</h1>
    <form action="{{ route('books.update', $book) }}" method="POST">
        @csrf
        @method('PUT')
        <div style="margin-bottom: 15px;">
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" value="{{ $book->title }}" required style="width: 100%; padding: 8px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px;">
        </div>
        <div style="margin-bottom: 15px;">
            <label for="author">Author:</label>
            <input type="text" name="author" id="author" value="{{ $book->author }}" required style="width: 100%; padding: 8px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px;">
        </div>
        <div style="margin-bottom: 15px;">
            <label for="isbn">ISBN:</label>
            <input type="text" name="isbn" id="isbn" value="{{ $book->isbn }}" required style="width: 100%; padding: 8px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px;">
        </div>
        <div style="margin-bottom: 15px;">
            <label for="publisher">Publisher:</label>
            <input type="text" name="publisher" id="publisher" value="{{ $book->publisher }}" style="width: 100%; padding: 8px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px;">
        </div>
        <div style="margin-bottom: 15px;">
            <label for="publication_year">Publication Year:</label>
            <input type="number" name="publication_year" id="publication_year" value="{{ $book->publication_year }}" style="width: 100%; padding: 8px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px;">
        </div>
        <button type="submit" style="background-color: rgba(180, 52, 240, 1); color: white; padding: 15px 20px; border: none; cursor: pointer; border-radius: 4px; margin-right: 10px;">Update Book</button>
        <a href="{{ route('books.index') }}" style="background-color: #f44336; color: white; padding: 10px 20px; text-decoration: none; border-radius: 4px;">Cancel</a>
    </form>
@endsection