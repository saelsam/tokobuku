@extends('layouts.global')
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
    <label for="jenis" class="form-label">Harga</label>
    <input type="text" class="form-control @error('harga') is-invalid 
    @enderror" id="harga" name="harga" placeholder="harga" required>
    @error('harga')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>



@foreach ($tokobukus as $tokobuku)
<option value={{ $buku->id }}>{{ $buku->id
}}</option>
@endforeach
</select>
@error('harga_id')
<div class="invalid-feedback">{{ $message }}</div>
@enderror
</div>
<div class="mb-3 ml-3">
<button type="submit" class="btn btn-success">Tambah</button>
</div>
</form>
</div>
@endsection
