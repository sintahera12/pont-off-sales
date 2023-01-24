@extends('rayons.layout')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Edit Rayon</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('rayons.index') }}"> Back</a>
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
<form action="{{ route('rayons.update',$rayon->id) }}" method="POST">
@csrf
@method('PUT')
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Nama Rayon:</strong>
<input type="string" name="nama_rayon" value="{{ $rayon->nama_rayon }}" class="form-control" placeholder="nama_rayon">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Pembimbing Rayon:</strong>
<input type="string" name="pembimbing_rayon" value="{{ $rayon->pembimbing_rayon }}" class="form-control" placeholder="pembimbing_rayon">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Nomor HP:</strong>
<input type="number" min="0" maxlength="13" name="nomor_hp" value="{{ $rayon->nomor_hp }}" class="form-control" placeholder="nomor_hp">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Alamat:</strong>
<input type="text" name="alamat" value="{{ $rayon->alamat }}" class="form-control" placeholder="alamat">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 text-center">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</form>
@endsection