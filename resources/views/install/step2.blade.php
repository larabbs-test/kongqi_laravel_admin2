@extends('install.layout')

@section('content')

    <div class="container mt-2">
        <div class="card shadow mb-4">

            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">{{ lang('环境检测') }}</h6>

            </div>

            <div class="card-body">
                <div class="table-responsive mb-4">
                    <h4 class="f14">{{ lang('函数扩展检查') }}</h4>
                    <table class="table table-bordered  table-striped ">
                        <thead>
                        <tr>
                            <th>{{ lang('目录') }}/{{ lang('文件') }}</th>
                            <th>{{ lang('所需状态') }}</th>
                            <th>{{ lang('当前状态') }}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($check_path as $k=>$item)
                            <tr>
                                <td>{{ $item['path'] }}</td>
                                <td>{{ lang('可写') }}</td>
                                <td>{{$item['title']}} <i class=" {{$item['icon']}}"></i></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="table-responsive mb-4">
                    <h4 class="f14">{{ lang('系统检查') }}</h4>
                    <table class="table table-bordered table-striped ">

                        <thead>
                        <tr>

                            <th> {{ lang('目录') }}/{{ lang('文件') }}</th>
                            <th>{{ lang('所需配置') }}</th>
                            <th>{{ lang('当前配置') }}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($check_env as $k=>$item)
                            <tr>
                                <td>{{$item['title'] }}</td>
                                <td><i class="{{$item['icon']}} text-success"></i> {{ $item['limit'] }}
                                </td>
                                <td><i class=" {{$item['icon']}}"></i> {{$item['current'] }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="table-responsive mb-4">
                    <h4 class="f14">{{ lang('函数扩展检查') }}</h4>
                    <table class="table table-bordered table-striped">

                        <thead>
                        <tr>
                            <th>{{ lang('名称') }}</th>
                            <th>{{ lang('检查结果') }}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($ext as $k=>$item)
                            <tr>
                                <td>{{$item['name']}}</td>
                                <td><i class=" {{$item['icon']}}"></i> {{$item['title']}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer">
                <a href="{{ route('system.install',['step'=>3]) }}" class="btn btn-success mr-4">{{ lang('下一步') }}</a>
                <a href="{{ route('system.install') }}" class="btn btn-secondary mr-4">{{ lang('上一步') }}</a>
            </div>
        </div>


    </div>






@endsection