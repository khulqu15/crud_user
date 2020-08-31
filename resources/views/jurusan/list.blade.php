@extends('layouts.frontend')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nama Jurusan</th>
                            <th>Prodi</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jurusan as $jur)
                        <tr>
                            <td scope="row">{{ $jur->nama_jurusan }}</td>
                            <td>{{ $jur->jenis_prodi }}</td>
                            <td>
                                <form action="{{ url('jurusan/'.$jur->id) }}" method="POST">
                                    <a href="{{ url('jurusan/'.$jur->id) }}" class="btn btn-warning p-2">Lihat</a>
                                    <a href="{{ url('jurusan/'.$jur->id.'/edit') }}" class="btn btn-success p-2">Edit</a>
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger p-2">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>
        function onDelete(id) {
            confirm('Yakin Mau Dihapus');
            $.ajax({
                url: '{{ url("jurusan") }}/' + id,
                type: 'DELETE',
                success: function(response) {
                    console.log(response);
                    alert('Berhasil dihapus');
                }
            });
        }
    </script>
@endsection
