@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <div class="row">
                        <div class="col-lg-12 margin-tb">
                            <div class="pull-left mt-2">
                                <h2>DATA BUKU PERPUSTAKAAN</h2>
                            </div>
                            <div class="float-right my-2">
                                <a class="btn btn-success" href="{{ route('home.create') }}"> Input Buku</a>
                            </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                    @endif
                    <table class="table table-bordered">
                        <tr>
                            <th>Id Buku</th>
                            <th>Judul</th>
                            <th>Kategori</th>
                            <th>Penerbit</th>
                            <th>Pengarang</th>
                            <th>Jumlah</th>
                            <th>Status</th>
                            <th width="280px">Action</th>
                        </tr>
                        @foreach ($buku as $Buku)
                        <tr>

                            <td>{{ $Buku->id_buku}}</td>
                            <td>{{ $Buku->judul }}</td>
                            <td>{{ $Buku->kategori }}</td>
                            <td>{{ $Buku->penerbit }}</td>
                            <td>{{ $Buku->pengarang }}</td>
                            <td>{{ $Buku->jumlah }}</td>
                            <td>{{ $Buku->status }}</td>
                            <td>
                                <form action="{{ route('home.destroy',$Buku->id_buku) }}" method="POST">
                                    <a class="btn btn-info" href="{{ route('home.show',$Buku->id_buku) }}">Show</a>
                                    <a class="btn btn-primary" href="{{ route('home.edit',$Buku->id_buku) }}">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    {{$buku->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
