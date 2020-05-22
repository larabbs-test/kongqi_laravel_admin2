@extends('install.layout')

@section('content')
    <div class="container mt-2">
        <div class="card card shadow mb-4">
            <div class="card-header">{{ lang('安装完成') }}</div>

            <div class="card-body text-center " style="min-height: 200px">

                <h2 class=" mb-4 mt-3">{{ lang('恭喜您') }} {{ config('copyright.system_name') }}</span>
                    {{ lang('安装完成') }}！</h2>

                <blockquote >{{ lang('管理员用户名') }} <span  class="text-success">kongqi</span> {{ lang('密码') }} <span class="text-success">kongqi1688</span>，{{ lang('请尽快登录系统进行修改，防止系统被恶意攻击') }}。</blockquote>



            </div>
            <div class="card-footer text-center ">
                <a class="btn btn-success f14 mr-4" target="_blank" href="{{ route('admin.login') }}">{{ lang('登录后台') }}</a>
                <a class="btn btn-secondary f14" target="_blank" href="/">{{ lang('访问首页') }}</a>
            </div>

        </div>
    </div>


@endsection

@section('foot_js')


    <script>
        layui.use(['layer', 'form'], function () {
            var form = layui.form;
            //监听提交
            form.on('submit(setDb)', function (data) {
                console.log(data.field);
                return true;
            });
        })
    </script>


@endsection