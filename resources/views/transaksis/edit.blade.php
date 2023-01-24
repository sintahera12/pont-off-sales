@extends('transaksis.layout')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Edit Transaksi</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('transaksis.index') }}"> Back</a>
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
<form action="{{ route('transaksis.update',$transaksi->id) }}" method="POST">
@csrf
@method('PUT')
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Nama Barang:</strong>
</div><select class="from-control" style="width:1333px" ; name="nama_barang">
        <option value""></option>
        @foreach ($barang as $item)
        <option value="{{ $item->nama_barang }}" @if($item->nama_barang == $transaksi->nama_barang) selected @endif>{{ $item->nama_barang}}</option>
        @endforeach
    </select>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Harga Barang:</strong>
</div><select class="from-control" style="width:1333px" name="harga_barang">
        <option value""></option>
        @foreach ($barang as $item)
        <option value="{{ $item->harga_barang }}" @if($item->harga_barang == $transaksi->harga_barang) selected @endif>{{ $item->harga_barang}}</option>
        @endforeach
    </select>
</div>
</div>
<div class="col-xs-14 col-sm-14 col-md-14">
<div class="form-group">
<strong>Total Barang:</strong>
<input type="number" name="total_barang" value="{{ $transaksi->total_barang }}" class="form-control" placeholder="Total_Barang">
</div>
<!-- </div>
<div class="col-xs-14 col-sm-14 col-md-14">
<div class="form-group">
<strong>Total Harga:</strong>
<input type="number" name="total_harga" value="{{ $transaksi->total_harga }}" class="form-control" placeholder="Total_Harga">
</div> -->
</div>
<div class="col-xs-14 col-sm-14 col-md-14">
<div class="form-group">
<strong>Total Bayar:</strong>
<input type="number" name="total_bayar" value="{{ $transaksi->total_bayar }}" class="form-control" placeholder="Total_Bayar">
</div>
</div>
<!-- <div class="col-xs-14 col-sm-14 col-md-14">
<div class="form-group">
<strong>Kembalian:</strong>
<input type="number" name="kembalian" value="{{ $transaksi->kembalian }}" class="form-control" placeholder="Kembalian">
</div>
</div>
<div class="col-xs-14 col-sm-14 col-md-14">
<div class="form-group">
<strong>Tanggal Beli:</strong>
<input type="date" name="tanggal_beli" value="{{ $transaksi->tanggal_beli }}" class="form-control" placeholder="Tanggal_Beli">
</div> -->
</div>
<div class="col-xs-14 col-sm-14 col-md-14 text-center">
<button type="submit" class="btn btn-danger"onclick="return confirm('Yakin hapus {{ $transaksi->nama_barang }} ?')">Submit</button>
</div>
</div>
</form>
@endsection