@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        {{ __('reservasi') }}
                    </div>
                    <div class="float-end">
                        <form action="" method="post">
                            @csrf
                            <a href="{{ route('reservasi.create') }}" class="btn btn-sm btn-outline-primary">Tambah
                                Data</a>

                        </form>
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table id="dataTable" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>Jumlah orang</th>
                                    <th>Id Pengunjung</th>
                                    <th>Id Reservasi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach ($reservasi as $data)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $data->tanggal_reservasi }}</td>
                                    <td>{!! $data->jumlah_orang !!}</td>
                                    <td>{{$data->pengunjung->nama}}</td>
                                    <td>{{$data->destinasi->nama_destinasi}}</td>

                                    <td>
                                        <form action="{{ route('reservasi.destroy', $data->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('reservasi.edit', $data->id) }}"
                                                class="btn btn-sm btn-outline-success">Edit</a> |
                                            <button type="submit" onclick="return confirm('Are You Sure ?');"
                                                class="btn btn-sm btn-outline-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
