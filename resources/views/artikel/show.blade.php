@extends('layouts.master')

@section('content')
    <div class="ml-3 mt-3">
        <h3>Judul : {{ $artikel->judul}}</h3>
        <p>slug : {{ $artikel->slug}}</p>   
        <p>Isi : {{ $artikel->isi}}</p>  
    </div>
    <div>
        <a href="#" class="btn btn-sm btn-success">info</a>
        <a href="#" class="btn btn-sm btn-success">web</a>
        <a href="#" class="btn btn-sm btn-success">phplaravel</a>
    </div>
    <br>
    <div>
        <a href="/artikel" class="btn btn-sm btn-primary">Kembali</a>
    </div>

@endsection