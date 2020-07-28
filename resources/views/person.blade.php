@extends('layouts.master')
@section('title','Person - Details')
@section('content')
<table class="table table-bordered table-hover table-striped mt-5 mb-5" id="myTable">
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

@section('script')
    <script>
        function myFunction() {
        // Declare variables
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        
        // Loop through all table rows, and hide those who don't match the search query
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
            }
        }
        }
    </script>
@endsection