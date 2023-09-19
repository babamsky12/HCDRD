@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Search Results</h1>
    <p>Showing results for: {{ $searchText }}</p>

    @if (count($products) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Reference No</th>
                    <th>Requesting Party</th>
                    <th>Address</th>
                    <th>Subject</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->reference_no }}</td>
                        <td>{{ $product->requesting_party }}</td>
                        <td>{{ $product->address }}</td>
                        <td>{{ $product->subject }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No results found.</p>
    @endif
</div>
@endsection
