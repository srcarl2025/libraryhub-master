@extends('layouts.app')

@section('content')
    <h1>Add New Student</h1>
    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <div style="margin-bottom: 15px;">
            <label for="studentNumber">Student Number:</label>
            <input type="text" name="studentNumber" id="studentNumber" required style="width: 100%; padding: 8px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px;">
        </div>
        <div style="margin-bottom: 15px;">
            <label for="lname">Last Name:</label>
            <input type="text" name="lname" id="lname" required style="width: 100%; padding: 8px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px;">
        </div>
        <div style="margin-bottom: 15px;">
            <label for="fname">First Name:</label>
            <input type="text" name="fname" id="fname" required style="width: 100%; padding: 8px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px;">
        </div>
        <div style="margin-bottom: 15px;">
            <label for="mi">Middle Initial:</label>
            <input type="text" name="mi" id="mi" style="width: 100%; padding: 8px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px;">
        </div>
        <div style="margin-bottom: 15px;">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" style="width: 100%; padding: 8px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px;">
        </div>
        <div style="margin-bottom: 15px;">
            <label for="contactNumber">Contact Number:</label>
            <input type="text" name="contactNumber" id="contactNumber" style="width: 100%; padding: 8px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px;">
        </div>
        <button type="submit" style="background-color: #4CAF50; color: white; padding: 10px 20px; border: none; cursor: pointer; border-radius: 4px; margin-right: 10px;">Save Student</button>
        <a href="{{ route('students.index') }}" style="background-color: #f44336; color: white; padding: 10px 20px; text-decoration: none; border-radius: 4px;">Cancel</a>
    </form>
@endsection