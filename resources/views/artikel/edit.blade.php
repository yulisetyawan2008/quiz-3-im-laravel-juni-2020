@extends('layouts.master')

@section('content')

    <div class="ml-3 mt-3">
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Artikel</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="/artikel/{{$artikel->id}}" method="POST">
              @csrf
              @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="judul">Judul Artikel</label>
                    <input type="text" class="form-control" id="judul" name = "judul" value="{{$artikel->judul}}">
                  </div>
                  <div class="form-group">
                    <label for="isi">Masukkan Artikel</label>
                    <input type="text" class="form-control" id="isi" name = "isi" value="{{$artikel->isi}}">
                  </div>
                    <input hidden type="text" class="form-control" id="slug" name = "slug" value="{{$artikel->slug}}">
                    <input hidden type="text" class="form-control" id="tag" name = "tag" value="{{$artikel->tag}}">
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
        </div>
    </div>
@endsection