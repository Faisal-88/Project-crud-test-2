@extends('layouts.app')
<title>Product Mahasiswa</title>  
@section('title', 'Show Product')
  
@section('contents')
    <h1 class="mb-0">Detail Product</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{ $product->nama }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Nim</label>
            <input type="text" name="nim" class="form-control" placeholder="Nim" value="{{ $product->nim }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Kelas</label>
            <input type="text" name="kelas" class="form-control" placeholder="Kelas" value="{{ $product->kelas }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Jurusan</label>
            <input type="text" class="form-control" name="jurusan" placeholder="Jurusan" value="{{ $product->jurusan }}" readonly>
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