@extends('layouts.master')

@section('content')
    <div class="ml-3 mt-3">
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Artikel</h3>
              </div>

              <form role="form" action="/artikel" method="POST">
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="judul">Judul Artikel</label>
                    <input type="text" class="form-control" id="judul" name = "judul" placeholder="Judul Artikel">
                  </div>
                  <div class="form-group">
                    <label for="isi">Masukkan Artikel</label>
                    <textarea class="form-control" id="isi" name = "isi" placeholder="Isi Artikel" cols="30" rows="10"></textarea>
                  </div>

                  <input hidden type="text" id="slug" name="slug" value="slug">
                  <input hidden type="text" id="tag" name="tag" value="tag"> 
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
        </div>
    </div>
@endsection