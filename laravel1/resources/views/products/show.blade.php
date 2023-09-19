@extends('layouts.app')
  
@section('title', 'Show Communication')
  
@section('contents')
    <h1 class="mb-0">Detail Communication</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Reference No.</label>
            <input type="text" name="reference_no" class="form-control" placeholder="Reference No." value="{{ $product->reference_no }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Requesting Party</label>
            <input type="text" name="requesting_party" class="form-control" placeholder="Requesting Party" value="{{ $product->requesting_party }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Address</label>
            <input type="text" name="address" class="form-control" placeholder="Address" value="{{ $product->address }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Subject</label>
            <input class="form-control" name="subject" placeholder="Subject" value="{{ $product->address }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $product->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $product->updated_at }}" readonly>
        </div>
    </div>
@endsection