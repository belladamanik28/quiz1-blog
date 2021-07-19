@extends('layouts.app')
@section('content') 

<div class="container">

<h3>Edit Data Kategori</h3>
<form action="{{ url('/category/' . $row->cat_id) }}" method="POST">
    <input type="hidden" name="_method" value="PATCH">
    @csrf
    <table>
        <tr>
            <td>Id</td>
            <td><input type="text" name="name" value="value="{{ $row->cat_id }}"></td>
        </tr>
        <tr>
            <td>Kategori</td>
            <td><input type="text" name="name" value="value="{{ $row->name }}"></td>
        </tr>
        <tr>
            <td>Keterangan</td>
            <td><input type="text" name="name" value="value="{{ $row->text }}"></td>
        </tr>

    </table>
</form>
</div>
@endsection