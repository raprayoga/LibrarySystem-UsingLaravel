@extends('admin.templates.default')

@section('content')
<div class="box">
  <div class="card-header">
    <h3 class="card-title">Data Penulis</h3>
    <a href="{{ route('admin.author.create') }}" class="btn btn-primary">Tambah Penulis</a>
  </div>
  <div class="card-body">
    <table id="dataTable" class="table table-bordered table-hover">
      <thead>
        <tr>
          <th>Id</th>
          <th>Nama</th>
          <th>Aksi</th>
        </tr>
      </thead>
    </table>
  </div>
</div>
@endsection

@push('scripts')
  <script>
    $(function() {
      $('#dataTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{ route('admin.author.data') }}',
        columns: [
          { data: 'DT_RowIndex', orderable: false, searchable: false },
          { data: 'name' },
          { data: 'action' }
        ]
      });
    });
  </script>    
@endpush