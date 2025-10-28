@extends('layouts.app')

@section('content')
    <h1>Borrow a Book</h1>
    <form action="{{ route('transactions.store') }}" method="POST">
        @csrf
        <div style="margin-bottom: 15px;">
            <label for="student_id">Select Student:</label>
            <select name="student_id" id="student_id" required style="width: 100%; padding: 8px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px;">
                @foreach($students as $student)
                    <option value="{{ $student->id }}">{{ $student->fname }} {{ $student->lname }}</option>
                @endforeach
            </select>
        </div>
        <div style="margin-bottom: 15px;">
            <label for="book_id">Select Book:</label>
            <select name="book_id" id="book_id" required style="width: 100%; padding: 8px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px;">
                @foreach($books as $book)
                    <option value="{{ $book->id }}">{{ $book->title }} by {{ $book->author }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" style="background-color: #4CAF50; color: white; padding: 10px 20px; border: none; cursor: pointer; border-radius: 4px; margin-right: 10px;">Borrow Book</button>
        <a href="{{ route('transactions.index') }}" style="background-color: #f44336; color: white; padding: 10px 20px; text-decoration: none; border-radius: 4px;">Cancel</a>
    </form>
@endsection