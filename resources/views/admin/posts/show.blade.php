@extends('layouts.admin')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                {{$post->title}} - ko'rish
            </h6>
        </div>
        <div class="card-body">
            <h3>{{$post->title}}</h3>
            <b>Qisqa</b>
            <p>{{$post->short}}</p>

            <b>Maqola</b>
            <p>{{$post->content}}</p>
        </div>
    </div>
@endsection