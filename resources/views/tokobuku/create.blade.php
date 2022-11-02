@extends('layouts.global')
@section('title')
Create Mahasiswa
@endsection
@section('content')
<div class="container">
<form action="#" method="post">
@csrf
<div class="mb-3">
<label for="nama" class="form-label">Nama</label>
<input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Nama Buku" required>
@error('nama')
<div class="invalid-feedback">{{ $message }}</div>
@enderror
</div>
<div class="mb-3">
<label for="jenis" class="form-label">Jenis</label>
<input type="text" class="form-control @error('jenis') is-invalid 
@enderror" id="jenis" name="jenis" placeholder="Jenis" required>
@error('jenis')
<div class="invalid-feedback">{{ $message }}</div>
@enderror
</div>
<div class="mb-3">

<label for="harga" class="form-label ">Harga</label>
<select name="harga_id" id="harga_id" class="form-select 
@error('harga_id') is-invalid @enderror"
aria-label="Default select example">
<option value="" selected>Pilih</option>

@foreach ($bukus as $buku)
<option value={{ $buku->id }}>{{ $buku->id
}}</option>
@endforeach
</select>
@error('harga_id')
<div class="invalid-feedback">{{ $message }}</div>
@enderror
</div>
<div class="mb-3">
<button type="submit" class="btn btn-success">Tambah</button>
</div>
</form>
</div>
@endsection
