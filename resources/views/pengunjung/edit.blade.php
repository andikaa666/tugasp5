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
                        <a href="{{ route('pengunjung.index') }}" class="btn btn-sm btn-outline-primary">Kembali</a>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ route('pengunjung.update', $pengunjung->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        {{-- <input type="text" value="{{csrf_token()}}"> --}}
                        <div class="mb-3">
                            <label class="form-label">Nama pengunjung</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                                value="{{ $pengunjung->nama }}" placeholder="pengunjung Name" required>
                            @error('nama')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Alamat pengunjung</label>
                            <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat"
                                value="{{ old('alamat') }}" placeholder="alamat Name" required>
                            @error('alamat')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">No Telepon</label>
                            <textarea class="form-control" class="form-control @error('no_telepon') is-invalid @enderror"
                                name="no_telepon" rows="3" placeholder="No telepon"
                                required>{{ $pengunjung->deskripsi }}</textarea>
                            @error('no_telepon')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
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
