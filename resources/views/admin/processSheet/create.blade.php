@extends('layouts.admin')
@section('title', '工程新規追加')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>工程新規追加</h2>
                <form action="{{ action('Admin\ProcessSheetController@create') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2">工種</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="worktype" value="{{ old('worktype') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">種別</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="category" value="{{ old('category') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">規格</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="norm" value="{{ old('norm') }}">
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="更新">
                </form>
            </div>
        </div>
    </div>
@endsection