@extends('layouts.global')
@section('title')
Ini adalah halaman Mahasiswa
@endsection
@section('content')
<div class="container px-4 py-5">
@if (session('success'))
<div class="alert alert-success">
<b>Yeah!</b> {{ session('success') }}
</div>
@endif

<a href="{{ route('tokobuku.create') }}", class=""><Button class="btn btn-primary mb-
3">Tambah</Button></a>

<table class="table">
<thead>
<tr>
<th scope="col">#</th>
<th scope="col">Nama</th>
<th scope="col">Jenis</th>
<th scope="col">Harga</th>
</tr>
</thead>
<tbody>
@foreach ($tokobukus as $tokobuku)
<tr>
<th scope="row">{{ $tokobuku->id }}</th>
<td>{{ $tokobuku->nama }}</td>
<td>{{ $tokobuku->jenis }}</td>
<td>{{ $tokobuku->harga }}</td>


<a href="#" class=""><Button class="btn btn-success mb-3">Lihat</Button></a>

</td>
</tr>
@endforeach
</tbody>
</table>
</div>
@endsection