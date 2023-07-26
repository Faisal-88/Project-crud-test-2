@extends('layouts.app')
<title>Product Mahasiswa</title>
@section('title', 'Create Product')
  
@section('contents')
    <h1 class="mb-0">Add Product</h1>
    <hr />
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="nama" class="form-control" placeholder="Nama">
            </div>
            <div class="col">
                <input type="text" name="nim" class="form-control" placeholder="Nim">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="kelas" class="form-control" placeholder="Kelas">
            </div>
            <div class="col">
                <input type="text" class="form-control" name="jurusan" placeholder="Jurusan">
            </div>
        </div>
 
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection