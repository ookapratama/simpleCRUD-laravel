@extends('layout.index')

@section('content')
    
<h1 class="text-center pt-5">{{ $title }} Pegawai</h1>


@if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show mx-5 " role="alert">
        <b>Oops! </b> Ada yang tidak beres.  
        <ul>
            @foreach ($errors->all() as $error)
                <li>
                    {{ $error }}
                </li>
            @endforeach
        </ul>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<div class="container-fluid">
    <div class="mt-5 d-flex justify-content-center">
        <div class="card">
            <div class="card-body bg-dark">
                
                <form method="post" action="{{ route('karyawan.update', $karyawan->id) }}">
                    {{ csrf_field() }}
                    
                    @method('PUT')
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama</label>
                        <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old('nama',$karyawan->nama) }}">                
                    </div>

                    <div class="fs-6">Jenis Kelamin</div>
                    <div class="d-flex justify-content-between my-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jkl" id="flexRadioDefault1" value="L">
                            <label class="form-check-label" for="flexRadioDefault1">
                            Laki-laki
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jkl" id="flexRadioDefault1" value="P">
                            <label class="form-check-label" for="flexRadioDefault1">
                            Perempuan
                            </label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Alamat lengkap</label>
                        <input name="alamat" type="text" class="form-control" id="exampleInputPassword1" value="{{ old('alamat',$karyawan->alamat) }}">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">No Telepon</label>
                        <input name="no_telp" type="text" class="form-control" id="exampleInputPassword1" value="{{ old('no_telp',$karyawan->no_telp) }}">
                    </div>
                    
                    <button type="submit" class="btn btn-warning" >Submit</button>
                    <button type="reset" class="btn btn-secondary ms-3">Reset</button>
                    <a href="{{ route('karyawan.index') }}" class="btn btn-danger float-end" role="button">
                        Back
                    </a>
                </form>

            </div>
        </div>

    </div>
</div>

@endsection