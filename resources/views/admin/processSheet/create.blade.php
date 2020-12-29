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
                            <input type="hidden" name="constructions_id" value="{{ $construction_id}}">
                    <div class="form-group row">
                        <label class="col-md-2" for="work_type">工種</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="work_type" value="{{ old('work_type') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="category">種別</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="category" value="{{ old('category') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="norm">規格</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="norm" value="{{ old('norm') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="workload">日当り作業量</label>
                        <div class="col-md-10">
                            <input type="number" class="form-control" name="workload" value="{{ old('workload') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="unit">単位</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="unit" value="{{ old('unit') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="quantity">数量</label>
                        <div class="col-md-10">
                            <input type="number" class="form-control" name="quantity" value="{{ old('quantity') }}">
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="追加">
                </form>
            </div>
        </div>
    </div>
@endsection