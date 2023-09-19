@extends('layouts.app')
  
@section('title', 'Edit Communication')
  
@section('contents')
    <h1 class="mb-0">Edit Communicationt</h1>
    <hr />
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Reference No.</label>
                <input type="text" name="reference_no" class="form-control"value="{{ $product->reference_no }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Requesting Party</label>
                <input type="text" name="requesting_party" class="form-control"value="{{ $product->requesting_party }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Address</label>
                <input type="text" name="product_code" class="form-control"value="{{ $product->address }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Subject</label>
                <input class="form-control" name="subject" value="{{ $product->subjcet }}">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection