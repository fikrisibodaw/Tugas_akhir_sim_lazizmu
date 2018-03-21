@extends('wilayah.layouts.admin')

@section('content')
    <!-- page content -->
    <!-- top tiles -->


  <form action="{{ route('wilayah.store') }}" method="post">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="form-group" >
        <label>jenis Kantor</label>
        <input type="text" class="form-control" name="jenis_kantor">
      </div>

      <div class="form-group" >
        <label>Nama Kantor</label>
        <input type="text" class="form-control" name="nama_kantor">
      </div>

      <div class="form-group" >
        <label>Deskripsi</label>
        <input type="text" class="form-control" name="deskripsi">
      </div>

      <div class="form-group" >
        <label>Alamat</label>
        <input type="text" class="form-control" name="alamat">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection

@section('scripts')
    @parent
    {{ Html::script(mix('assets/admin/js/dashboard.js')) }}
@endsection

@section('styles')
    @parent
    {{ Html::style(mix('assets/admin/css/dashboard.css')) }}
@endsection
