@extends('layouts.admin')
@section('title', '工事概要登録')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>工事概要登録</h2>
                <form action="{{ action('Admin\ConstructionController@create') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2" for="construction_name">工事名</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="construction_name" value="{{ old('construction_name') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="construction_place">工事場所</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="construction_place" value="{{ old('construction_place') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="construction_start_period">工期初日</label>
                        <div class="col-md-10">
                            <input type="date" class="form-control" name="construction_start_period" value="{{ old('construction_start_period') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="construction_end_period">工期最終日</label>
                        <div class="col-md-10">
                            <input type="date" class="form-control" name="construction_end_period" value="{{ old('construction_end_period') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="ordering_party">発注者</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="ordering_party" value="{{ old('ordering_party') }}">
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="更新">
                </form>
            </div>
        </div>
    </div>
@endsection