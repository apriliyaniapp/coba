@extends('layout.master')

@section('judul')
Tambah Cast
@endsection

@section('content')

<form action="/Npm21312064/{{ $Uas->id }}" method="post">
    @csrf
    @method('PUT')
    
    <div class="form-group">
        <label>NPM</label>
        <input type="number" name="npm" value="{{ $Uas->npm }}" class="form-control">
        @error('npm')
            <div class="btn btn-danger">{{ $message }}</div>
        @enderror
    </div>
    
    <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama" value="{{ $Uas->nama }}" class="form-control">
        @error('nama')
            <div class="btn btn-danger">{{ $message }}</div>
        @enderror
    </div>
    
    
    <div class="form-group">
        <label>Alamat</label>
        <textarea name="alamat" class="form-control">{{ $Uas->alamat }}</textarea>
        @error('Alamat')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection
