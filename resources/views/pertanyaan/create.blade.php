@extends('adminlte.master')
@section('content')
<form action="/pertanyaan" method="POST">
    @csrf
    <div class="row">
        <div class="col-md-6 m-3">
          <div class="form-group">
            <label for="email">ID Pembuat :</label>
            <input type="text" class="form-control" placeholder="Enter ID" id="id" name="id">
        </div>
            <div class="form-group">
                <label for="email">Judul:</label>
                <input type="text" class="form-control" placeholder="Enter name" id="judul" name="judul">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Isi PErtanyaan</label>
                <textarea class="form-control" id="isi" name="isi" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>

@endsection
