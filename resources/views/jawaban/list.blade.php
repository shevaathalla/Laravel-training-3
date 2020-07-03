@extends('adminlte.master')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            @foreach ($list as $a)
            <div class="card-header bg-gradient-green">
                ID Jawaban : {{$a->id}}
            </div>
            <div class="card-body">
            <h3 class="card-title"><b>{{$a->judul}} untuk pertanyaan dengan ID :{{$a->pertanyaan_id}}</b></h3>
                <p class="card-text">{{$a->isi}}</p>           
                <br>
            <i class="fa fa-thumbs-up mr-3" aria-hidden="true">&nbsp;{{$a->like}}</i>
            <i class="fa fa-thumbs-down mr-3" aria-hidden="true">&nbsp;{{$a->dislike}}</i>
            <i class="fa fa-fire" aria-hidden="true">&nbsp;{{$a->vote}}</i>
            </div>
            @endforeach            
        </div>
    </div>
</div>
@endsection
