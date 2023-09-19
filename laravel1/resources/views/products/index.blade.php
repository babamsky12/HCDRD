@extends('layouts.app')
  
@section('title', 'Communication')
  
@section('contents')


<div class="container">
    <div class="row">
        <div class="col-md-6">
            <!-- Search Bar -->
            <form action="{{ route('products.search') }}" method="GET" class="form-inline float-right">
                <div class="input-group">
                    <input type="text" class="form-control" name="query" placeholder="Search...">
                    <span class="input-group-btn">
                        <button class="btn btn-primary" type="submit">Search</button>
                    </span>
                </div>
            </form>
            <!-- End Search Bar -->
        </div>
    </div>

    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List of Communication</h1>
        <a href="{{ route('products.create') }}" class="btn btn-primary">Add Communication</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Reference No.</th>
                <th>Requesting Party</th>
                <th>Address</th>
                <th>Subject</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($product->count() > 0)
                @foreach($product as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->reference_no }}</td>
                        <td class="align-middle">{{ $rs->requesting_party }}</td>
                        <td class="align-middle">{{ $rs->address }}</td>
                        <td class="align-middle">{{ $rs->subject }}</td>  
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('products.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('products.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('products.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Communication not found</td>
                </tr>
            @endif
            
        </tbody>
    </table>
@endsection