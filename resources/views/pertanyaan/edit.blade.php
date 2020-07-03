@extends('adminlte.master')
@section('content')
<form action="/pertanyaan/{{$data->id}}/" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-md-6 m-3">
            <h3 class="header"> UPDATE DATA</h3>
            <div class="form-group">
                <label for="id">ID Pembuat :</label>
            <input type="text" class="form-control" placeholder="Enter ID" id="id" name="id" value="{{$data->users_id}}">
            </div>
            <div class="form-group">
                <label for="judul">Judul:</label>
                <input type="text" class="form-control" placeholder="Enter name" id="judul" name="judul" value="{{$data->judul}}">
            </div>
            <div class="form-group">
                <label for="isi">Isi Pertanyaan</label>
                <textarea class="form-control" id="isi" name="isi" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </div>

</form>

@endsection
