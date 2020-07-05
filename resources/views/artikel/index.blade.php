@extends('layouts.master')

@section('content')
    <div class="ml-3 mt-3">
        <h1>Daftar Artikel</h1>
        <a href="artikel/create" class="btn btn-primary">
            Tambah artikel
        </a>
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul Artikel</th>
                    <th>Isi Artikel</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($artikels as $artikel)
                <tr>
                    <td> {{ $loop->iteration }}</td>
                    <td> {{ $artikel->judul }}</td>
                    <td> {{ $artikel->isi }}</td>
                    <td>
                        <a href="{{ url ('/artikel/'.$artikel->id) }}" class="btn btn-primary">Lihat</a>
                        <a href="/artikel/{{$artikel->id}}/edit" class="btn btn-warning">Edit</a>
                        <form action="/artikel/{{$artikel->id}}" method="POST" style="display: inline">
                            @csrf
                            @method ('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                        </form>

                    </td>
                
                </tr>
                @endforeach
            </tbody>
        
        </table>
    
    </div>

@endsection

@push('scripts')
<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    });
</script>
@endpush