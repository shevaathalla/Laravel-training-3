@extends('adminlte.master')

@section('content')
<div class="row">
    <div class="col-md-4 m-3">
        <form action="/users" method="POST">
            @csrf
            <div class="form-group">
                <label for="email">Nama:</label>
                <input type="text" class="form-control" placeholder="Enter name" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" class="form-control" placeholder="Enter email" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" placeholder="Enter password" id="pwd" name="pwd">
            </div>    
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>    
</div>


@endsection
