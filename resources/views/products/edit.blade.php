@extends('layouts.app')
<title>Product Mahasiswa</title> 
@section('title', 'Edit Product')
  
@section('contents')
    <h1 class="mb-0">Edit Product</h1>
    <hr />
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{ $product->nama }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Nim</label>
                <input type="text" name="nim" class="form-control" placeholder="Nim" value="{{ $product->nim }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Kelas</label>
                <input type="text" name="kelas" class="form-control" placeholder="Kelas" value="{{ $product->kelas }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Jurusan</label>
                <input type="text" class="form-control" name="jurusan" placeholder="Jurusan" value="{{ $product->jurusan }}" >
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection