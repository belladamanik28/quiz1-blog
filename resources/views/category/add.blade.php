@extends('layouts.app')

@section('content')

<div class="container">
    <h3>Tambah Kategori</h3>
    <form action="{{ url('/category') }}">
    @csrf
    <div class="form-group">
           <label for="">KATEGORI</label>
            <td><input type="text" name="name" class="form-control"></td>
      
          <label for="">KETERANGAN</label>
            <td><input type="text" name="text" class="form-control"></td>
   
</br>
            <input type="submit" value="SIMPAN" class="btn btn-primary float-right">
  
</form>
</div>
@endsection