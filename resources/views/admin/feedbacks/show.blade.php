@extends('layouts.admin')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Xabarni o'qish
            </h6>
        </div>
        <div class="card-body">
            <table class='table table-striped'>
                <tr>
                    <td>To'liq ismi</td>
                    <td>{{$posts->name}}</td>
                </tr>
                <tr>
                    <td>Xabar</td>
                    <td>{{$posts->message}}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>{{$posts->email}}</td>
                </tr>
                <tr>
                    <td>Vaqti</td>
                    <td>{{$posts->created_at}}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection