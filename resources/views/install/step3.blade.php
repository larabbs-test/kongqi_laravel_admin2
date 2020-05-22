@extends('install.layout')

@section('content')
    <div class="container mt-2">
        <div class="card shadow mb-4">
            <div class="card-header">{{ lang('参数设置') }}</div>
            <div class="card-body">
                <div class="table-responsive">
                    <form class="layui-form" action="{{ route('system.install',['step'=>4]) }}" method="post">
                        @csrf
                        <table class="table table-bordered table-striped align-items-center">
                            <tr>
                                <td width="150">
                                    {{ lang('数据库类型') }}
                                </td>
                                <td>
                                    <select name="DB[DB_CONNECTION]" data-tips=" {{ lang('数据库类型') }}" lay-ignore class="form-control" lay-verify="rq">
                                        <option value="mysql">mysql</option>
                                        <option value="sqlsrv">sqlsrv</option>
                                        <option value="sqlite">sqlite</option>
                                        <option value="pgsql">pgsql</option>
                                    </select>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    {{ lang('数据库服务器') }}
                                </td>
                                <td>
                                    <input type="text" NAME="DB[DB_HOST]" placeholder=" {{ lang('数据库服务器') }}"  lay-verify="rq" value="localhost"
                                           class="form-control">
                                    <div class="layui-form-mid layui-word-aux">{{ lang('如果服务器和数据安装一起则使用localhost') }}</div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    {{ lang('数据库端口') }}
                                </td>
                                <td>
                                    <input type="text" lay-verify="rq" placeholder=" {{ lang('数据库端口') }}" name="DB[DB_PORT]" value="3306"
                                           class="form-control">
                                    <div class="layui-form-mid layui-word-aux">{{ lang('默认') }}：3306</div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    {{ lang('数据库名') }}
                                </td>
                                <td>
                                    <input type="text" lay-verify="rq" name="DB[DB_DATABASE]" placeholder="{{ lang('数据库名') }}" value=""
                                           class="form-control">
                                    <div class="layui-form-mid layui-word-aux">{{ lang('建立的表使用字符集') }}</div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    {{ lang('数据库用户名') }}
                                </td>
                                <td>
                                    <input type="text" lay-verify="rq" placeholder="{{ lang('数据库用户名') }}" name="DB[DB_USERNAME]" value=""
                                           class="form-control">

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    {{ lang('数据库密码') }}
                                </td>
                                <td>
                                    <input type="text" lay-verify="rq" value="" placeholder="{{ lang('数据库密码') }}" name="DB[DB_PASSWORD]"
                                           class="form-control">

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    {{ lang('数据库前缀') }}
                                </td>
                                <td>
                                    <input type="text"  placeholder="{{ lang('数据库前缀') }}"  name="DB[DB_PREFIX]" value=""
                                           class="form-control">
                                    <div class="layui-form-mid layui-word-aux">{{ lang('可为空') }}</div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Redis {{ lang('服务器') }}
                                </td>
                                <td>
                                    <input type="text" placeholder="Redis {{ lang('服务器') }}"   name="REDIS[REDIS_HOST]"
                                           value="127.0.0.1" class="form-control">
                                    <div class="layui-form-mid layui-word-aux">{{ lang('如果没使用到Redis可为空') }}</div>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    Redis {{ lang('密码') }}
                                </td>
                                <td>
                                    <input type="text" placeholder="Redis {{ lang('密码') }}"  name="REDIS[REDIS_PASSWORD]" value=""
                                           class="form-control">
                                    <div class="layui-form-mid layui-word-aux">{{ lang('如果没使用到Redis可为空或密码本身为空') }}</div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Redis {{ lang('端口') }}
                                </td>
                                <td>
                                    <input type="text" placeholder="Redis {{ lang('端口') }}"  name="REDIS[REDIS_PORT]" value="6379"
                                           class="form-control">
                                    <div class="layui-form-mid layui-word-aux">{{ lang('如果没使用到Redis可为空或6379默认') }}</div>
                                </td>
                            </tr>
                        </table>
                        <button  class="btn btn-success mr-4" lay-submit lay-filter="setDb">{{ lang('下一步') }}</button>
                        <a class="btn btn-secondary" href="{{ route('system.install',['step'=>2]) }}">{{ lang('上一步') }}</a>
                    </form>

                </div>

            </div>

        </div>
    </div>


@endsection

@section('foot_js')
    @if (session('message'))
        <script>
            layui.use('layer',function(){
                let layer=layui.layer;
                layer.msg("{{ session('message') }}",{time:5000})
            })
        </script>
    @endif

    <script>

        layui.use(['layer', 'uform','verify'], function () {
            var form = layui.uform;


        })
    </script>


@endsection