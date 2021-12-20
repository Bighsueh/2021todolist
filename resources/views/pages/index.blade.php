@extends('layouts.master')
@section('content')
    <div class="container p-3">
        <table class="table">
            <thead>
            <tr>
                <td>標題</td>
                <td>內容</td>
                <td>備註</td>
                <td>功能</td>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $row)
                <tr>
                    <td class="col-sm-3">{{$row->title}}</td>
                    <td class="col-sm-3">{{$row->content}}</td>
                    <td class="col-sm-3">{{$row->remark}}</td>
                    <td class="col-sm-3">
                        <button class="btn btn-outline-success">修改</button>
                        <button class="btn btn-outline-danger"
                                onclick=window.location.href={{route('delete')}}?delete_id={{$row->id}}>刪除</button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
