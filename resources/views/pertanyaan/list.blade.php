@extends('adminlte.master')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            @foreach ($list as $q)
            <div class="card-header">
                ID Pertanyaan : {{$q->id}}
            </div>
            <div class="card-body">
                <h3 class="card-title"><b>{{$q->judul}}</b></h3>
                <p class="card-text">{{$q->isi}}</p>
                <a href="#" class="btn btn-primary">Bantu Jawab</a>
                <a href="#" class="btn btn-success">Lihat Jawaban</a>
                <br>
            <i class="fa fa-thumbs-up mr-3" aria-hidden="true">&nbsp;{{$q->like}}</i>
            <i class="fa fa-thumbs-down mr-3" aria-hidden="true">&nbsp;{{$q->dislike}}</i>
            <i class="fa fa-fire" aria-hidden="true">&nbsp;{{$q->vote}}</i>
            </div>
            @endforeach            
        </div>
    </div>
</div>
@endsection
