@extends('barangs.layout')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Edit Barang</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('barangs.index') }}"> Back</a>
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
<form action="{{ route('barangs.update',$barang->id) }}" method="POST">
@csrf
@method('PUT')
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Nama Barang:</strong>
<input type="string" name="nama_barang" value="{{ $barang->nama_barang }}" class="form-control" placeholder="Nama_Barang">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Nama Merek:</strong>
<select class="from-control" style="width:1333px" ; name="nama_merek">
        <option value"">Pilihan Merek</option>
        @foreach ($merek as $item)
        <option value="{{ $item->nama_merek }}" @if($item->nama_merek == $barang->nama_merek) selected @endif>{{ $item->nama_merek}}</option>
        @endforeach
    </select>
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Nama Distributor:</strong>
<select class="from-control" style="width:1333px" ; name="nama_distributor">
        <option value"">Pilihan Distributor</option>
        @foreach ($distributor as $item)
        <option value="{{ $item->nama_distributor }}" @if($item->nama_distributor == $barang->nama_distributor) selected @endif>{{ $item->nama_distributor}}</option>
        @endforeach
    </select>
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Harga Barang:</strong>
<input type="number" name="harga_barang" value="{{ $barang->harga_barang }}" class="form-control" placeholder="Harga_Barang">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Harga Beli:</strong>
<input type="number" name="harga_beli" value="{{ $barang->harga_beli }}" class="form-control" placeholder="Harga_Beli">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Stok:</strong>
<input type="number" name="stok" value="{{ $barang->stok }}" class="form-control" placeholder="Stok">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Tanggal Masuk:</strong>
<input type="date" name="tanggal_masuk" value="{{ $barang->tanggal_masuk }}" class="form-control" placeholder="Tanggal_Masuk">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Nama Petugas:</strong>
<input type="string" name="nama_petugas" value="{{ $barang->nama_petugas }}" class="form-control" placeholder="Nama_Petugas">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 text-center">
<button type="submit" class="btn btn-danger"onclick="return confirm('Yakin hapus {{ $barang->nama_barang }} ?')">Submit</button>
</div>
</div>
</form>
@endsection