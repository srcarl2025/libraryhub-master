@extends('layouts.app')

@section('content')
    <h1>Books List</h1>

    {{-- Search Form --}}
    <form method="GET" action="{{ route('books.index') }}" style="margin-bottom: 15px; display: flex; gap: 10px; align-items: center; flex-wrap: wrap;">
        <label for="id" style="margin-bottom: 0;">Search by ID or ISBN:</label>
        <input type="text" name="id" id="id" value="{{ request('id') }}" placeholder="Enter book id or ISBN" style="padding: 6px; flex: 1; min-width: 200px;">
        
        <div style="display: flex; gap: 6px;">
            <button type="submit" style="background-color:#007bff;color:#fff;padding:6px 12px;border:none;border-radius:4px;">Search</button>
            <a href="{{ route('books.index') }}" style="padding:6px 12px;border-radius:4px;background:#6c757d;color:#fff;text-decoration:none;display:inline-block;">Clear</a>
        </div>
    </form>

    {{-- Add Book Button --}}
    <a href="{{ route('books.create') }}" style="background-color: rgba(114, 76, 175, 1); color: white; padding: 10px 15px; text-align: center; text-decoration: none; display: inline-block; border-radius: 4px; margin-bottom: 20px;">Add New Book</a>

    @if ($books->isEmpty())
        <p>No books found.</p>
    @else
        {{-- Books Table --}}
        <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
            <thead>
                <tr style="background-color: #f2f2f2;">
                    <th style="border: 1px solid #ddd; padding: 8px; text-align: left;">Title</th>
                    <th style="border: 1px solid #ddd; padding: 8px; text-align: left;">Author</th>
                    <th style="border: 1px solid #ddd; padding: 8px; text-align: left;">ISBN</th>
                    <th style="border: 1px solid #ddd; padding: 10px; text-align: left;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($books as $book)
                    <tr>
                        <td style="border: 1px solid #ddd; padding: 8px;">{{ $book->title }}</td>
                        <td style="border: 1px solid #ddd; padding: 8px;">{{ $book->author }}</td>
                        <td style="border: 1px solid #ddd; padding: 8px;">{{ $book->isbn }}</td>
                        <td style="border: 1px solid #ddd; padding: 10px;">
                            <div style="display: flex; gap: 8px;">
                                <a href="{{ route('books.edit', $book) }}" style="background-color: rgba(242, 5, 250, 1); color: white; padding: 5px 10px; text-decoration: none; border-radius: 4px;">Edit</a>
                                <form action="{{ route('books.destroy', $book) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Are you sure you want to delete this book?');" style="background-color: #f44336; color: white; padding: 10px 15px; border: none; cursor: pointer; border-radius: 4px;">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
