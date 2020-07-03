@extends('adminlte.master')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">            
            <div class="card-header bg-gradient-gray-dark">
                ID Pertanyaan : {{$data->id}}
            </div>
            <div class="card-body">
            <h3 class="card-title" style="font-size: 32px; font-weight: bold; text-decoration: underline; color:black;"><a href="/pertanyaan/{{$data->id}}">{{$data->judul}}</a></h3>            
                <p class="card-text border-top">{{$data->isi}}</p>
                <p class="card-text">Pertanyaan dibuat pada tanggal : &nbsp;{{$data->created_at}}</p>
                <a href="/jawaban/{{$data->id}}/create" class="btn btn-primary">Bantu Jawab</a>                
                <a href="#" class="btn btn-danger">Hapus Pertanyaan</a>
                <a href="#" class="btn btn-light border-dark">Edit Pertanyaan</a>
                <br>
                <i class="fa fa-thumbs-up m-3" aria-hidden="true">&nbsp;{{$data->like}}</i>
                <i class="fa fa-thumbs-down m-3" aria-hidden="true">&nbsp;{{$data->dislike}}</i>
                <i class="fa fa-fire m-3" aria-hidden="true">&nbsp;{{$data->vote}}</i>                
            </div>            
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            @foreach ($jawaban as $a)
            <div class="card-header bg-gradient-green">
                ID Jawaban : {{$a->id}}
            </div>
            <div class="card-body bg-green">
            <h3 class="card-title"><b>{{$a->judul}} (JAWABAN UNTUK PERTANYAAN DENGAN ID :{{$a->pertanyaan_id}})</b></h3>
                <p class="card-text border-top" style="font-size: 24px;">{{$a->isi}}</p>           
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
