@extends('datasiswas.layout')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Edit Data Siswa</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('datasiswas.index') }}"> Back</a>
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
<form action="{{ route('datasiswas.update',$datasiswa->id) }}" method="POST">
@csrf
@method('PUT')
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Nis:</strong>
<input type="integer" name="nis" value="{{ $datasiswa->nis }}" class="form-control" placeholder="Nis">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Name:</strong>
<input type="string" name="name" value="{{ $datasiswa->name }}" class="form-control" placeholder="Name">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Rombel:</strong>
<select class="from-control" style="width:1333px" ; name="nama_rombel">
        <option value"">Pilihan Rombel</option>
        @foreach ($rombel as $item)
        <option value="{{ $item->nama_rombel }}" @if($item->nama_rombel == $datasiswa->nama_rombel) selected @endif>{{ $item->nama_rombel}}</option>
        @endforeach
    </select>
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Rayon:</strong>
<select class="from-control" style="width:1333px" ; name="rayon">
        <option value=""></option>
        @foreach ($rayon as $item)
        <option value="{{ $item->nama_rayon }}" @if($item->rayon == $datasiswa->rayon) selected @endif>{{ $item->nama_rayon}}</option>
        @endforeach
    </select>
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 text-center">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</form>
@endsection
