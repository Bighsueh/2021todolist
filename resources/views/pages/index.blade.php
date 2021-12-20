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
                        <button class="btn btn-outline-success"
                                onclick=edit_data({{$row->id}})>修改</button>
                        <button class="btn btn-outline-danger"
                                onclick=delete_data({{$row->id}})>刪除</button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
<script>
    function delete_data(id){
        window.location.href = "{{route('delete_data')}}"+"?id="+id;

    }

    function edit_data(id) {
        window.location.href = "{{route('get_edit_page')}}"+"?id="+id;
    }
</script>
@endsection
