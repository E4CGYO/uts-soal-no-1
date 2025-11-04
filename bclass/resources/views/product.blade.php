@extends('layouts.masterlayout')
@section('title','halaman produk')
@section('content')
<h1>

{{ $product['id'] }} <br>
{{ $product['barang'] }} <br>
Rp. {{ $product['harga'] }} <br>


</h1>
@endsection
