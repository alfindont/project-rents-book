@extends('layouts.main')

@section('title','user')
@section('content')
<table class="table">
    <thead>
      <tr class="table dark">
        <th>No</th>
        <th>Name</th>
        <th>Email</th>
        <th>No_hp</th>
        <th>Address</th>
        <th>Action</th>
      </tr>
    </thead>
    <?php $i=1;?> 
    @foreach($data as $datas)
    <tbody>
      <tr>
        <td>{{$i++}}</td>
        <td>{{$datas->name}}</td>
        <td>{{$datas->email}}</td>
        <td>{{$datas->no_hp}}</td>
        <td>{{$datas->address}}</td>
        <td>
            <form action="{{route('deleteUser', $datas->id)}}" method="post">
                <a href="{{route('editUser', $datas->id)}}" class="btn btn-primary">edit</a>
                <button class="btn btn-danger">Delete</button>
                @csrf
              </form>
    </tbody>   
    @endforeach 
  </table>
@endsection