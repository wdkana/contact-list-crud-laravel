@extends('kontak.master')

@section('content')
  <div class="row">
    <div class="col-lg-12">
      <div class="pull-left">
        <h3>Show Post </h3> <a class="btn btn-xs btn-primary" href="{{ route('kontak.index') }}">Back</a>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-xs-12">
      <div class="form-group">
        <strong>Nama : </strong>
        {{ $kontak->Nama }}
      </div>
    </div>
    <div class="col-xs-12">
      <div class="form-group">
        <strong>Alamat : </strong>
        {{ $kontak->alamat }}
      </div>
    </div>
    <div class="col-xs-12">
        <div class="form-group">
          <strong>No HP : </strong>
          {{ $kontak->nohp }}
        </div>
      </div>
  </div>
  
@endsection