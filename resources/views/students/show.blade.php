@extends('layouts.default')
@section('title',$student->name)

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h5>学生信息</h5>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-3">姓名</div>
                <div class="col-md-9">{{ $student->name }}</div>
            </div>
            <div class="row">
                <div class="col-md-3">性别</div>
                <div class="col-md-9">{{ $student->gender }}</div>
            </div>
            <div class="row">
                <div class="col-md-3">学号</div>
                <div class="col-md-9">{{ $student->username }}</div>
            </div>
            <div class="row">
                <div class="col-md-3">出生日期</div>
                <div class="col-md-9">{{ $student->birthday }}</div>
            </div>
            <div class="row">
                <div class="col-md-3">民族</div>
                <div class="col-md-9">{{ $student->nation }}</div>
            </div>
            <div class="row">
                <div class="col-md-3">政治面貌</div>
                <div class="col-md-9">{{ $student->politics }}</div>
            </div>
            <div class="row">
                <div class="col-md-3">籍贯</div>
                <div class="col-md-9">{{ $student->origin }}</div>
            </div>
            <div class="row">
                <div class="col-md-3">身份证号</div>
                <div class="col-md-9">{{ $student->card_id }}</div>
            </div>
            <div class="row">
                <div class="col-md-3">宿舍</div>
                <div class="col-md-9">{{ $student->dormitory }}</div>
            </div>
            <div class="row">
                <div class="col-md-3">手机号</div>
                <div class="col-md-9">{{ $student->phone }}</div>
            </div>
            <div class="row">
                <div class="col-md-3">QQ号</div>
                <div class="col-md-9">{{ $student->qq }}</div>
            </div>
            <div class="row">
                <div class="col-md-3">微信号</div>
                <div class="col-md-9">{{ $student->we_chat }}</div>
            </div>
            <div class="row">
                <div class="col-md-3">Email</div>
                <div class="col-md-9">{{ $student->email }}</div>
            </div>
            <div class="row">
                <div class="col-md-3">家庭住址</div>
                <div class="col-md-9">{{ $student->address }}</div>
            </div>
        </div>
    </div>
@endsection