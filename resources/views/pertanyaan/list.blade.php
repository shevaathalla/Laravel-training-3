@extends('adminlte.master')

@section('content')
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>JUDUL</th>
            <th>ISI</th>
            <th>PEMBUAT</th>
            <th>LIKE</th>
            <th>DISLIKE</th>
            <th>VOTE</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($list as $q)
        <tr>
            <td>{{$q->id }}</td>
            <td>{{$q->judul }}</td>
            <td>{{$q->isi }}</td>
            <td>{{$q->users_id }}</td>
            <td>{{$q->like }}</td>
            <td>{{$q->dislike }}</td>
            <td>{{$q->vote }}</td>
        </tr>        
        @endforeach        
    </tbody>
</table>
@endsection
