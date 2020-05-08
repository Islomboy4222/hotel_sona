@extends('layouts.admin')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Maqola qo'shish
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
            <form method="POST" action="{{route('admin.posts.store')}}">
                @csrf
                <div class="form-group">
                    <label for="">Sarlavha</label>
                    <input name="title" class="form-control" type="text" {{old('title')}}>
                </div>
                <div class="form-group">
                    <label for="">Qisqa</label>
                    <input name="short" class="form-control" type="text" {{old('short')}}>
                </div>
                <div class="form-group">
                    <label for="">Maqola</label>
                    <textarea name="content" class="form-control" cols="30" rows="10" {{old('content')}}></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Saqlash</button>
            </form>
        </div>
    </div>
@endsection