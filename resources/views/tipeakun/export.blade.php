@extends('app')

@section('content')
  <div class="well well-sm">
    <ul class="nav nav-pills nav-justified">
      <li>{!!link_to('tipeakun','List')!!}</li>
      <li>{!!link_to('tipeakun/create','Tambah')!!}</li>
      <li class="active">{!!link_to('tipeakun/export','Export')!!}</li>
      <li>{!!link_to('tipeakun/import','Import')!!}</li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-offset-3 col-md-6">
      <div class="panel panel-default">
        <div class="panel-heading">Export</div>
        <div class="panel-body">Data tidak ditemukan</div>
      </div>
    </div>
  </div>
@endsection