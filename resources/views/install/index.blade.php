@extends('install.layout')

@section('content')

    <div class="container mt-2">
        <div class="card shadow mb-4">

            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"> {{ lang('安装协议') }}</h6>

            </div>

            <div class="card-body">
                {!! lang('copyright.protocol') !!}
            </div>
            <div class="card-footer">
                <a href="{{ route('system.install',['step'=>2]) }}" class="btn btn-success mr-4">{{ lang('下一步') }}</a>
                <a href="{{ url('/') }}" class="btn   btn-primary">{{ lang('首页') }}</a>
            </div>
        </div>

    </div>






@endsection