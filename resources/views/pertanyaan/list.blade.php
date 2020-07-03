@extends('adminlte.master')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            @foreach ($list as $q)
            <div class="card-header bg-gradient-gray-dark">
                ID Pertanyaan : {{$q->id}}
            </div>
            <div class="card-body">
                <h3 class="card-title"
                    style="font-size: 32px; font-weight: bold; text-decoration: underline; color:black;"><a
                        href="/pertanyaan/{{$q->id}}">{{$q->judul}}</a></h3>
                <p class="card-text border-top">{{$q->isi}}</p>
                <a href="/jawaban/{{$q->id}}/create" class="btn btn-primary">Bantu Jawab</a>
                <a href="/jawaban/{{$q->id}}" class="btn btn-success">Lihat Jawaban</a>
                <a href="/pertanyaan/{{$q->id}}/edit" class="btn btn-light border-dark">Edit Pertanyaan</a>
                <form action="/pertanyaan/{{$q->id}}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Hapus Pertanyaan</button>
                </form>
                <br>
                <i class="fa fa-thumbs-up m-3" aria-hidden="true">&nbsp;{{$q->like}}</i>
                <i class="fa fa-thumbs-down m-3" aria-hidden="true">&nbsp;{{$q->dislike}}</i>
                <i class="fa fa-fire m-3" aria-hidden="true">&nbsp;{{$q->vote}}</i>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
