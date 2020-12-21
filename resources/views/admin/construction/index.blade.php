@extends('layouts.admin')
@section('title', '工事一覧')

@section('content')
    <div class="container">
        <div class="row">
            <h2>工事一覧</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="{{ action('Admin\ConstructionController@add') }}" role="button" class="btn btn-primary">新規作成</a>
            </div>
            <div class="col-md-8">
                <form action="{{ action('Admin\ConstructionController@index') }}" method="get">
                    <div class="form-group row">
                        <label class="col-md-2">工事名</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="cond_title" value="{{ $cond_title }}">
                        </div>
                        <div class="col-md-2">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="検索">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="container">
            <div class="right-contents">
                <a href="{{ action('Admin\ProcessSheetController@add') }}" role="button" class="btn btn-primary">工程追加</a>
            </div>
            <div class="left-contents">
                <div class="row">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th width="10%">ID</th>
                                <th width="20%">工事名</th>
                                <th width="20%">工事場所</th>
                                <th width="20%">工期初日</th>
                                <th width="20%">工期最終日</th>
                                <th width="20%">発注者</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $construction)
                                <tr>
                                    <th>{{ $construction->id }}</th>
                                    <td>{{ \Str::limit($construction->construction_name, 100) }}</td>
                                    <td>{{ \Str::limit($construction->construction_place, 100) }}</td>
                                    <td>{{ \Str::limit($construction->construction_start_period, 100) }}</td>
                                    <td>{{ \Str::limit($construction->construction_end_period, 100) }}</td>
                                    <td>{{ \Str::limit($construction->ordering_party, 100) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection