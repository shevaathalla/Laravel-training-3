@extends('adminlte.master')

@section('content')
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>NAMA USER</th>
            <th>EMAIL</th>
            <th>PHOTO</th>            
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $usr)
        <tr>
            <td>{{$usr->id }}</td>
            <td>{{$usr->name }}</td>
            <td>{{$usr->email }}</td>
            <td>{{$usr->photo }}</td>
        </tr>        
        @endforeach        
    </tbody>
</table>
@endsection
