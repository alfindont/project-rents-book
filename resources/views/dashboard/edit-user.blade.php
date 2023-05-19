@extends('layouts.main')

@section('title','Edit-User')
@section('content')
<form action="{{route('updateUser', $data->id)}}" method="post">
    @csrf
    <a href="/users" class="btn btn-success mb-4">kembali</a>
<div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>
  <div class="mb-3">
    <label for="Email" class="form-label">Email</label>
    <input type="email"  class="form-control" id="email" name="email">
  </div>
  <div class="mb-3">
    <label for="noHp" class="form-label">No Hp</label>
    <input type="number" class="form-control" id="noHp" name="no_hp">
  </div>
  <div class="mb-3">
    <label for="address" class="form-label">Address</label>
    <textarea class="form-control" id="address" rows="3" name="address"></textarea>
   <center> <button type="submit" class="btn btn-primary btn-lg btn-block mt-4 ">edit</button> </center>
  </div>
</form>

@endsection