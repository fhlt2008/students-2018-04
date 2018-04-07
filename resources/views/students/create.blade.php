@extends('layouts.default')

@section('title','创建新学生')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h5>创建新学生</h5>
        </div>
        <div class="panel-body">
            <form action="{{ route('students.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">姓名：</label>
                    <input type="text" class="form-control" name="name" id="name">
                </div>
                <div class="form-group">
                    <label for="gender">性别：</label>
                    <input type="text" class="form-control" name="gender" id="gender">
                </div>
                <div class="form-group">
                    <label for="birthday">出生日期：</label>
                    <input type="date" class="form-control" name="birthday" id="birthday">
                </div>
                <div class="form-group">
                    <label for="username">学号：</label>
                    <input type="text" class="form-control" name="username" id="username">
                </div>
                <div class="form-group">
                    <label for="nation">民族：</label>
                    <input type="text" class="form-control" name="nation" id="nation">
                </div>
                <div class="form-group">
                    <label for="politics">政治面貌：</label>
                    <input type="text" class="form-control" name="politics" id="politics">
                </div>
                <div class="form-group">
                    <label for="origin">籍贯</label>
                    <input type="text" class="form-control" name="origin" id="origin">
                </div>
                <div class="form-group">
                    <label for="card_id">身份证号：</label>
                    <input type="text" class="form-control" name="card_id" id="card_id">
                </div>
                <div class="form-group">
                    <label for="dormitory">宿舍：</label>
                    <input type="text" class="form-control" name="dormitory" id="dormitory">
                </div>
                <div class="form-group">
                    <label for="phone">手机号：</label>
                    <input type="text" class="form-control" name="phone" id="phone">
                </div>
                <div class="form-group">
                    <label for="qq">QQ号：</label>
                    <input type="text" class="form-control" name="qq" id="qq">
                </div>
                <div class="form-group">
                    <label for="we_chat">微信号：</label>
                    <input type="text" class="form-control" name="we_chat" id="we_chat">
                </div>
                <div class="form-group">
                    <label for="email">Email：</label>
                    <input type="text" class="form-control" name="email" id="email">
                </div>
                <div class="form-group">
                    <label for="address">家庭住址：</label>
                    <input type="text" class="form-control" name="address" id="address">
                </div>

                <button class="btn btn-primary">提交</button>
            </form>
        </div>
    </div>
@endsection