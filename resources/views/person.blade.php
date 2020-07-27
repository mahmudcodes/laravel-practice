@extends('layouts.master')
@section('title','Person - Details')
@section('content')
<table class="table table-bordered table-hover table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">E-Mail</th>
        <th scope="col">Address</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($person_list as $person)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $person->name }}</td>
                <td>{{ $person->email }}</td>
                <td>{{ $person->address }}</td>
            </tr>
        @endforeach
    </tbody>
  </table>
@endsection