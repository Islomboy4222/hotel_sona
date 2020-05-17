@extends('layouts.admin')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Xabarlar
            </h6>
        </div>
        <div class="card-body">
            @if(session()->has('delete'))
                <div class="alert alert-danger">
                    {{session()->get('delete')}}
                </div>
            @endif
            <table class="table table-bordered">
                <thead>
                    <th>To'liq nomi</th>
                    <th>Xabar</th>
                    <th>Vaqti</th>
                    <th>Holati</th>
                    <th width="180px">Amallar</th>
                </thead>
                <tbody>
                    @foreach($items as $post)
                        <tr>
                            <td>{{$post->name}}</td>
                            <td>{{$post->message}}</td>
                            <td>{{$post->created_at->format('d/m/Y')}}</td>
                            <td>{{$post->status ? "O'qilgan" : "O'qilmagan"}}</td>
                            <td>
                                <a class="btn btn-sm btn-primary" href="{{route('admin.feedbacks.show', $post->id)}}"><i class="fa fa-eye"></i></a>
                                <form method="POST" action="{{route('admin.feedbacks.delete', $post->id)}}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger" type="submit"><i class="fa fa-trash"></i></button>
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