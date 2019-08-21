@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Biodata List
                <a href="{{ route('biodata.create') }}" class="btn btn-secondary btn-sm">Tambah Data</a>
                </div>
                <form method="POST" action="{{route('biodata.pencarian')}}">
                    @csrf
                <div class="card">
                <div class="card-header">Pencarian
                    <input type="text" name="cari" class="form-control">
                </div>
                <button type="submit" class="btn btn-info">Cari</button>
                </form>
                @if (session('pesan'))
                    <div class="alert alert-info">
                        <b>Berhasil</b>:{{session('pesan')}}
                    </div>
                @endif    
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>Usia</th>
                            <th colspan="2">Aksi</th>
                        </tr>
                            <?php $no=1; ?>
                         @foreach ($biodata as $item)
                         <tr>
                            <td>{{$no}}</td>
                            <td>{{$item->nama}}</td>
                            <td>{{$item->jenis_kelamin}}</td>
                            <td>{{$item->alamat}}</td>
                            <td>{{$item->usia}}</td>
                            <td>
                                
                                <a href="{{ route('biodata.edit',$item->id) }}" class="btn btn-info btn-sm">Edit</a>
                                <form method="POST" action="{{ route('biodata.destroy',$item->id) }}">
                                    @csrf
                                    @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                            <?php $no++ ?>
                         @endforeach                        
                    </table>
                </div>
            </div>
                {{$biodata->links() }}
        </div>
    </div>
</div>
@endsection