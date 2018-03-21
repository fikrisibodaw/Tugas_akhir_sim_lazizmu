@extends('wilayah.layouts.admin')

@section('content')
    <!-- page content -->
    <!-- top tiles -->
    <table class="table table-striped table-bordered">
      <thead>
        <tr class="headings">
          <th>Jenis Kantor</th>
          <th>Nama Kantor</th>
          <th>deskripsi</th>
          <th>alamat</th>
        </tr>
      </thead>
      <tbody>
        @foreach($data as $isi)
          <tr>
            <td>{{ $isi->jenis_kantor }}</td>
            <td>{{ $isi->nama_kantor }}</td>
            <td>{{ $isi->deskripsi }}</td>
            <td>{{ $isi->alamat }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>

@endsection

@section('scripts')
    @parent
    {{ Html::script(mix('assets/admin/js/dashboard.js')) }}
@endsection

@section('styles')
    @parent
    {{ Html::style(mix('assets/admin/css/dashboard.css')) }}
@endsection
