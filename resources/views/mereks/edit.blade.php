@extends('mereks.layout')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Edit Merek</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('mereks.index') }}"> Back</a>
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
<form action="{{ route('mereks.update',$merek->id) }}" method="POST">
@csrf
@method('PUT')
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Nama Merek:</strong>
<input type="text" name="nama_merek" value="{{ $merek->nama_merek }}" class="form-control" placeholder="Nama_Merek">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 text-center">
<button type="submit" class="btn btn-danger"onclick="return confirm('Yakin hapus {{ $merek->nama_merek }} ?')">Submit</button>
</div>
</div>
</form>
@endsection