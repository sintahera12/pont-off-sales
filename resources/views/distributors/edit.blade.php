@extends('distributors.layout')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Edit Distributor</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('distributors.index') }}"> Back</a>
</div>
</div>
</div>
@if ($errors->any())
<div class="alert alert-danger">
<strong>Whoops!</strong> There were some problems with your input.<br><br>
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
<form action="{{ route('distributors.update',$distributor->id) }}" method="POST">
@csrf
@method('PUT')
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Nama Distributor:</strong>
<input type="string" name="nama_distributor" value="{{ $distributor->nama_distributor }}" class="form-control" placeholder="Nama_Distributor">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Alamat:</strong>
<input type="text" name="alamat" value="{{ $distributor->alamat }}" class="form-control" placeholder="alamat">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Nomor Hp:</strong>
<input type="number" min="0" max="" name="nomor_hp" value="{{ $distributor->nomor_hp }}" class="form-control" placeholder="Nomor_Hp">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 text-center">
<button type="submit" class="btn btn-danger"onclick="return confirm('Yakin hapus {{ $distributor->nama_distributor }} ?')">Submit</button>
</div>
</div>
</form>
@endsection
