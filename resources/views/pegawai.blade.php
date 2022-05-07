
@extends('layout.index')
@section('content')
    



    <h1 class="text-center p-3">{{ $title }} Pegawai</h1>

    @if ($msg = Session::get('succes'))
        <div class="alert alert-success alert-dismissible fade show m-5"  role="alert">
            {{ $msg }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    
    <a href="{{ route('karyawan.create') }}">
    <button type="button" class="fs-5 btn btn-success mx-5">
        Add
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
          </svg>
        </button>
    </a>

    

    <table class="m-4 table text-white">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Pegawai</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Alamat  </th>
            <th scope="col">No telepon</th>
            <th scope="col">Action</th>

          </tr>
        </thead>
        <tbody>
            @foreach ($data as $dt)

                <tr>
                    <th scope="row">{{++$i}} </th>
                    <td> {{$dt->nama}} </td>
                    <td> {{$dt->jkl}} </td>
                    <td> {{$dt->alamat}} </td>
                    <td> {{$dt->no_telp}} </td>
        
                <td>
                    
                    <a href="{{ route('karyawan.edit', $dt->id) }}" class="btn btn-warning" role="button">
                        Edit
                    </a>
                    <button type="button" class="btn btn-danger">Delete</button>
                </td>

            @endforeach

        </tbody>
    </table>

    
    <div class="row text-center">
        {!! $data->links() !!}
    </div>  
@endsection
