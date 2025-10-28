@extends('layouts.app')

@section('content')
    <h1>Students List</h1>

    <form method="GET" action="{{ route('students.index') }}" style="margin-bottom: 15px; display:flex; gap:8px; align-items:center;">
        <label for="id">Search by ID or Student Number:</label>
        <input type="text" name="id" id="id" value="{{ request('id') }}" placeholder="Enter student id or student number" style="padding:6px;">
        <button type="submit" style="background-color:#007bff;color:#fff;padding:10px 15px;border:none;border-radius:4px;">Search</button>
        <a href="{{ route('students.index') }}" style="padding:5px 15px;border-radius:4px;background:#6c757d;color:#fff;text-decoration:none;">Clear</a>
    </form>

    <a href="{{ route('students.create') }}" style="background-color: #5b03fdff; color: white; padding: 10px 15px; text-align: center; text-decoration: none; display: inline-block; border-radius: 4px; margin-bottom: 20px;">Add New Student</a>

    @if ($students->isEmpty())
        <p>No students found.</p>
    @else
        <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
            <thead>
                <tr style="background-color: #f2f2f2;">
                    <th style="border: 1px solid #ddd; padding: 8px; text-align: left;">Student Number</th>
                    <th style="border: 1px solid #ddd; padding: 8px; text-align: left;">Name</th>
                    <th style="border: 1px solid #ddd; padding: 8px; text-align: left;">Email</th>
                    <th style="border: 1px solid #ddd; padding: 8px; text-align: left;">Contact Number</th>
                    <th style="border: 1px solid #ddd; padding: 8px; text-align: left;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                    <tr>
                        <td style="border: 1px solid #ddd; padding: 8px;">{{ $student->studentNumber }}</td>
                        <td style="border: 1px solid #ddd; padding: 8px;">{{ $student->lname }}, {{ $student->fname }} {{ $student->mi }}</td>
                        <td style="border: 1px solid #ddd; padding: 8px;">{{ $student->email }}</td>
                        <td style="border: 1px solid #ddd; padding: 8px;">{{ $student->contactNumber }}</td>
                        <td style="border: 1px solid #ddd; padding: 8px;">
                            <a href="{{ route('students.edit', $student) }}" style="background-color: rgba(242, 5, 250, 1); color: white; padding: 10px 15px; text-decoration: none; border-radius: 4px; margin-right: 5px;">Edit</a>
                            <form action="{{ route('students.destroy', $student) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Are you sure you want to delete this student?');" style="background-color: #f44336; color: white; padding: 15px 20px; border: none; cursor: pointer; border-radius: 4px;">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection