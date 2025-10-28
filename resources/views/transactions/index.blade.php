@extends('layouts.app')

@section('content')
    <h1>Transactions</h1>
    <a href="{{ route('transactions.create') }}" style="background-color: #4CAF50; color: white; padding: 10px 15px; text-align: center; text-decoration: none; display: inline-block; border-radius: 4px; margin-bottom: 20px;">Borrow Book</a>

    @if ($transactions->isEmpty())
        <p>No transactions found.</p>
    @else
        <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
            <thead>
                <tr style="background-color: #f2f2f2;">
                    <th style="border: 1px solid #ddd; padding: 8px; text-align: left;">Student</th>
                    <th style="border: 1px solid #ddd; padding: 8px; text-align: left;">Book</th>
                    <th style="border: 1px solid #ddd; padding: 8px; text-align: left;">Borrowed At</th>
                    <th style="border: 1px solid #ddd; padding: 8px; text-align: left;">Returned At</th>
                    <th style="border: 1px solid #ddd; padding: 8px; text-align: left;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($transactions as $transaction)
                    <tr>
                        <td style="border: 1px solid #ddd; padding: 8px;">{{ $transaction->student->fname }} {{ $transaction->student->lname }}</td>
                        <td style="border: 1px solid #ddd; padding: 8px;">{{ $transaction->book->title }}</td>
                        <td style="border: 1px solid #ddd; padding: 8px;">{{ $transaction->borrowed_at }}</td>
                        <td style="border: 1px solid #ddd; padding: 8px;">{{ $transaction->returned_at ?? 'Not Returned' }}</td>
                        <td style="border: 1px solid #ddd; padding: 8px;">
                            @if (!$transaction->returned_at)
                                <form action="{{ route('transactions.update', $transaction) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" style="background-color: #4CAF50; color: white; padding: 5px 10px; border: none; cursor: pointer; border-radius: 4px;">Return</button>
                                </form>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection