@extends('admin.default.layouts.base')
@section('add_css')
    <script>
        //登录页面在iframe下进行修复，新建打开
        if (top.location != self.location) {
            parent.window.location.reload();
        }
    </script>
@endsection
@section('body')
    <body class="bg-gradient-primary login-body" style="background: url('{{ ___('admin/images/bglogin.jpg') }}') center center">
    @endsection
    @section('content')
        <div class="container">

            <!-- Outer Row -->
            <div class=" d-flex justify-content-center align-items-center h-100">

                <div class="login-warp">

                    <div class="card o-hidden border-0 shadow-lg">
                        <div class="card-body p-0">
                            <div class="p-4">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-2">{{ config('copyright.site_name') }}</h1>
                                    <p class="mb-2">v{{config('copyright.system_version')}}</p>
                                </div>

                                <form class="user layui-form">
                                    <div class="form-group">
                                        <input type="text" lay-verify="rq" name="account"
                                               class="form-control form-control-user"
                                               id="accout" aria-describedby="emailHelp"
                                               placeholder="{{ lang('请输入账号') }} ">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" lay-verify="rq" name="password"
                                               class="form-control form-control-user"
                                               id="exampleInputPassword" placeholder="{{ lang('请输入密码') }}">
                                    </div>

                                    <div class="form-group">

                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" value="1" name="remember" class="custom-control-input"
                                                   id="customCheck">
                                            <label class="custom-control-label"
                                                   for="customCheck">{{ lang('记住密码') }}</label>
                                        </div>
                                    </div>

                                    <button type="button" class="btn btn-primary btn-user btn-block" lay-submit
                                            lay-filter="login-submit">
                                        <i class="fab fa-sign-in fa-fw"></i> {{ lang('登录') }}
                                    </button>


                                </form>


                            </div>
                        </div>

                    </div>
                    <p class="text-center mt-2 text-white-ap3 f14">Copy Right <a target="_blank" class="text-white-ap3"
                                                                                 href="//{{config('copyright.domain')}}">{{ config('copyright.author') }}</a>
                    </p>
                </div>

            </div>

        </div>
    @endsection

    @section('foot_js')
        <script>
            var postLoginUrl = '{{ route('admin.post.login') }}';
            layui.use(['uform', 'verify', 'request'], function () {
                var $ = layui.$
                    , request = layui.request
                    , form = layui.uform
                    , layer = layui.layer;

                //提交
                form.on('submit(login-submit)', function (obj) {
                    request.post(postLoginUrl, obj.field, function (res) {
                        if (res.code != 200) {
                            layer.msg(res.msg, {icon: 5, shift: 6});

                        } else {
                            layer.msg(res.msg, {icon: 1, shift: 6});
                            location.href = res.data; //后台主页
                        }
                    })
                });
                $(".layui-form").bind("keydown", function (e) {
                    var theEvent = e || window.event;
                    var code = theEvent.keyCode || theEvent.which || theEvent.charCode;
                    if (code == 13) {
                        $("[lay-submit]").click();
                    }
                });

            })
        </script>
@endsection
