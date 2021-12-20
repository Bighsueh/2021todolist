@extends('layouts.master')
@section('content')
    <div class="container">
        <form class="form-group m-5" action="{{route('store_create_data')}}" method="post">
            @csrf
                <div class="row form-group">
                    <label class="col-sm-3 text-right">標題</label>
                    <input class="form-control col-sm-6" name="title">
                </div>
                <div class="row form-group">
                    <label class="col-sm-3 text-right">內容</label>
                    <input class="form-control col-sm-6" name="content">
                </div>
                <div class="row form-group">
                    <label class="col-sm-3 text-right">備註</label>
                    <input class="form-control col-sm-6" name="remark">
                </div>
                <div class="row form-group justify-content-center">
                    <button class="btn btn-outline-info col-sm-3" type="submit">送出新增</button>
                </div>
        </form>
    </div>


@endsection
