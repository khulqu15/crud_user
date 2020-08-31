@extends('layouts.frontend')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if((\Route::current()->getName() == 'jurusan.edit'))
                    <form action="{{ url('jurusan/'.$jurusan->id) }}" method="POST">
                    {!! method_field('patch') !!}
                    <p>Edit Jurusan</p>
                @else
                    <form action="{{ route('jurusan.store') }}" method="POST">
                    <p>Tambah Jurusan</p>
                @endif
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="nama_jurusan">Nama Jurusan</label>
                        <input type="text" name="nama_jurusan" value="{{ \Route::current()->getName() == 'jurusan.create' ? '' : $jurusan->nama_jurusan}}" id="nama_jurusan" class="form-control" placeholder="Nama Jurusan" aria-describedby="namaJurusanId">
                        <small id="namaJurusanId" class="text-muted"></small>
                    </div>
                    <div class="form-group">
                        <label for="jenis_prodi">Jenis Prodi</label>
                        <input type="text" name="jenis_prodi" value="{{ \Route::current()->getName() == 'jurusan.create' ? '' : $jurusan->jenis_prodi}}" id="jenis_prodi" class="form-control" placeholder="Prodi Jurusan" aria-describedby="prodiJurusanId">
                        <small id="prodiJurusanId" class="text-muted"></small>
                    </div>
                    <button type="submit" class="btn btn-primary px-5">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
