@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        {{ __('Dashboard') }}
                    </div>
                    <div class="float-end">
                        <a href="{{ route('reservasi.index') }}" class="btn btn-sm btn-outline-primary">Kembali</a>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ route('reservasi.update', $reservasi->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        {{-- <input type="text" value="{{csrf_token()}}"> --}}
                        <div class="mb-3">
                            <label class="form-label">Tanggal</label>
                            <input type="date" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal"
                                value="{{ $reservasi->tanggal }}" placeholder="tanggal Name" required>
                            @error('tanggal')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jumlah orang</label>
                            <input type="text" class="form-control @error('jumlah_orang') is-invalid @enderror" name="jumlah_orang"
                                value="{{ old('jumlah_orang') }}" placeholder="jumlah orang Name" required>
                            @error('jumlah_orang')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Pengunjung</label>
                            <select name="id_pengunjung" id="" class="form-control">
                                @foreach ($pengunjung as $item)
                                    <option value="{{$item->id}}">{{ $item->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="">Destinasi</label>
                            <select name="id_destinasi" id="" class="form-control">
                                @foreach ($destinasi as $item)
                                    <option value="{{$item->id}}">{{ $item->nama_destinasi}}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-sm btn-primary">SIMPAN</button>
                        <button type="reset" class="btn btn-sm btn-warning">RESET</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
