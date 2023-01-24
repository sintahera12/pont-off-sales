@extends('transaksis.layout')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Add New Transaksi</h2>
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
<form action="{{ route('transaksis.store') }}" method="POST">
@csrf
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Nama Barang:</strong>
<select class="from-control" style="width:1333px" id="nama_barang" name="nama_barang">
        <option value"">Pilihan Barang</option>
        @foreach ($barang as $item)
        <option value="{{ $item->nama_barang }}">{{ $item->nama_barang}}</option>
        @endforeach
    </select>
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Harga Barang:</strong>
<select class="from-control" style="width:1333px" id="harga_barang" name="harga_barang">
        <option value"">Harga Barang</option>
        @foreach ($barang as $item)
        <option value="{{ $item->harga_barang }}">{{ $item->harga_barang}}
        @endforeach
    </select>
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Total Barang:</strong>
<input type="number" min="0" max="" name="total_barang" class="form-control" placeholder="Total_Barang">
</div>
<!-- </div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Total Harga:</strong>
<input type="number" min="0" max="" name="total_harga" class="form-control" placeholder="Total_Harga">
</div> -->
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Total Bayar:</strong>
<input type="number" min="0" max="" name="total_bayar" class="form-control" placeholder="Total_Bayar">
</div>
<!-- </div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Kembalian:</strong>
<input type="number" min="0" max="" name="kembalian" class="form-control" placeholder="kembalian">
</div> -->
<!-- </div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Tanggal Beli:</strong>
<input type="date" name="tanggal_beli" class="form-control" placeholder="tanggal_beli">
</div> -->
</div>
<div class="col-xs-12 col-sm-12 col-md-12 text-center">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</form>
@endsection
