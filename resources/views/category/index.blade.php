@extends('layouts.app')

@section('content')

<div class="container">
    <h3>Data Kategori
    <a href="{{ url('/category/create') }}" class="btn btn-primary btn-sm float-right">Tambah Data</a>
    </h3>
</br>
    
    <table class="table table-bordered">
        <tr>
            <th>Id</th>
            <th>Kategori</th>
            <th>Keterangan</th>
            <th>Aksi</th>
           
        </tr>
        @foreach($rows as $row)
        <tr>
            <td>{{ $row->cat_id }}</td>
            <td>{{ $row->name }}</td>
            <td>{{ $row->text }}</td>
            <td><a href="{{ url('category/' . $row->cat_id . '/edit') }}" class="btn btn-primary btn-sm">Edit</a>
            
            
            <!-- <form action="{{ url('/category/' . $row->cat_id) }}" method="POST"> -->

            <input name="_method" type="hidden" value="DELETE"> 
            @csrf
            <button class="btn btn-danger btn-sm">Hapus</button>
             </form>
</td>
        </tr>
        @endforeach
    </table>
</div>
@endsection