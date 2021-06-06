@extends('layouts.admin')
@section('title', '工程一覧')

@section('content')
    <div class="container">
        <div class="row">
            <h2>工程一覧</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="{{ action('Admin\ProcessSheetController@add') }}" role="button" class="btn btn-primary">追加</a>
            </div>
            <div class="col-md-6">
            </div>
            <div class="col-md-2">
                <a href="{{ action('Admin\ProcessController@index', ['id' => $id]) }}" role="button" class="btn btn-primary">工程表表示</a>
            </div>
        </div>
        <div class="row">
                <p>合計日数{{$days}}</p>
        </div>
        <div class="row">
            <div class="list-ProcessSheet col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th width="20%">工種</th>
                                <th width="20%">種別</th>
                                <th width="20%">規格</th>
                                <th width="20%">日当り作業量</th>
                                <th width="10%">単位</th>
                                <th width="10%">数量</th>
                                <th width="10%">日数</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $processSheet)
                                <tr>
                                    <td>{{ \Str::limit($processSheet->work_type, 100) }}</td>
                                    <td>{{ \Str::limit($processSheet->category, 100) }}</td>
                                    <td>{{ \Str::limit($processSheet->norm, 100) }}</td>
                                    <td>{{ \Str::limit($processSheet->workload, 100) }}</td>
                                    <td>{{ \Str::limit($processSheet->unit, 100) }}</td>
                                    <td>{{ \Str::limit($processSheet->quantity, 100) }}</td>
                                    <td><?php
                                        if($processSheet->workload != 0){
                                        $day =ceil(($processSheet->quantity)/($processSheet->workload));
                                        }
                                        echo $day;
                                        ?></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection