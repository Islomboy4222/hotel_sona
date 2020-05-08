@extends('layouts.admin')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Maqolalar
                <a class="btn btn-sm btn-primary float-right" href="{{route('admin.posts.create')}}">Yaratish</a>
            </h6>
        </div>
        <div class="card-body">
            @if(session()->has('success'))
                <div class="alert alert-success">
                    {{session()->get('success')}}
                </div>
            @endif
            <table class="table table-bordered">
                <thead>
                    <th>Sarlavha</th>
                    <th width="180">Amallar</th>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <td>{{$post->title}}</td>
                            <td>
                                <a class="text-white btn float-left btn-sm btn-success" href="{{route('admin.posts.show', ['id' => $post->id])}}">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a class="btn float-left btn-sm btn-warning" href="{{route('admin.posts.edit', ['id' => $post->id])}}">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <form method="POST" action="{{route('admin.posts.destroy', ['id' => $post->id])}}">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-sm btn-danger"> <i class="fa fa-trash"></i> </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{$links}}
        </div>
    </div>
@endsection