@extends('layouts.admin')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                {{$post->title}} o'zgartirish
            </h6>
        </div>
        <div class="card-body">
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li> {{$error}} </li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="{{route('admin.posts.update', ['id' => $post->id])}}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="">Sarlavha</label>
                    <input name="title" value="{{$post->title}}" class="form-control" type="text">
                </div>
                <div class="form-group">
                    <label for="">Qisqa</label>
                    <input name="short" value="{{$post->short}}" class="form-control" type="text">
                </div>
                <div class="form-group">
                    <label for="">Maqola</label>
                    <textarea name="content" class="form-control" cols="30" rows="10">{{$post->content}}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Saqlash</button>
            </form>
        </div>
    </div>
@endsection