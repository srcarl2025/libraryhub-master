@extends('layouts.app')

@section('content')
    <h1>Edit Student</h1>
    <form action="{{ route('students.update', $student) }}" method="POST">
        @csrf
        @method('PUT')
        <div style="margin-bottom: 15px;">
            <label for="studentNumber">Student Number:</label>
            <input type="text" name="studentNumber" id="studentNumber" value="{{ $student->studentNumber }}" required style="width: 100%; padding: 8px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px;">
        </div>
        <div style="margin-bottom: 15px;">
            <label for="lname">Last Name:</label>
            <input type="text" name="lname" id="lname" value="{{ $student->lname }}" required style="width: 100%; padding: 8px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px;">
        </div>
        <div style="margin-bottom: 15px;">
            <label for="fname">First Name:</label>
            <input type="text" name="fname" id="fname" value="{{ $student->fname }}" required style="width: 100%; padding: 8px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px;">
        </div>
        <div style="margin-bottom: 15px;">
            <label for="mi">Middle Initial:</label>
            <input type="text" name="mi" id="mi" value="{{ $student->mi }}" style="width: 100%; padding: 8px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px;">
        </div>
        <div style="margin-bottom: 15px;">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="{{ $student->email }}" style="width: 100%; padding: 8px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px;">
        </div>
        <div style="margin-bottom: 15px;">
            <label for="contactNumber">Contact Number:</label>
            <input type="text" name="contactNumber" id="contactNumber" value="{{ $student->contactNumber }}" style="width: 100%; padding: 8px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px;">
        </div>
        <button type="submit" style="background-color: rgba(180, 52, 240, 1); color: white; padding: 15px 20px; border: none; cursor: pointer; border-radius: 4px; margin-right: 10px;">Update Student</button>
        <a href="{{ route('students.index') }}" style="background-color: #f44336; color: white; padding: 10px 20px; text-decoration: none; border-radius: 4px;">Cancel</a>
    </form>
@endsection