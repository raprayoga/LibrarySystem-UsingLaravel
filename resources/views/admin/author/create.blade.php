@extends('admin.templates.default')

@section('content')
  <div class="card">
    <div class="card-header">
      <h3>Tambah Data Penulis</h3>
    </div>

    <div class="card-body">
      <form action="{{ route('admin.author.store') }}" method="POST">
        @csrf

        <div class="form-group">
          <label for="">Nama</label>
        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Masukkan Nama Penulis" value="{{ old('name') }}">
          @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group">
          <input type="submit" class="btn btn-primary" value="Tambah">
        </div>
      </form>
    </div>
  </div>
@endsection